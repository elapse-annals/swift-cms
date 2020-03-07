<?php

namespace App\Services;

use App\Presenters\ArticleTagPresenter;
use App\Repositories\ArticleTagRepository;

/**
 * Class ArticleTagService
 *
 * @package App\Services
 */
class ArticleTagService extends Service
{
    /**
     * @var ArticleTagRepository
     */
    protected $repository;

    /**
     * @var
     */
    private $request_data;

    /**
     * ArticleTagService constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->repository = new ArticleTagRepository();
    }

    /**
     * @param array $data
     *
     * @return mixed
     */
    public function getList($data = [])
    {
        if (isset($data['per_page'])) {
            $this->repository->per_page = $data['per_page'];
        }
        if (! isset($data['search']) || '{}' == $data['search']) {
            $data['search'] = [];
        }
        return $this->repository->getList($data['search']);
    }

    /**
     * @param $data
     *
     * @return int
     */
    public function store($data)
    {
        return $this->repository
            ->create($data);
    }

    /**
     *
     */
    public function create()
    {
    }

    /**
     * @param $id
     *
     * @return \App\Models\ArticleTag|\App\Models\ArticleTag[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null
     */
    public function getIdInfo($id)
    {
        return $this->repository->find($id);
    }

    /**
     * @param $data
     *
     * @return int
     */
    public function update($data, $id)
    {
        return $this->repository->update($data, $id);
    }

    /**
     * @param $id
     */
    public function destroy($id)
    {
        $this->repository->destroy($id);
    }


}
