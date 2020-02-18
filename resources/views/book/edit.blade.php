@extends('layout')
@section('title','Book Edit')

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
</style>
@endsection

@section('content')
<h2>Đổi lịch</h2>
<ul>
    <li>Phone:{{$info[0]->phone}}</li>
    <li>Name:{{$info[0]->name}}</li>
    <li>Gender:{{$info[0]->gender}}</li>
</ul>
<form action="/book/{{$info[0]->id}}/{{$info[0]->phone}}" method="POST">
    @method('PUT')
    @csrf
    <div class="form-group">
        <label for="salon">Salon:</label>
        <div class="form-group">
            <div class="form-check salon">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input @error('salon') border-danger @enderror" name="salon" value="EM-HairSalon 1">EM-HairSalon 1
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input type="radio" class="form-check-input @error('salon') border-danger @enderror" name="salon" value="EM-HairSalon 2">EM-HairSalon 2
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
                    <input {{in_array("Cắt",explode(",",$info[0]->service),TRUE)?"checked":""}} type="checkbox" class="form-check-input @error('service') border-danger @enderror" name="service[]" value="Cắt">Cắt
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input {{in_array("Gội",explode(",",$info[0]->service),TRUE)?"checked":""}} type="checkbox" class="form-check-input @error('service') border-danger @enderror" name="service[]" value="Gội">Gội
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input {{in_array("Nhuộm",explode(",",$info[0]->service),TRUE)?"checked":""}} type="checkbox" class="form-check-input @error('service') border-danger @enderror" name="service[]" value="Nhuộm">Nhuộm
                </label>
            </div>
            <div class="form-check">
                <label class="form-check-label">
                    <input {{in_array("Hấp",explode(",",$info[0]->service),TRUE)?"checked":""}} type="checkbox" class="form-check-input @error('service') border-danger @enderror" name="service[]" value="Hấp">Hấp
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
        <textarea type="text" name="message" class="form-control" placeholder="Enter Message" id="message">{{$info[0]->message}}</textarea>
    </div>
    <button type="submit" class="btn btn-primary">Xác Nhận</button>
    <a class="btn btn-primary" id="back" href="">Hủy</a>
    @if(count($errors->success)>0)
    <p class="alert alert-success">{{$errors->success->first('success')}}</p>
    @endif
</form>
@endsection

@section('scripts')
<script>
    $(document).ready(function(){
        $('#back').click(function(e){
            e.preventDefault();
            window.location="/book/booked?phone={{$info[0]->phone}}";
        });
    });
</script>
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