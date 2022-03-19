<?php

namespace Onion\UseCase;

use Onion\Driver\CostRepositoryInterface;

class CostService implements CostUseCaseInterface
{
    public function __construct(CostRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function show() :array
    {
        return $this->repository->show();
    }

    public function costCategoryList(): array
    {
        return $this->repository->costCategoryList();
    }

    public function insert($request) :int
    {
        return $this->repository->insert($request);
    }
    
}