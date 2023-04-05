<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Word;
use Illuminate\Pagination\Paginator;
use App\Imports\WordsImport;
use Illuminate\View\View;
use Maatwebsite\Excel\Facades\Excel;
use GGG\Language\PhoneticTranscriber;
class WordController extends Controller
{
    public function index(Request $request){
        $search = $request->query('search');
        $words = Word::orderBy('name');
        if (!empty($search)) {
            $words = $words->where('name', 'like', '%' . $search . '%');
        }
        $words = $words->paginate(10);
        if ($request->ajax()) {
            return view('page', ['words' => $words])->render();
        }
        return view('admin/word',compact('words'));
    }

    public function data(Request $request)
    {
        $search = $request->input('search.value');
        $words = Word::query();

        if (!empty($search)) {
            $words->where('name', 'like', '%' . $search . '%');
        }

        $words = $words->paginate($request->input('length'));

        $data = $words->toArray();
        $data['draw'] = $request->input('draw');
        $data['recordsTotal'] = $words->total();
        $data['recordsFiltered'] = $words->total();
        // Cấu hình phân trang của DataTables
        $data['start'] = $words->firstItem() - 1;
        $data['length'] = $words->perPage();
        $data['data'] = $words->items();

        return response()->json($data);
    }

    public function create()
    {
        return view ('admin/newWord');
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:30|unique:words,name',
            'classes' => 'required|string|max:50|',
            'definition' => 'required',
        ],[
            'name.unique' => 'The word has already been taken',
            'name.classes' => 'The word may not be greater than 30 characters',
            'name.required' => 'The word field is required'
        ]);
        $transcriber = new PhoneticTranscriber();
        $word = new Word;
        $word->name = $validatedData['name'];
        $arr = $transcriber->transcribe($validatedData['name']);
        $phonemes = implode('', $arr);

        $word->classes = $validatedData['classes'];
        $word->definition = $validatedData['definition'];
        $word->example = $request->input('example');
        $word->pronunciation = $request->input('pronunciation') ?? $phonemes;

        $word->save();

        return redirect()->route('words.index')->with('success', 'Word created successfully!');
    }

    public function edit($id)
    {
        $word = Word::findOrFail($id);
        return view ('admin/showWord',compact('word'));
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'name' => 'required|string|max:30',
            'classes' => 'required|string|max:50|',
            'definition' => 'required',
        ],[
            'name.unique' => 'The word has already been taken',
            'name.classes' => 'The word may not be greater than 30 characters',
            'name.required' => 'The word field is required'
        ]);

        $word = Word::findOrFail($id);

        $word->name = $validatedData['name'];
        $word->classes = $validatedData['classes'];
        $word->definition = $validatedData['definition'];
        $word->example = $request->input('example');
        $word->pronunciation = $request->input('pronunciation');
        $word->save();

        return redirect()->route('words.index')->with('success', 'Word updated successfully!');
    }
    public function destroy($id)
    {
        try {
            $word = Word::findOrFail($id);
            $word->delete();
        } catch (\Illuminate\Database\Eloquent\ModelNotFoundException $exception) {
            \Log::error('Failed to delete word');
            abort(404);
        }
    }
    public function search(Request $request)
    {
        $term = $request->input('term');

        $words = Word::where('name', 'LIKE', '%' . $term . '%')
            ->take(15)
            ->get();

        return response()->json($words);
    }

    public function result(Request $request)
    {
        // Lấy từ khóa tìm kiếm từ yêu cầu Ajax
        $keyword = $request->input('keyword');
        // Tìm kiếm từ khóa trong bảng word và lấy định nghĩa
        $result = Word::where('name', 'like', '%'.$keyword.'%')
            ->first();
        if ($result) {
            // Tăng giá trị của trường search_count lên 1 và lưu vào cơ sở dữ liệu
            $result->view_count++;
            $result->save();
        }
        // Trả về kết quả dưới dạng JSON
        return response()->json($result);
    }

    public function import_form()
    {
        return view('admin/import-form');
    }

    public function import(Request $request)
    {
        $file = $request->file('file');
        $import = new WordsImport();
        Excel::import($import, $file, null, \Maatwebsite\Excel\Excel::XLSX); //Thêm tham số thứ ba và thứ tư

        if (count($import->getErrors()) > 0) {
            $errors = implode("<br>", $import->getErrors());
            return redirect('admin/words')->withErrors(['message' => 'Import thất bại: ' . $errors]);
        } else {
            return redirect('admin/words')->with('success', 'Import thành công');
        }
    }
    public function homepage()
    {
        return view('pages/index');
    }
}
