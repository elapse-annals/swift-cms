<?php

namespace App\Repositories;

use App\Models\Admin;

/**
 * Class AdminRepository
 *
 * @package App\Presenters
 */
class AdminRepository extends Repository
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
        $Admin = new Admin();
        if (!empty($data)) {
            $Admin = $this->assemblyWhere($Admin, $data);
        }
        return $Admin->orderBy('id')->Paginate($this->per_page);
    }

    /**
     * @param $id
     *
     * @return Admin|Admin[]|\Illuminate\Database\Eloquent\Collection|\Illuminate\Database\Eloquent\Model|null
     */
    public function find($id)
    {
        return Admin::find($id);
    }

    public function create(array $save)
    {
        return Admin::create($save);
    }

    /**
     * @param array $save
     *
     * @return Admin|\Illuminate\Database\Eloquent\Model
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
        return Admin::updateOrCreate($attributes, $save);
    }

    /**
     * @param array $save
     *
     * @return Admin|\Illuminate\Database\Eloquent\Model
     */
    public function update(array $save, $id)
    {
        $attributes['updated_at'] = $save['updated_at'];
        return Admin::find($id)->update($attributes, $save);
    }

    /**
     * @param int $id
     *
     * @return int
     */
    public function destroy(int $id)
    {
        return Admin::destroy($id);
    }

}
