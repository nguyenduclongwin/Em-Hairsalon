@extends('layout')
@section('title','Find Book')

@section('link')
    <style>
        .top{
            padding-top:150px;
        }
    </style>
@endsection

@section('content')
<div class="container top">
    <form action="booked" method="get">
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
        <button type="submit" class="btn btn-primary">Search</button>
    </form>
</div>
@endsection