<?php

namespace App\Exports;

use App\Models\ArticleGroup;
use Maatwebsite\Excel\Concerns\FromCollection;

class ArticleGroupExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ArticleGroup::all();
    }
}
