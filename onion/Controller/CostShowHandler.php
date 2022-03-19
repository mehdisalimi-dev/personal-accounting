<?php

namespace Onion\Controller;

use Onion\UseCase\CostUseCaseInterface;

class CostShowHandler
{
    private $service;
    
    public function __construct(CostUseCaseInterface $service)
    {
        $this->service = $service;
    }

    public function handle($request)
    {   
        return $this->service->show();
    }
}