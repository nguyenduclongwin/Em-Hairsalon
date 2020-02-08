@extends('layout')
@section('title','Book Service')

@section('link')
<!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bulma@0.8.0/css/bulma.min.css"> -->
<style>

    

    .form-check {
        display: inline-block;
    }

    .day {
        text-align: center;
    }

    .border {
        border: 2px solid black;

        background: #888;
    }

    .salon {
        margin-right: 20px;
    }

    .but {
        display: inline-block;
        padding: 10px 40px 10px 20px;
        color: white;
    }

    input.inc[type='radio']:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -4px;
        left: -1px;
        position: relative;
        background-color: #888;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid greenyellow;
    }

    input.dis[type='radio']:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -4px;
        left: -1px;
        position: relative;
        background-color: red;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid red;
    }

    input[type='radio']:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -4px;
        left: -1px;
        position: relative;
        background-color: #fff;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid greenyellow;
    }

    input[type='radio']:checked:after {
        width: 15px;
        height: 15px;
        border-radius: 15px;
        top: -4px;
        left: -1px;
        position: relative;
        background-color: #0f0;
        content: '';
        display: inline-block;
        visibility: visible;
        border: 2px solid yellowgreen;
    }
    .top{
        padding-top:150px;
    }
</style>
@endsection

@section('content')
<div class="container top">
<form action="/book" method="POST">
    @csrf
    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="text" name="phone" class="form-control @error('phone') border-danger @enderror" placeholder="Enter Phone" id="phone" value="{{old('phone')}}">
        @if(count($errors->phone)>0)
        <p class="alert alert-danger">{{$errors->phone->first('phone')}}</p>
        @endif
        @error('phone')
        <p class="alert alert-danger">{{$errors->first('phone')}}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" name="name" class="form-control @error('name') border-danger @enderror" placeholder="Enter Name" id="name" value="{{old('name')}}">
        @error('name')
        <p class="alert alert-danger">{{$errors->first('name')}}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="gender">Gender:</label>
        <div class="form-group">
            <div class="form-check">
                <label class="form-check-label">
                    <input {{old("gender")=="Male"?"checked":""}} type="radio" class="form-check-input @error('gender') border-danger @enderror" name="gender" value="Male">Male
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input {{old("gender")=="Female"?"checked":""}} type="radio" class="form-check-input @error('gender') border-danger @enderror" name="gender" value="Female">Female
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input {{old("gender")=="Other"?"checked":""}} type="radio" class="form-check-input @error('gender') border-danger @enderror" name="gender" value="Other">Other
                </label>
            </div>
        </div>
    </div>
    @error('gender')
    <p class="alert alert-danger">{{$errors->first('gender')}}</p>
    @enderror
    <!-- <div class="form-group">
        <label for="email">Email address:</label>
        <input type="email" name="email" class="form-control @error('email') border-danger @enderror" placeholder="Enter email" id="email">
        @error('email')
        <p class="alert alert-danger">{{$errors->first('email')}}</p>
        @enderror
    </div> -->
    
    <div class="form-group">
        <label for="salon">Salon:</label>
        <div class="form-group">
            <div class="form-check salon">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input @error('salon') border-danger @enderror" name="salon" value="EM-HairSalon 1">EM-HairSalon 1, Địa chỉ: 53 Phó Đức Chính, Trúc Bạch, Ba Đình, Hà Nội
                </label>
            </div>
        </div>
        <div class="form-group">
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input @error('salon') border-danger @enderror" name="salon" value="EM-HairSalon 2">EM-HairSalon 2, Địa chỉ: 7 Đỗ Quang Hà Nội
                </label>
            </div>
        </div>
        @error('salon')
        <p class="alert alert-danger">{{$errors->first('salon')}}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="service">Service:</label>
        <div class="form-group">
            <div class="form-check">
                <label class="form-check-label">
                    <input @if(@old('service')) {{in_array("Cắt",@old('service'),TRUE)?"checked":""}} @endif type="checkbox" class="form-check-input @error('service') border-danger @enderror" name="service[]" value="Cắt">Cắt
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input @if(@old('service')) {{in_array("Gội",@old('service'),TRUE)?"checked":""}} @endif type="checkbox" class="form-check-input @error('service') border-danger @enderror" name="service[]" value="Gội">Gội
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input @if(@old('service')) {{in_array("Nhuộm",@old('service'),TRUE)?"checked":""}} @endif type="checkbox" class="form-check-input @error('service') border-danger @enderror" name="service[]" value="Nhuộm">Nhuộm
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input @if(@old('service')) {{in_array("Hấp",@old('service'),TRUE)?"checked":""}} @endif type="checkbox" class="form-check-input @error('service') border-danger @enderror" name="service[]" value="Hấp">Hấp
                </label>
            </div>
        </div>
        @error('service')
        <p class="alert alert-danger">{{$errors->first('service')}}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="datetime">DateTime:</label>
        <div class="form-group">
            <label for="">-Select Date:</label>
            <div class="form-group">
                <div class="form-check border">
                    <label class="form-check-label day but">
                        <input id="today" type="radio" id="click" class="form-check-input @error('date') border-danger @enderror" name="date" value="{{$today}}">Hôm nay <br> {{$todayth}} {{$today}}
                    </label>
                </div>
                <div class="form-check border">
                    <label class="form-check-label day but">
                        <input id="tomorrow" type="radio" class="form-check-input @error('date') border-danger @enderror" name="date" value="{{$tomorrow}}">Ngày mai <br> {{$tomorrowth}} {{$tomorrow}}
                    </label>
                </div>
            </div>
            @error('date')
            <p class=" alert alert-danger">{{$errors->first('date')}}</p>
            @enderror
        </div>
        <div class="form-group">
            <label for="">-Select Time:</label>
            <div id="time">
                <div class="form-group">
                    <div class="form-check border">
                        <label class="form-check-label but">
                            <input type="radio" class="inc form-check-input @error('time') border-danger @enderror" name="time" value="08:00">08:00
                        </label>
                    </div>
                    <div class="form-check border">
                        <label class="form-check-label but">
                            <input type="radio" class="inc form-check-input @error('time') border-danger @enderror" name="time" value="09:00">09:00
                        </label>
                    </div>
                    <div class="form-check border">
                        <label class="form-check-label but">
                            <input type="radio" class="inc form-check-input @error('time') border-danger @enderror" name="time" value="10:00">10:00
                        </label>
                    </div>
                    <div class="form-check border">
                        <label class="form-check-label but">
                            <input type="radio" class="inc form-check-input @error('time') border-danger @enderror" name="time" value="11:00">11:00
                        </label>
                    </div>
                    <div class="form-check border">
                        <label class="form-check-label but">
                            <input type="radio" class="inc form-check-input @error('time') border-danger @enderror" name="time" value="12:00">12:00
                        </label>
                    </div>
                    <div class="form-check border">
                        <label class="form-check-label but">
                            <input type="radio" class="inc form-check-input @error('time') border-danger @enderror" name="time" value="13:00">13:00
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check border">
                        <label class="form-check-label but">
                            <input type="radio" class="inc form-check-input @error('time') border-danger @enderror" name="time" value="08:30">08:30
                        </label>
                    </div>
                    <div class="form-check border">
                        <label class="form-check-label but">
                            <input type="radio" class="inc form-check-input @error('time') border-danger @enderror" name="time" value="09:30">09:30
                        </label>
                    </div>
                    <div class="form-check border">
                        <label class="form-check-label but">
                            <input type="radio" class="inc form-check-input @error('time') border-danger @enderror" name="time" value="10:30">10:30
                        </label>
                    </div>
                    <div class="form-check border">
                        <label class="form-check-label but">
                            <input type="radio" class="inc form-check-input @error('time') border-danger @enderror" name="time" value="11:30">11:30
                        </label>
                    </div>
                    <div class="form-check border">
                        <label class="form-check-label but">
                            <input type="radio" class="inc form-check-input @error('time') border-danger @enderror" name="time" value="12:30">12:30
                        </label>
                    </div>
                    <div class="form-check border">
                        <label class="form-check-label but">
                            <input type="radio" class="inc form-check-input @error('time') border-danger @enderror" name="time" value="13:30">13:30
                        </label>
                    </div>
                </div>
                <!-- <br> -->
                <div class="form-group">
                    <div class="form-check border">
                        <label class="form-check-label but">
                            <input type="radio" class="inc form-check-input @error('time') border-danger @enderror" name="time" value="14:00">14:00
                        </label>
                    </div>
                    <div class="form-check border">
                        <label class="form-check-label but">
                            <input type="radio" class="inc form-check-input @error('time') border-danger @enderror" name="time" value="15:00">15:00
                        </label>
                    </div>
                    <div class="form-check border">
                        <label class="form-check-label but">
                            <input type="radio" class="inc form-check-input @error('time') border-danger @enderror" name="time" value="16:00">16:00
                        </label>
                    </div>
                    <div class="form-check border">
                        <label class="form-check-label but">
                            <input type="radio" class="inc form-check-input @error('time') border-danger @enderror" name="time" value="17:00">17:00
                        </label>
                    </div>
                    <div class="form-check border">
                        <label class="form-check-label but">
                            <input type="radio" class="inc form-check-input @error('time') border-danger @enderror" name="time" value="18:00">18:00
                        </label>
                    </div>
                    <div class="form-check border">
                        <label class="form-check-label but">
                            <input type="radio" class="inc form-check-input @error('time') border-danger @enderror" name="time" value="19:00">19:00
                        </label>
                    </div>
                </div>
                <div class="form-group">
                    <div class="form-check border">
                        <label class="form-check-label but">
                            <input type="radio" class="inc form-check-input @error('time') border-danger @enderror" name="time" value="14:30">14:30
                        </label>
                    </div>
                    <div class="form-check border">
                        <label class="form-check-label but">
                            <input type="radio" class="inc form-check-input @error('time') border-danger @enderror" name="time" value="15:30">15:30
                        </label>
                    </div>
                    <div class="form-check border">
                        <label class="form-check-label but">
                            <input type="radio" class="inc form-check-input @error('time') border-danger @enderror" name="time" value="16:30">16:30
                        </label>
                    </div>
                    <div class="form-check border">
                        <label class="form-check-label but">
                            <input type="radio" class="inc form-check-input @error('time') border-danger @enderror" name="time" value="17:30">17:30
                        </label>
                    </div>
                    <div class="form-check border">
                        <label class="form-check-label but">
                            <input type="radio" class="inc form-check-input @error('time') border-danger @enderror" name="time" value="18:30">18:30
                        </label>
                    </div>
                    <div class="form-check border">
                        <label class="form-check-label but">
                            <input type="radio" class="inc form-check-input @error('time') border-danger @enderror" name="time" value="19:30">19:30
                        </label>
                    </div>
                </div>
            </div>
        </div>
        @error('time')
        <p class=" alert alert-danger">{{$errors->first('time')}}</p>
        @enderror
    </div>
    <div class="form-group">
        <label for="message">Message:</label>
        <textarea type="text" name="message" class="form-control" placeholder="Enter Message" id="message">{{old('message')}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Đặt lịch</button>
</form>
</div>
@endsection

@section('scripts')
<script>
    $(document).ready(function() {
        $('[name="salon"]').change(function() {
            salon = $(this).val();
            $('[name="date"]').change(function(e) {
                e.preventDefault();
                date = $(this).val();
                $.ajax({
                    url: '{{route("calender")}}',
                    type: 'post',
                    data: {
                        _token: '{{csrf_token()}}',
                        date: date,
                        salon: salon
                    },
                    success: function(data) {
                        $('#time input').prop('checked', false);
                        $('#time input').removeClass('dis');
                        $('#time input').removeAttr('disabled');
                        now = $('#today').val();
                        if (data['date'] == now) {
                            if (data['now'] >= 8) {
                                $('[value="08:00"]').addClass('dis');
                                $('[value="08:00"]').attr('disabled', true);
                                $('[value="08:30"]').addClass('dis');
                                $('[value="08:30"]').attr('disabled', true);
                            }
                            if (data['now'] >= 9) {
                                $('[value="09:00"]').addClass('dis');
                                $('[value="09:00"]').attr('disabled', true);
                                $('[value="09:30"]').addClass('dis');
                                $('[value="09:30"]').attr('disabled', true);
                            }
                            // for (i = 10; i < 20; i++) {
                            //     if (data['now'] >= i) {
                            //         $('[value="'+i+':00"]').addClass('dis');
                            //         $('[value="'+i+':00"]').attr('disabled', true);
                            //         $('[value="'+i+':30"]').addClass('dis');
                            //         $('[value="'+i+':30"]').attr('disabled', true);
                            //     }
                            // }
                            if (data['now'] >= 10) {
                                $('[value="10:00"]').addClass('dis');
                                $('[value="10:00"]').attr('disabled', true);
                                $('[value="10:30"]').addClass('dis');
                                $('[value="10:30"]').attr('disabled', true);
                            }
                            if (data['now'] >= 11) {
                                $('[value="11:00"]').addClass('dis');
                                $('[value="11:00"]').attr('disabled', true);
                                $('[value="11:30"]').addClass('dis');
                                $('[value="11:30"]').attr('disabled', true);
                            }
                            if (data['now'] >= 12) {
                                $('[value="12:00"]').addClass('dis');
                                $('[value="12:00"]').attr('disabled', true);
                                $('[value="12:30"]').addClass('dis');
                                $('[value="12:30"]').attr('disabled', true);
                            }
                            if (data['now'] >= 13) {
                                $('[value="13:00"]').addClass('dis');
                                $('[value="13:00"]').attr('disabled', true);
                                $('[value="13:30"]').addClass('dis');
                                $('[value="13:30"]').attr('disabled', true);
                            }
                            if (data['now'] >= 14) {
                                $('[value="14:00"]').addClass('dis');
                                $('[value="14:00"]').attr('disabled', true);
                                $('[value="14:30"]').addClass('dis');
                                $('[value="14:30"]').attr('disabled', true);
                            }
                            if (data['now'] >= 15) {
                                $('[value="15:00"]').addClass('dis');
                                $('[value="15:00"]').attr('disabled', true);
                                $('[value="15:30"]').addClass('dis');
                                $('[value="15:30"]').attr('disabled', true);
                            }
                            if (data['now'] >= 16) {
                                $('[value="16:00"]').addClass('dis');
                                $('[value="16:00"]').attr('disabled', true);
                                $('[value="16:30"]').addClass('dis');
                                $('[value="16:30"]').attr('disabled', true);
                            }
                            if (data['now'] >= 17) {
                                $('[value="17:00"]').addClass('dis');
                                $('[value="17:00"]').attr('disabled', true);
                                $('[value="17:30"]').addClass('dis');
                                $('[value="17:30"]').attr('disabled', true);
                            }
                            if (data['now'] >= 18) {
                                $('[value="18:00"]').addClass('dis');
                                $('[value="18:00"]').attr('disabled', true);
                                $('[value="18:30"]').addClass('dis');
                                $('[value="18:30"]').attr('disabled', true);
                            }
                            if (data['now'] >= 19) {
                                $('[value="19:00"]').addClass('dis');
                                $('[value="19:00"]').attr('disabled', true);
                                $('[value="19:30"]').addClass('dis');
                                $('[value="19:30"]').attr('disabled', true);
                            }
                        }
                        if (data['08:00'] > 0) {
                            $('[value="08:00"]').addClass('dis');
                            $('[value="08:00"]').attr('disabled', true);
                        }
                        if (data['08:30'] > 0) {
                            $('[value="08:30"]').addClass('dis');
                            $('[value="08:30"]').attr('disabled', true);
                        }
                        if (data['09:00'] > 0) {
                            $('[value="09:00"]').addClass('dis');
                            $('[value="09:00"]').attr('disabled', true);
                        }
                        if (data['09:30'] > 0) {
                            $('[value="09:30"]').addClass('dis');
                            $('[value="09:30"]').attr('disabled', true);
                        }
                        // for (i = 10; i < 20; i++) {
                        //     if (data[''+i+':00'] > 0) {
                        //         $('[value="'+i+':00"]').addClass('dis');
                        //         $('[value="'+i+':00"]').attr('disabled', true);
                        //     }
                        //     if (data[''+i+':30'] > 0) {
                        //         $('[value="'+i+':30"]').addClass('dis');
                        //         $('[value="'+i+':30"]').attr('disabled', true);
                        //     }
                        // }
                        if (data['10:00'] > 0) {
                            $('[value="10:00"]').addClass('dis');
                            $('[value="10:00"]').attr('disabled', true);
                        }
                        if (data['10:30'] > 0) {
                            $('[value="10:30"]').addClass('dis');
                            $('[value="10:30"]').attr('disabled', true);
                        }
                        if (data['11:00'] > 0) {
                            $('[value="11:00"]').addClass('dis');
                            $('[value="11:00"]').attr('disabled', true);
                        }
                        if (data['11:30'] > 0) {
                            $('[value="11:30"]').addClass('dis');
                            $('[value="11:30"]').attr('disabled', true);
                        }
                        if (data['12:00'] > 0) {
                            $('[value="12:00"]').addClass('dis');
                            $('[value="12:00"]').attr('disabled', true);
                        }
                        if (data['12:30'] > 0) {
                            $('[value="12:30"]').addClass('dis');
                            $('[value="12:30"]').attr('disabled', true);
                        }
                        if (data['13:00'] > 0) {
                            $('[value="13:00"]').addClass('dis');
                            $('[value="13:00"]').attr('disabled', true);
                        }
                        if (data['13:30'] > 0) {
                            $('[value="13:30"]').addClass('dis');
                            $('[value="13:30"]').attr('disabled', true);
                        }
                        if (data['14:00'] > 0) {
                            $('[value="14:00"]').addClass('dis');
                            $('[value="14:00"]').attr('disabled', true);
                        }
                        if (data['14:30'] > 0) {
                            $('[value="14:30"]').addClass('dis');
                            $('[value="14:30"]').attr('disabled', true);
                        }
                        if (data['15:00'] > 0) {
                            $('[value="15:00"]').addClass('dis');
                            $('[value="15:00"]').attr('disabled', true);
                        }
                        if (data['15:30'] > 0) {
                            $('[value="15:30"]').addClass('dis');
                            $('[value="15:30"]').attr('disabled', true);
                        }
                        if (data['16:00'] > 0) {
                            $('[value="16:00"]').addClass('dis');
                            $('[value="16:00"]').attr('disabled', true);
                        }
                        if (data['16:30'] > 0) {
                            $('[value="16:30"]').addClass('dis');
                            $('[value="16:30"]').attr('disabled', true);
                        }
                        if (data['17:00'] > 0) {
                            $('[value="17:00"]').addClass('dis');
                            $('[value="17:00"]').attr('disabled', true);
                        }
                        if (data['17:30'] > 0) {
                            $('[value="17:30"]').addClass('dis');
                            $('[value="17:30"]').attr('disabled', true);
                        }
                        if (data['18:00'] > 0) {
                            $('[value="18:00"]').addClass('dis');
                            $('[value="18:00"]').attr('disabled', true);
                        }
                        if (data['18:30'] > 0) {
                            $('[value="18:30"]').addClass('dis');
                            $('[value="18:30"]').attr('disabled', true);
                        }
                        if (data['19:00'] > 0) {
                            $('[value="19:00"]').addClass('dis');
                            $('[value="19:00"]').attr('disabled', true);
                        }
                        if (data['19:30'] > 0) {
                            $('[value="19:30"]').addClass('dis');
                            $('[value="19:30"]').attr('disabled', true);
                        }
                    }
                });
            });
        });
        //////////
        $('[name="date"]').change(function() {
            date = $(this).val();
            $('[name="salon"]').change(function(e) {
                e.preventDefault();
                salon = $(this).val();
                $.ajax({
                    url: '{{route("calender")}}',
                    type: 'post',
                    data: {
                        _token: '{{csrf_token()}}',
                        date: date,
                        salon: salon
                    },
                    success: function(data) {
                        $('#time input').prop('checked', false);
                        $('#time input').removeClass('dis');
                        $('#time input').removeAttr('disabled');
                        now = $('#today').val();
                        if (data['date'] == now) {
                            if (data['now'] >= 8) {
                                $('[value="08:00"]').addClass('dis');
                                $('[value="08:00"]').attr('disabled', true);
                                $('[value="08:30"]').addClass('dis');
                                $('[value="08:30"]').attr('disabled', true);
                            }
                            if (data['now'] >= 9) {
                                $('[value="09:00"]').addClass('dis');
                                $('[value="09:00"]').attr('disabled', true);
                                $('[value="09:30"]').addClass('dis');
                                $('[value="09:30"]').attr('disabled', true);
                            }
                            if (data['now'] >= 10) {
                                $('[value="10:00"]').addClass('dis');
                                $('[value="10:00"]').attr('disabled', true);
                                $('[value="10:30"]').addClass('dis');
                                $('[value="10:30"]').attr('disabled', true);
                            }
                            if (data['now'] >= 11) {
                                $('[value="11:00"]').addClass('dis');
                                $('[value="11:00"]').attr('disabled', true);
                                $('[value="11:30"]').addClass('dis');
                                $('[value="11:30"]').attr('disabled', true);
                            }
                            if (data['now'] >= 12) {
                                $('[value="12:00"]').addClass('dis');
                                $('[value="12:00"]').attr('disabled', true);
                                $('[value="12:30"]').addClass('dis');
                                $('[value="12:30"]').attr('disabled', true);
                            }
                            if (data['now'] >= 13) {
                                $('[value="13:00"]').addClass('dis');
                                $('[value="13:00"]').attr('disabled', true);
                                $('[value="13:30"]').addClass('dis');
                                $('[value="13:30"]').attr('disabled', true);
                            }
                            if (data['now'] >= 14) {
                                $('[value="14:00"]').addClass('dis');
                                $('[value="14:00"]').attr('disabled', true);
                                $('[value="14:30"]').addClass('dis');
                                $('[value="14:30"]').attr('disabled', true);
                            }
                            if (data['now'] >= 15) {
                                $('[value="15:00"]').addClass('dis');
                                $('[value="15:00"]').attr('disabled', true);
                                $('[value="15:30"]').addClass('dis');
                                $('[value="15:30"]').attr('disabled', true);
                            }
                            if (data['now'] >= 16) {
                                $('[value="16:00"]').addClass('dis');
                                $('[value="16:00"]').attr('disabled', true);
                                $('[value="16:30"]').addClass('dis');
                                $('[value="16:30"]').attr('disabled', true);
                            }
                            if (data['now'] >= 17) {
                                $('[value="17:00"]').addClass('dis');
                                $('[value="17:00"]').attr('disabled', true);
                                $('[value="17:30"]').addClass('dis');
                                $('[value="17:30"]').attr('disabled', true);
                            }
                            if (data['now'] >= 18) {
                                $('[value="18:00"]').addClass('dis');
                                $('[value="18:00"]').attr('disabled', true);
                                $('[value="18:30"]').addClass('dis');
                                $('[value="18:30"]').attr('disabled', true);
                            }
                            if (data['now'] >= 19) {
                                $('[value="19:00"]').addClass('dis');
                                $('[value="19:00"]').attr('disabled', true);
                                $('[value="19:30"]').addClass('dis');
                                $('[value="19:30"]').attr('disabled', true);
                            }
                        }
                        if (data['08:00'] > 0) {
                            $('[value="08:00"]').addClass('dis');
                            $('[value="08:00"]').attr('disabled', true);
                        }
                        if (data['08:30'] > 0) {
                            $('[value="08:30"]').addClass('dis');
                            $('[value="08:30"]').attr('disabled', true);
                        }
                        if (data['09:00'] > 0) {
                            $('[value="09:00"]').addClass('dis');
                            $('[value="09:00"]').attr('disabled', true);
                        }
                        if (data['09:30'] > 0) {
                            $('[value="09:30"]').addClass('dis');
                            $('[value="09:30"]').attr('disabled', true);
                        }
                        if (data['10:00'] > 0) {
                            $('[value="10:00"]').addClass('dis');
                            $('[value="10:00"]').attr('disabled', true);
                        }
                        if (data['10:30'] > 0) {
                            $('[value="10:30"]').addClass('dis');
                            $('[value="10:30"]').attr('disabled', true);
                        }
                        if (data['11:00'] > 0) {
                            $('[value="11:00"]').addClass('dis');
                            $('[value="11:00"]').attr('disabled', true);
                        }
                        if (data['11:30'] > 0) {
                            $('[value="11:30"]').addClass('dis');
                            $('[value="11:30"]').attr('disabled', true);
                        }
                        if (data['12:00'] > 0) {
                            $('[value="12:00"]').addClass('dis');
                            $('[value="12:00"]').attr('disabled', true);
                        }
                        if (data['12:30'] > 0) {
                            $('[value="12:30"]').addClass('dis');
                            $('[value="12:30"]').attr('disabled', true);
                        }
                        if (data['13:00'] > 0) {
                            $('[value="13:00"]').addClass('dis');
                            $('[value="13:00"]').attr('disabled', true);
                        }
                        if (data['13:30'] > 0) {
                            $('[value="13:30"]').addClass('dis');
                            $('[value="13:30"]').attr('disabled', true);
                        }
                        if (data['14:00'] > 0) {
                            $('[value="14:00"]').addClass('dis');
                            $('[value="14:00"]').attr('disabled', true);
                        }
                        if (data['14:30'] > 0) {
                            $('[value="14:30"]').addClass('dis');
                            $('[value="14:30"]').attr('disabled', true);
                        }
                        if (data['15:00'] > 0) {
                            $('[value="15:00"]').addClass('dis');
                            $('[value="15:00"]').attr('disabled', true);
                        }
                        if (data['15:30'] > 0) {
                            $('[value="15:30"]').addClass('dis');
                            $('[value="15:30"]').attr('disabled', true);
                        }
                        if (data['16:00'] > 0) {
                            $('[value="16:00"]').addClass('dis');
                            $('[value="16:00"]').attr('disabled', true);
                        }
                        if (data['16:30'] > 0) {
                            $('[value="16:30"]').addClass('dis');
                            $('[value="16:30"]').attr('disabled', true);
                        }
                        if (data['17:00'] > 0) {
                            $('[value="17:00"]').addClass('dis');
                            $('[value="17:00"]').attr('disabled', true);
                        }
                        if (data['17:30'] > 0) {
                            $('[value="17:30"]').addClass('dis');
                            $('[value="17:30"]').attr('disabled', true);
                        }
                        if (data['18:00'] > 0) {
                            $('[value="18:00"]').addClass('dis');
                            $('[value="18:00"]').attr('disabled', true);
                        }
                        if (data['18:30'] > 0) {
                            $('[value="18:30"]').addClass('dis');
                            $('[value="18:30"]').attr('disabled', true);
                        }
                        if (data['19:00'] > 0) {
                            $('[value="19:00"]').addClass('dis');
                            $('[value="19:00"]').attr('disabled', true);
                        }
                        if (data['19:30'] > 0) {
                            $('[value="19:30"]').addClass('dis');
                            $('[value="19:30"]').attr('disabled', true);
                        }
                    }
                });
            });
        });
    });
</script>
@endsection