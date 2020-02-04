<?php

namespace App\Http\Controllers\API;

use App\Category;
use App\Slide;
use App\Contact;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use App\Combo;
use App\detail_img;
use App\Salon;
use Illuminate\Support\Facades\Validator;
class IndexController extends BaseController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    //trả về dữ liệu cho Nav
    public function showNav()
    {
        //lấy dữ liệu từ database
        $contact = Contact::all();
        $salon = Salon::all();
        $link=[
            'home'=>route('index'),
            'about'=>route('about'),
            'service'=>route('service'),
            'contact'=>route('contact'),
            'news'=>route('news'),
            'emshop'=>route('emshop')
        ];
        return $this->sendResponse([
            'contact' => $contact,
            'salon' => $salon,
            'link'=>$link
        ], 'successfully');
    }
    //cập nhật nav
    public function updateNav(Request $request){
        //lấy dữ liệu từ request
        $input = $request->all();
        //validate
        $validator = Validator::make($input, [
            'worktime' => 'required',
            'phone' => 'required'
        ]);
        //nếu trống thì trả về lỗi
        if ($validator->fails()) {
            return $this->sendError('Validation Error', $validator->errors());
        }
        //validate thành công thì tiến hành update
        $salon = Salon::find(1);
        $salon->worktime = $input['worktime'];
        $salon->phone = $input['phone'];
        $salon->save();
        return $this->sendResponse($salon->toArray(), 'Nav Updated Successfully');
    }
    //trả về dữ liệu cho trang chủ
    public function index()
    {
        //lấy dữ liệu từ database
        $slide = Slide::all();
        $combo = Combo::all();
        //lấy id của danh mục sản phẩm beauty-hair
        $cat_id_beauty_hair=Category::where('slug','beauty-hair')->get();
        //lấy tất cả ảnh thuộc danh mục sản phẩm beauty-hair
        $beauty_hair_img=detail_img::where('cat_id',$cat_id_beauty_hair[0]->id)->get();
        return $this->sendResponse([
            'slide' => $slide,
            'combo' => $combo,
            'beauty_hair_img'=>$beauty_hair_img
        ], 'successfully');
    }
    //thêm slide
    public function storeSlide(Request $request){
        //lấy dữ liệu từ request
        $input = $request->all();
        //validate
        $validator = Validator::make($input, [
            'img' => 'required',
            'content' => 'required',
        ]);
        //nếu trống thì trả về lỗi
        if ($validator->fails()) {
            return $this->sendError('Validation Error', $validator->errors());
        }
        //validate thành công thì tiến hành tạo
        $slide =Slide::create($input);
        return $this->sendResponse($slide->toArray(), 'Slide created Successfully');
    }
    //sửa slide
    public function updateSlide(Request $request,$id){
        //lấy dữ liệu từ request
        $input = $request->all();
        //validate
        $validator = Validator::make($input, [
            'img' => 'required',
            'content' => 'required'
        ]);
        //nếu trống thì trả về lỗi
        if ($validator->fails()) {
            return $this->sendError('Validation Error', $validator->errors());
        }
        //validate thành công thì tiến hành update
        $slide = Slide::find($id);
        $slide->img = $input['img'];
        $slide->content = $input['content'];
        $slide->save();
        return $this->sendResponse($slide->toArray(), 'Slide Updated Successfully');
    }
    //xóa slide
    public function deleteSlide(Slide $slide){
        $slide->delete();
        return $this->sendResponse($slide->toArray(),'Slide Deleted Successfully');
    }
    //sửa combo
    public function updateCombo(Request $request,$id){
        //lấy dữ liệu từ request
        $input = $request->all();
        //validate
        $validator = Validator::make($input, [
            'name_combo' => 'required',
            'service_1' => 'required',
            'service_2' => 'required',
            'price' => 'required',
            'sale' => 'required'
        ]);
        //nếu trống thì trả về lỗi
        if ($validator->fails()) {
            return $this->sendError('Validation Error', $validator->errors());
        }
        //validate thành công thì tiến hành update
        $combo = Combo::find($id);
        $combo->name_combo = $input['name_combo'];
        $combo->service_1 = $input['service_1'];
        $combo->service_2 = $input['service_2'];
        $combo->service_3 = $input['service_3'];
        $combo->service_4 = $input['service_4'];
        $combo->service_5 = $input['service_5'];
        $combo->service_6 = $input['service_6'];
        $combo->price=$input['price'];
        $combo->sale=$input['sale'];
        $combo->save();
        return $this->sendResponse($combo->toArray(), 'Combo Updated Successfully');
    }
    //thêm combo
    public function createCombo(Request $request){
        //lấy dữ liệu từ request
        $input = $request->all();
        //validate
        $validator = Validator::make($input, [
            'name_combo' => 'required',
            'service_1' => 'required',
            'service_2' => 'required',
            'price' => 'required',
            'sale' => 'required'
        ]);
        //nếu trống thì trả về lỗi
        if ($validator->fails()) {
            return $this->sendError('Validation Error', $validator->errors());
        }
        //validate thành công thì tiến hành tạo
        $combo =Combo::create($input);
        return $this->sendResponse($combo->toArray(), 'Combo created Successfully');
    }
    //xóa combo
    public function deleteCombo(Request $request,Combo $combo){
        $combo->delete();
        return $this->sendResponse($combo->toArray(), 'Combo deleted Successfully');

    }

    //cập nhật xu hướng tóc mới
    public function updateHairBeauty(Request $request,$id){
        //lấy dữ liệu từ request
        $input = $request->all();
        //validate
        $validator = Validator::make($input, [
            'img' => 'required'
        ]);
        //nếu trống thì trả về lỗi
        if ($validator->fails()) {
            return $this->sendError('Validation Error', $validator->errors());
        }
        //validate thành công thì tiến hành update
        $hair_beauty = detail_img::find($id);
        $hair_beauty->img = $input['img'];
        $hair_beauty->save();
        return $this->sendResponse($hair_beauty->toArray(), 'Combo Updated Successfully');

    }
}
