<?php

namespace App\Repositories;

use App\Models\ArticleGroup;

/**
 * Class ArticleGroupRepository
 *
 * @package App\Presenters
 */
class ArticleGroupRepository extends Repository
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
        $ArticleGroup = new ArticleGroup();
        if (!empty($data)) {
            $ArticleGroup = $this->assemblyWhere($ArticleGroup, $data);
        }
        return $ArticleGroup->orderBy('id')->Paginate($this->per_page);
    }

    /**
     * @param $id
     *
     * @return ArticleGroup|ArticleGroup[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null
     */
    public function find($id)
    {
        return ArticleGroup::find($id);
    }

    public function create(array $save)
    {
        return ArticleGroup::create($save);
    }

    /**
     * @param array $save
     *
     * @return ArticleGroup|\Illuminate\Database\Eloquent\Model
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
        return ArticleGroup::updateOrCreate($attributes, $save);
    }

    /**
     * @param array $save
     *
     * @return ArticleGroup|\Illuminate\Database\Eloquent\Model
     */
    public function update(array $save, $id)
    {
        $attributes['updated_at'] = $save['updated_at'];
        return ArticleGroup::find($id)->update($attributes, $save);
    }

    /**
     * @param int $id
     *
     * @return int
     */
    public function destroy(int $id)
    {
        return ArticleGroup::destroy($id);
    }

}
