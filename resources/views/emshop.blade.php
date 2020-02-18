@extends('layout')
@section('title','EMshop')

@section('link')
<link rel="stylesheet" href="emshop.css">
@endsection

@section('content')
<em-shop></em-shop>
@endsection

@section('scripts')
<script>
    new WOW().init();
</script>
@endsection