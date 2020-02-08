<?php

namespace App\Http\Controllers\API;

use App\Contact;
use App\Salon;
use Illuminate\Http\Request;
use App\Http\Controllers\API\BaseController as BaseController;
use Illuminate\Support\Facades\Validator;

class ContactController extends BaseController
{
    //trả về dữ liệu cho trang contact
    public function index()
    {
        //lấy dữ liệu từ database
        $contact = Contact::all();
        $salon = Salon::all();
        return $this->sendResponse(['contact' => $contact, 'salon' => $salon], "successfully");
    }
    //tạo chi nhánh salon mới
    public function store(Request $request)
    {
        //lấy dữ liệu từ request
        $input = $request->all();
        $validator = Validator::make(
            $input,
            [
                'name' => 'required',
                'address' => 'required',
                'phone' => 'required'
            ]
        );
        if ($validator->fails()) {
            return $this->sendError('Validation Error.', $validator->errors());
        }
        $contact = contact::create($input);
        return $this->sendResponse($contact->toArray(), 'Salon Created successfully');
    }
    //cập nhật thông tin chi nhánh salon
    public function update(Request $request, $id)
    {
        //lấy dữ liệu từ request
        $input = $request->all();
        //validate
        $validator = Validator::make($input, [
            'name' => 'required',
            'address' => 'required',
            'phone' => 'required'
        ]);
        //nếu trống thì trả về lỗi
        if ($validator->fails()) {
            return $this->sendError('Validation Error', $validator->errors());
        }
        //validate thành công thì tiến hành update
        $contact = Contact::find($id);
        $contact->name = $input['name'];
        $contact->address = $input['address'];
        $contact->phone = $input['phone'];
        $contact->save();
        return $this->sendResponse($contact->toArray(), 'salon Updated Successfully');
    }
    //xóa chi nhánh salon
    public function delete(Request $request,Contact $contact){
        $contact->delete();
        return $this->sendResponse($contact->toArray(),'Contact deleted successfully');
    }
}
