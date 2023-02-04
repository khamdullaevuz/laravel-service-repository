<?php

namespace App\Services;

use App\Http\Resources\ProductResource;
use App\Repositories\ProductRepository;
use Illuminate\Http\Request;

class ProductService
{
    protected ProductRepository $repository;
    public function __construct(ProductRepository $repository)
    {
        $this->repository = $repository;
    }

    public function index(): \Illuminate\Database\Eloquent\Collection
    {
        return $this->repository->getAll();
    }

    public function store(Request $request)
    {
        return $this->repository->create($request->all());
    }

    public function show(int $id)
    {
        return $this->repository->getById($id);
    }

    public function update(Request $request, int $id)
    {
        $this->repository->getById($id)->update($request->all());

        return $this->repository->getById($id);
    }

    public function destroy(int $id)
    {
        return $this->repository->getById($id)->delete();
    }
}
