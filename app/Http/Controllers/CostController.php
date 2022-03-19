<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Onion\Controller\CostShowHandler;
use Onion\Controller\CostInsertHandler;
use Onion\UseCase\CostService;
use Onion\Driver\CostEloquentRepository;

class CostController extends Controller
{

    public function show(Request $request)
    {
        return Response((array)(new CostShowHandler(new CostService(new CostEloquentRepository())))->handle($request));
    }

    public function categoryList(Request $request)
    {
        return Response((array)(new CostShowHandler(new CostService(new CostEloquentRepository())))->handle($request));
    }

    public function insert(Request $request)
    {
        return Response((array)(new CostInsertHandler(new CostService(new CostEloquentRepository())))->handle($request));        
    }
}
