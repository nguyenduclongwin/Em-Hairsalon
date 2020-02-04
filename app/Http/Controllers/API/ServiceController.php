<?php

namespace App\Http\Controllers\API;
use App\detail_img;
use App\Category;
use App\Service;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;

class ServiceController extends BaseController
{
    public function index()
    {
        //lấy id của danh mục sản phẩm service
        $cat_parent = Category::where('slug', 'service')->get();
        //lấy tất cả các danh mục sản phẩm con của danh mục service
        $cat_service = Category::where('parent_id', $cat_parent[0]->id)->get();
        //lấy tất cả thông tin của dịch vụ
        $i = 0;
        while ($i < count($cat_service)) {
            //tìm service có cat_id ứng với từng danh mục
            $ser = Category::join('services', 'categories.id', '=', 'services.cat_id')->where('cat_id', $cat_service[$i]->id)->get();
            //tìm ảnh có cat_id ứng với từng danh mục
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
    public function store(Request $request){
        //lấy dữ liệu từ request
        $input = $request->all();
        $validator = Validator::make(
            $input,
            [
                'cat_id' => 'required',
                'service' => 'required',
                'price' => 'required'
            ]
        );
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $service = Service::create($input);
        return $this->sendResponse($service->toArray(), 'Service Created successfully');
    }
    public function update(Request $request,$id){
        //lấy dữ liệu từ request
        $input = $request->all();
        $validator = Validator::make(
            $input,
            [
                'cat_id' => 'required',
                'service' => 'required',
                'price' => 'required'
            ]
        );
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $service = Service::find($id);
        $service->cat_id=$input['cat_id'];
        $service->service=$input['service'];
        $service->price=$input['price'];
        $service->save();
        return $this->sendResponse($service->toArray(), 'Service Updated successfully');
    }
    public function delete(Service $service){
        $service->delete();
        return $this->sendResponse($service->toArray(),'Service deleted successfully');
    }
}
