<?php

namespace App\Repositories\Interfaces;


use Illuminate\Database\Eloquent\Scope;

interface RepositoryInterface
{
    public function all($columns = ['*']);

    public function paginate($perPage = 15, $columns = ['*']);

    public function create(array $data);

    public function update(array $data, $id, $attribute = 'id');

    public function delete($id);

    public function find($id, $columns = ['*']);

//    public function findBy($field, $value, $columns = ['*']);
    public function where($field, $value, $columns = ['*']);

    public function with(string ...$relations);

    public function scope(Scope ...$scopes);
}