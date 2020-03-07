<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Reliese\Database\Eloquent\Model;

/**
 * Class Article
 *
 * @property int    $id
 * @property string $title
 * @property string $content
 * @property int    $group_id
 * @property Carbon $created_at
 * @property string $created_by
 * @property Carbon $updated_at
 * @property string $updated_by
 * @property string $deleted_at
 * @property string $deleted_by
 *
 * @package App\Models
 */
class Article extends Model
{
    use SoftDeletes;
    protected $table = 'articles';

    protected $casts = [
        'group_id' => 'int',
    ];

    protected $fillable = [
        'title',
        'content',
        'group_id',
        'created_by',
        'updated_by',
        'deleted_by',
    ];

    public function articleGroup()
    {
        return $this->belongsTo('App\Models\ArticleGroup', 'group_id', 'id')
            ->withDefault();
    }
}
