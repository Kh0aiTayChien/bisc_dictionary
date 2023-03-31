<?php

namespace App\Imports;

use App\Models\Word;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Illuminate\Support\Facades\Validator;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class WordsImport implements ToCollection, WithHeadingRow
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
            'pronunciation' => 'string|nullable',
            'classes' => 'required|string|max:255',
            'definition' => 'required|string',
            'example' => 'string|nullable',
        ];

        foreach ($rows as $index => $row) {
            $validator = Validator::make($row->toArray(), $rules);

            if ($validator->fails()) {
                $this->errors[] = "Row $index: " . implode(", ", $validator->errors()->all());
            } else {
                $word = new Word([
                    'name' => $row['name'] ?? $row['word'],
                    'pronunciation'=> $row['pronunciation'],
                    'classes' => $row['classes'] ?? $row['class'],
                    'definition' => $row['definition'],
                    'example' => $row['example'],
                ]);
                $word->save();
            }
        }
    }

    public function getErrors()
    {
        return $this->errors;
    }
}