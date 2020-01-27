@extends('layout')
@section('title','EMshop')

@section('link')
<link rel="stylesheet" href="emshop.css">
@endsection

@section('content')
<em-shop></em-shop>
@endsection

@section('scripts')
<script src="js/quantity_products_Vue.js"></script>
<script>
    new WOW().init();
</script>
@endsection