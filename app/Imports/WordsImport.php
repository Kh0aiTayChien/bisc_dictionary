<?php

namespace App\Imports;

use App\Models\Word;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithMapping;
class WordsImport implements ToCollection, WithHeadingRow, WithMapping
{
    protected $errors = [];

    public function headingRow() : int
    {
        return 1;
    }
    public function collection(Collection $rows)
    {
        $rules = [
            'name' => 'required|string|max:255|unique:words,name',
            'pronunciation' => 'string',
            'classes' => 'required|string|max:255',
            'definition' => 'required|string',
            'example' => 'string|nullable',
        ];
//        dd($rows->toArray());
        foreach ($rows as $index => $row) {
            $validator = Validator::make($row->toArray(), $rules);
            if ($validator->fails()) {
                $this->errors[] = "Row $index: " . implode(", ", $validator->errors()->all());
            } else {
                $word = new Word;
                $word->name = $row['name'] ?? $row['word'];
                $word->pronunciation = $row['pronunciation'];
                $word->classes =  $row['classes'] ?? $row['class'];
                $word->definition = $row['definition'];
                $word->example = $row['example'];
                $word->save();
            }
        }
    }

    public function getErrors()
    {
        return $this->errors;
    }
    public function map($row): array
    {
        return [
            'name' => $row['word'] ?? $row['name'],
            'pronunciation' => $row['pronunciation'],
            'classes' => $row['classes'] ?? $row['class'],
            'definition' => $row['definition'],
            'example' => $row['example'],
        ];
    }
}
