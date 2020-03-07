<?php

namespace App\Repositories;

use App\Models\ArticleTag;

/**
 * Class ArticleTagRepository
 *
 * @package App\Presenters
 */
class ArticleTagRepository extends Repository
{
    /**
     * @var int
     */
    public $per_page = 10;

    /**
     * if this model associate other models need ->with('')
     *
     * @param array $data
     *
     * @return mixed
     */
    public function getList(array $data = [])
    {
        $ArticleTag = new ArticleTag();
        if (!empty($data)) {
            $ArticleTag = $this->assemblyWhere($ArticleTag, $data);
        }
        return $ArticleTag->orderBy('id')->Paginate($this->per_page);
    }

    /**
     * @param $id
     *
     * @return ArticleTag|ArticleTag[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null
     */
    public function find($id)
    {
        return ArticleTag::find($id);
    }

    public function create(array $save)
    {
        return ArticleTag::create($save);
    }

    /**
     * @param array $save
     *
     * @return ArticleTag|\Illuminate\Database\Eloquent\Model
     */
    public function updateOrCreate(array $save)
    {
        $attributes = [];
        if (isset($save['id'])) {
            $attributes['id'] = $save['id'];
        }
        if (isset($save['updated_at'])) {
            $attributes['updated_at'] = $save['updated_at'];
        }
        return ArticleTag::updateOrCreate($attributes, $save);
    }

    /**
     * @param array $save
     *
     * @return ArticleTag|\Illuminate\Database\Eloquent\Model
     */
    public function update(array $save, $id)
    {
        $attributes['updated_at'] = $save['updated_at'];
        return ArticleTag::find($id)->update($attributes, $save);
    }

    /**
     * @param int $id
     *
     * @return int
     */
    public function destroy(int $id)
    {
        return ArticleTag::destroy($id);
    }

}
