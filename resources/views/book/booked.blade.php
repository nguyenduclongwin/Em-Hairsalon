@extends('layout')
@section('title','Booked')

@section('link')
    <style>
        .top{
            padding-top:150px;
        }
    </style>
@endsection

@section('content')
<div class="container top">
    @if(count($errors->success)>0)
    <p class="alert alert-success">{{$errors->success->first('success')}}</p>
    @endif
    <h2>Thông tin dịch vụ @if($booked[0]->gender=='Male') anh @elseif($booked[0]->gender=='Female') chị @else khách hàng @endif {{$booked[0]->name}} đã đặt</h2>
    <ul>
        <li>Name: {{$booked[0]->name}}</li>
        <li>Gender: {{$booked[0]->gender}}</li>
        <li>Phone: {{$booked[0]->phone}}</li>
        <li>Salon: {{$booked[0]->salon}}</li>
        <li>Service:{{$booked[0]->service}}</li>
        <li>Date: {{$booked[0]->date}}</li>
        <li>Time: {{$booked[0]->time}}</li>
        <li>Message: {{$booked[0]->message}}</li>
    </ul>
    <a class="btn btn-primary" href="/book/{{$booked[0]->phone}}/edit">Đổi Lịch</a>
    <a class="btn btn-primary" id="delete">Hủy Lịch</a>

</div>
@endsection
@section('scripts')
<script>
    $(document).ready(function() {
        $('#delete').click(function() {
            x = window.confirm("Bạn có chắc muốn hủy lịch? / Are you sure?");
            if (x == true) {
                $.ajax({
                    url: '{{route("delete")}}',
                    method: "delete",
                    data: {
                        _token: '{{csrf_token()}}',
                        id: '{{$booked[0]->id}}'
                    },
                    success: function(data) {
                        if (data == "success") {
                            alert('Hủy lịch thành công / Calendar canceled successfully');
                            window.location = "create";
                        }
                    }
                });
            }
        });
    });
</script>
@endsection('scripts')