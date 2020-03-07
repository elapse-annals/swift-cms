<?php

namespace App\Repositories;

use App\Models\Article;

/**
 * Class ArticleRepository
 * @package App\Repositories
 */
class ArticleRepository extends Repository
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
        $Article = new Article();
        if (! empty($data)) {
            $Article = $this->assemblyWhere($Article, $data);
        }
        return $Article->orderBy('id')->Paginate($this->per_page);
    }

    /**
     * @param int $group_id
     * @param int $limit
     *
     * @return mixed
     */
    public function getListForGroupId(int $group_id, int $limit = 10): array
    {
        return Article::where('group_id', $group_id)
            ->limit($limit)
            ->get()
            ->toArray();
    }

    /**
     * @param $id
     *
     * @return Article|Article[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null
     */
    public function find($id)
    {
        return Article::find($id);
    }

    /**
     * @param int $id
     *
     * @return array
     */
    public function findWithGroup(int $id): array
    {
        return Article::with('articleGroup')
            ->find($id)
            ->toArray();
    }

    public function create(array $save)
    {
        return Article::create($save);
    }

    /**
     * @param array $save
     *
     * @return Article|\Illuminate\Database\Eloquent\Model
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
        return Article::updateOrCreate($attributes, $save);
    }

    /**
     * @param array $save
     * @param       $id
     *
     * @return mixed
     */
    public function update(array $save, $id)
    {
        $update = Article::where('id', $id)
            ->where('updated_at', $save['updated_at'])
            ->update($save);
        return $update;
    }

    /**
     * @param int $id
     *
     * @return int
     */
    public function destroy(int $id)
    {
        return Article::destroy($id);
    }

}
