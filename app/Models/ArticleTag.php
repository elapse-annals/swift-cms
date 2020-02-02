<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Reliese\Database\Eloquent\Model;

/**
 * Class ArticleTag
 * 
 * @property int $id
 * @property int $article_id
 * @property string $tag_name
 * @property Carbon $created_at
 * @property string $created_by
 * @property Carbon $updated_at
 * @property string $updated_by
 * @property string $deleted_at
 * @property string $deleted_by
 *
 * @package App\Models
 */
class ArticleTag extends Model
{
	use SoftDeletes;
	protected $table = 'article_tags';

	protected $casts = [
		'article_id' => 'int'
	];

	protected $fillable = [
		'article_id',
		'tag_name',
		'created_by',
		'updated_by',
		'deleted_by'
	];
}
