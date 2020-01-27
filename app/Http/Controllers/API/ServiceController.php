<?php

namespace App\Http\Controllers\API;
use App\Category;
use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
class ServiceController extends BaseController
{
    public function showService(){
        $haircut=Service::where('cat_id',1)->get();
        $hairwash=Service::where('cat_id',2)->get();
        $hairdye=Service::where('cat_id',3)->get();
        return $this->sendResponse([
            'haircut'=>$haircut,
            'hairwash'=>$hairwash,
            'hairdye'=>$hairdye
        ],'successfully');
    }
}
