<?php

/**
 * Created by Reliese Model.
 */

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\SoftDeletes;
use Reliese\Database\Eloquent\Model;

/**
 * Class ArticleGroup
 * 
 * @property int $id
 * @property string $group_name
 * @property int $parent_id
 * @property Carbon $created_at
 * @property string $created_by
 * @property Carbon $updated_at
 * @property string $updated_by
 * @property string $deleted_at
 * @property string $deleted_by
 *
 * @package App\Models
 */
class ArticleGroup extends Model
{
	use SoftDeletes;
	protected $table = 'article_groups';

	protected $casts = [
		'parent_id' => 'int'
	];

	protected $fillable = [
		'group_name',
		'parent_id',
		'created_by',
		'updated_by',
		'deleted_by'
	];
}
