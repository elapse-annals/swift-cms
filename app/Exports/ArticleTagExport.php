<?php

namespace App\Exports;

use App\Models\ArticleTag;
use Maatwebsite\Excel\Concerns\FromCollection;

class ArticleTagExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return ArticleTag::all();
    }
}
