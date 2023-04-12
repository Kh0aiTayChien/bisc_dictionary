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
//        dd($rows);
        $rules = [
            'name' => 'required|string|max:255|unique:words,name',
            'pronunciation' => 'nullable',
            'classes' => 'nullable|string|max:255',
            'definition' => 'required|string',
            'example' => 'string|nullable',
        ];

        $messages = [
            'unique' => "The ':input' has already been taken.",
        ];

        $rows = $rows->filter(function ($row) {
            return !empty(array_filter($row->toArray()));
        })->values();

        foreach ($rows as $index => $row) {
            $validator = Validator::make($row->toArray(), $rules, $messages);
            if ($validator->fails()) {
                $this->errors[] = "Word number " . ($index + 1) . ": " . implode(", ", $validator->errors()->all());
            } else {

                Word::create([
                    'name' => $row['name'] ?? $row['word'],
                    'pronunciation' => $row['pronunciation'],
                    'classes' => $row['classes'] ?? $row['class'] ?? null,
                    'definition' => $row['definition'],
                    'example' => $row['example']
                ]);
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
            'name' => $row['name'] ?? $row['word'] ,
            'pronunciation' => $row['pronunciation'],
            'classes' => $row['classes'] ?? $row['class'],
            'definition' => $row['definition'],
            'example' => $row['example'],
        ];
    }
}
