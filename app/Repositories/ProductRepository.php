<?php

namespace App\Repositories;

use App\Models\Product;

class ProductRepository
{

    public function getAll(): \Illuminate\Database\Eloquent\Collection
    {
        return Product::all();
    }

    public function create(array $all)
    {
        return Product::create($all);
    }

    public function getById(int $id)
    {
        return Product::find($id);
    }
}
