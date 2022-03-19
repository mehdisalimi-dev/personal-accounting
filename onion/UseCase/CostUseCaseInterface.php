<?php

namespace Onion\UseCase;

use GuzzleHttp\Psr7\Request;
use Onion\Driver\CostRepositoryInterface;

interface CostUseCaseInterface
{
    public function __construct(CostRepositoryInterface $repository);

    public function show() :array;

    public function costCategoryList() :array;

    public function insert(Request $request) :int;
}