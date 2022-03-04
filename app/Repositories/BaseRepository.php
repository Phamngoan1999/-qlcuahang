<?php

namespace App\Repositories;

use Illuminate\Contracts\Container\BindingResolutionException;


abstract class BaseRepository
{
    public $model;

    /**
     * @throws BindingResolutionException
     */
    public function __construct()
    {
        $this->makeModel();
    }

    /**
     * @throws BindingResolutionException
     */
    public function makeModel()
    {
        $this->model = app($this->model());
    }

    abstract public function model();

    public function all()
    {
        return $this->model->all();
    }

    public function findOrFail($id, $table)
    {
        return $this->model->with($table)->findOrFail($id);
    }

    public function find($id)
    {
        return $this->model->find($id);
    }

    public function create($dataCreate)
    {
        return $this->model->create($dataCreate);
    }

    public function update($dataUpdate, $id)
    {
        return $this->model->findOrFail($id)->update($dataUpdate);
    }

    public function delete($id)
    {
        return $this->model->destroy($id);
    }

    public function count()
    {
        return $this->model->all()->count();
    }
}
