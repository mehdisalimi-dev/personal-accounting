<?php

namespace Onion\Controller;

use Onion\UseCase\CostUseCaseInterface;

class CostInsertHandler
{
    private $service;
    
    public function __construct(CostUseCaseInterface $service)
    {
        $this->service = $service;
    }

    public function handle($request)
    {   
        return $this->service->insert($request);
    }
}