<?php

namespace Onion\Driver;

interface CostRepositoryInterface
{
    public function show(): array;

    public function costCategoryList(): array;

    public function insert($request): int;

}