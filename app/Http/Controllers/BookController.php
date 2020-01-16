<?php

namespace App\Http\Controllers;

use App\Customer;
use App\Book;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\DB;
use Yajra\DataTables\DataTables;
use Carbon\Carbon;

class BookController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(Request $request)
    {
        if ($request->ajax()) {
            $book = Customer::join('books', 'customers.id', '=', 'books.cus_id')->get(['name', 'gender', 'phone', 'salon', 'service', 'date', 'time', 'message']);
            return datatables($book)->make(true);
        }
        return view('book.listbook');
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $today = Carbon::now('Asia/Ho_Chi_Minh')->format('d/m/Y');
        $tomorrow = Carbon::tomorrow('Asia/Ho_Chi_Minh')->format('d/m/Y');
        $todayth = Carbon::now('Asia/Ho_Chi_Minh')->format('l');
        $tomorrowth = Carbon::tomorrow('Asia/Ho_Chi_Minh')->format('l');

        switch ($todayth) {
            case "Monday":
                $todayth = "Thứ Hai";
                break;
            case "Tuesday":
                $todayth = "Thứ Ba";
                break;
            case "Wednesday":
                $todayth = "Thứ Tư";
                break;
            case "Thursday":
                $todayth = "Thứ Năm";
                break;
            case "Friday":
                $todayth = "Thứ Sáu";
                break;
            case "Saturday":
                $todayth = "Thứ Bảy";
                break;
            case "Sunday":
                $todayth = "Chủ Nhật";
                break;
            default;
        }
        switch ($tomorrowth) {
            case "Monday":
                $tomorrowth = "Thứ Hai";
                break;
            case "Tuesday":
                $tomorrowth = "Thứ Ba";
                break;
            case "Wednesday":
                $tomorrowth = "Thứ Tư";
                break;
            case "Thursday":
                $tomorrowth = "Thứ Năm";
                break;
            case "Friday":
                $tomorrowth = "Thứ Sáu";
                break;
            case "Saturday":
                $tomorrowth = "Thứ Bảy";
                break;
            case "Sunday":
                $tomorrowth = "Chủ Nhật";
                break;
            default;
        }
        return view('book.book', [
            'today' => $today,
            'tomorrow' => $tomorrow,
            'todayth' => $todayth,
            'tomorrowth' => $tomorrowth
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        //validate form input
        request()->validate([
            'name' => 'required|min:3|max:255',
            'gender' => 'required',
            // 'email' => 'required|email|unique:customers,email',
            'phone' => 'required|regex:/(0)[0-9]{9}/|max:10',
            'salon' => 'required',
            'service' => 'required',
            'date' => 'required',
            'time' => 'required'
        ], [
            'name.required' => 'Mời quý khách nhập tên. / Please enter your name.',
            // 'name.alpha' => 'Tên chỉ có thể chứa các chữ cái. / The name may only contain letters.',
            'name.min' => 'Tên phải có độ dài từ 3 đến 255 kí tự.',
            'name.max' => 'Tên phải có độ dài từ 3 đến 255 kí tự.',
            'gender.required' => 'Vui lòng chọn giới tính của quý khách. / Please enter your gender.',
            // 'email.required' => 'Vui lòng nhập Email.',
            // 'email.email' => 'Email không đúng định dạng.',
            // 'email.unique' => 'Email đã tồn tại.',
            'phone.required' => 'Vui lòng nhập số điện thoại của quý khách. / Please enter your phone number.',
            'phone.regex' => 'Số điện thoại không tồn lại. / Phone number does not exist.',
            'phone.max' => 'Số điện thoại không tồn lại. / Phone number does not exist.',
            // 'phone.unique' => 'Số điện thoại này đã được lên lịch. / This phone number has been scheduled. ',
            'salon.required' => 'Vui lòng chọn cơ sở EM-Hair Salon. / Please select the EM-Hair Salon facility.',
            'service.required' => 'Vui lòng chọn dịch vụ. / Please select the service.',
            'date.required' => 'Vui lòng chọn ngày bạn muốn sử dụng dịch vụ. / Please select the date you want to use the service.',
            'time.required' => 'Vui lòng chọn giờ bạn muốn sử dụng dịch vụ. / Please select the time you want to use the service.',
        ]);

        $valid_phone = Customer::where('phone', request("phone"))->count();
        //if phone number is exists in customers table
        if ($valid_phone > 0) {
            $cus_id = Customer::where('phone', request("phone"))->get('id');
            $valid_book = Book::where('cus_id', $cus_id[0]->id)->count();

            //if the phone number is already book
            if ($valid_book > 0) {
                return redirect()->back()->withInput()->withErrors(['phone' => 'Số điện thoại này đã được lên lịch. / This phone number has been scheduled. '], 'phone');
            }

            //if the phone number is not book
            else {
                $book = new Book();
                $book->cus_id = $cus_id[0]->id;
                $book->salon = request("salon");
                $book->service = implode(",", request("service"));
                $book->date = request("date");
                $book->time = request("time");
                $book->message = request("message");
                $book->save();
            }
        }
        //if phone number is not exists in customers table
        else {
            $customer = new Customer();
            $customer->name = request("name");
            $customer->gender = request("gender");
            // $customer->email = request("email");
            $customer->phone = request("phone");
            $customer->save();

            $book = new Book();
            $book->cus_id = $customer->id;
            $book->salon = request("salon");
            $book->service = implode(",", request("service"));
            $book->date = request("date");
            $book->time = request("time");
            $book->message = request("message");
            $book->save();
        }
        $phone="phone=".request('phone');
        return redirect()->route('booked',$phone)->withErrors(['success' => 'Đặt lịch thành công'], 'success');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function findBook()
    {
        return view('book.findbook');
    }
    public function show(Request $request)
    {
        request()->validate([
            'phone' => 'required|regex:/(0)[0-9]{9}/|max:10'
        ], [
            'phone.required' => 'Vui lòng nhập số điện thoại sử dụng để đặt lịch. / Please enter the phone number used to schedule.',
            'phone.regex' => 'Số điện thoại không tồn lại. / Phone number does not exist.',
            'phone.max' => 'Số điện thoại không tồn lại. / Phone number does not exist.',
        ]);
        $valid_phone = Customer::where('phone', $request->phone)->count();
        if ($valid_phone == 0) {
            return redirect()->back()->withErrors(['phone' => 'Số điện thoại chưa được lên lịch, mời quý khách đặt lịch. / Phone number has not been scheduled, please schedule.'], 'phone');
        } else {
            $cus_id = Customer::where('phone', $request->phone)->get('id');
            $valid_book = Book::where('cus_id', $cus_id[0]->id)->count();
            if ($valid_book == 0) {
                return redirect()->back()->withErrors(['phone' => 'Số điện thoại chưa được lên lịch, mời quý khách đặt lịch. / Phone number has not been scheduled, please schedule.'], 'phone');
            }
        }
        $booked = Customer::join('books', 'customers.id', '=', 'books.cus_id')->where('phone', $request->phone)->get();
        return view('book.booked', compact('booked'));
    }
    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($phone)
    {
        $today = Carbon::now('Asia/Ho_Chi_Minh')->format('d/m/Y');
        $tomorrow = Carbon::tomorrow('Asia/Ho_Chi_Minh')->format('d/m/Y');
        $todayth = Carbon::now('Asia/Ho_Chi_Minh')->format('l');
        $tomorrowth = Carbon::tomorrow('Asia/Ho_Chi_Minh')->format('l');
        $info = Customer::join('books', 'customers.id', '=', 'books.cus_id')->where('phone', $phone)->get();
        switch ($todayth) {
            case "Monday":
                $todayth = "Thứ Hai";
                break;
            case "Tuesday":
                $todayth = "Thứ Ba";
                break;
            case "Wednesday":
                $todayth = "Thứ Tư";
                break;
            case "Thursday":
                $todayth = "Thứ Năm";
                break;
            case "Friday":
                $todayth = "Thứ Sáu";
                break;
            case "Saturday":
                $todayth = "Thứ Bảy";
                break;
            case "Sunday":
                $todayth = "Chủ Nhật";
                break;
            default;
        }
        switch ($tomorrowth) {
            case "Monday":
                $tomorrowth = "Thứ Hai";
                break;
            case "Tuesday":
                $tomorrowth = "Thứ Ba";
                break;
            case "Wednesday":
                $tomorrowth = "Thứ Tư";
                break;
            case "Thursday":
                $tomorrowth = "Thứ Năm";
                break;
            case "Friday":
                $tomorrowth = "Thứ Sáu";
                break;
            case "Saturday":
                $tomorrowth = "Thứ Bảy";
                break;
            case "Sunday":
                $tomorrowth = "Chủ Nhật";
                break;
            default;
        }
        return view('book.edit', [
            'today' => $today,
            'tomorrow' => $tomorrow,
            'todayth' => $todayth,
            'tomorrowth' => $tomorrowth,
            'info' => $info
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Book $book, $id, $phone)
    {
        request()->validate([
            'salon' => 'required',
            'service' => 'required',
            'date' => 'required',
            'time' => 'required'
        ], [
            'salon.required' => 'Vui lòng chọn cơ sở EM-Hair Salon. / Please select the EM-Hair Salon facility.',
            'service.required' => 'Vui lòng chọn dịch vụ. / Please select the service.',
            'date.required' => 'Vui lòng chọn ngày bạn muốn sử dụng dịch vụ. / Please select the date you want to use the service.',
            'time.required' => 'Vui lòng chọn giờ bạn muốn sử dụng dịch vụ. / Please select the time you want to use the service.'
        ]);
        $book = Book::find($id);
        $book->salon = request('salon');
        $book->service = implode(",", request("service"));
        $book->date = request('date');
        $book->time = request('time');
        $book->message = request('message');
        $book->save();
        $token = csrf_token();
        return redirect("book/booked/?$token&phone=$phone");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(Request $request)
    {
        if ($request->id) {
            $book = Book::find($request->id);
            $book->delete();
            return "success";
        }
    }
    public function statusCalender(Request $request)
    {
        $date = request('date');
        $salon= request('salon');
        $valid_calender = array();
        $valid_calender['date'] = $date;
        $valid_calender['now'] = Carbon::now('Asia/Ho_Chi_Minh')->format('H');
        $valid_calender['08:00'] = Book::where('salon',$salon)->where('date', $date)->where('time', "08:00")->count();
        $valid_calender['08:30'] = Book::where('salon',$salon)->where('date', $date)->where('time', "08:30")->count();
        $valid_calender['09:00'] = Book::where('salon',$salon)->where('date', $date)->where('time', "09:00")->count();
        $valid_calender['09:30'] = Book::where('salon',$salon)->where('date', $date)->where('time', "09:30")->count();
        for ($i = 10; $i < 20; $i++) {
            $valid_calender[$i . ':00'] = Book::where('salon',$salon)->where('date', $date)->where('time', $i . ":00")->count();
            $valid_calender[$i . ':30'] = Book::where('salon',$salon)->where('date', $date)->where('time', $i . ":30")->count();
        }
        return $valid_calender;
    }
}
