<?php

namespace App\Http\Controllers\API;
use App\detail_img;
use App\Category;
use App\Service;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;

class ServiceController extends BaseController
{
    public function showService()
    {
        $cat_parent = Category::where('slug', 'service')->get();
        $cat_service = Category::where('parent_id', $cat_parent[0]->id)->get();
        $i = 0;
        while ($i < count($cat_service)) {
            $ser = Category::join('services', 'categories.id', '=', 'services.cat_id')->where('cat_id', $cat_service[$i]->id)->get();
            $img = detail_img::where('cat_id',$cat_service[$i]->id)->get();
            $service = [
                'name_cat' => $cat_service[$i]->name_cat,
                'service' => $ser,
                'img'=>$img
            ];
            $services[] = $service;
            $i++;
        }
        return $this->sendResponse([
            'service' => $services
        ], 'successfully');
    }
}
