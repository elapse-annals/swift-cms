<?php

namespace App\Http\Controllers;

use App\Services\ReceptionService;

class ReceptionController extends Controller
{
    /**
     * ReceptionController constructor.
     */
    public function __construct()
    {
        parent::__construct();
        $this->service = new ReceptionService();
    }

    /**
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $data = $this->service->index();
        return view('receptions.index', $data);
    }

    /**
     * @param int $group_id
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function lists(int $group_id)
    {
        $data = [
            'articles' => $this->service->lists($group_id),
            'group_id' => $group_id,
        ];
        return view('receptions.lists', $data);
    }

    public function article($article_id)
    {
        $data['article'] = $this->service->article($article_id);
        return view('receptions.article', $data);
    }
}
