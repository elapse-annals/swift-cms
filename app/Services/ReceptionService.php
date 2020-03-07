<?php

namespace App\Services;

use App\Repositories\ArticleRepository;

/**
 * Class ReceptionService
 * @package App\Services
 */
class ReceptionService extends Service
{
    /**
     * @var
     */
    protected $repository;

    /**
     * @return array
     */
    public function index(): array
    {
        return [
            'lists_1' => $this->lists(1),
            'lists_2' => $this->lists(2),
        ];
    }

    /**
     * @param $group_id
     *
     * @return array
     */
    public function lists(int $group_id): array
    {
        $ArticleRepository = new ArticleRepository();
        return $ArticleRepository->getListForGroupId($group_id);
    }

    /**
     * @param $id
     *
     * @return array
     */
    public function article($id): array
    {
        $ArticleRepository = new ArticleRepository();
        return $ArticleRepository->findWithGroup($id);
    }
}
