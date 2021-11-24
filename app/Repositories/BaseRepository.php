<?php

namespace App\Repositories;

use Illuminate\Database\Eloquent\Model;
use phpDocumentor\Reflection\Types\This;
use Illuminate\Pagination\Paginator;
class BaseRepository
{
    protected Model $model;

    public function __construct(Model $model)
    {
        $this->model = $model;
    }

    public function getAll()
    {
        $models = $this->model->all()->toQuery()->paginate(5);
        return $models;
    }

    public function getById($id)
    {
        $model = $this->model::query()->findOrFail($id);

        return $model;
    }

    public function delete($id)
    {
        $model = $this->model::query()->findOrFail($id);
        $model->delete();
    }


}
