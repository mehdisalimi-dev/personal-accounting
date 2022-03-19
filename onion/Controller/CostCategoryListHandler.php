<?php

namespace Onion\Controller;

use Onion\UseCase\CostUseCaseInterface;

class CostCategoryListHandler
{
    private $service;
    
    public function __construct(CostUseCaseInterface $service)
    {
        $this->service = $service;
    }

    public function handle()
    {   
        return $this->service->costCategoryList();
    }
}