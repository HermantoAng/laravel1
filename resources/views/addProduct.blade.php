@extends('layouts.app')

@section('slide1')
    
@endsection
@section('slide2')
    
@endsection
@section('content')
    
<form action="{{route('addProduct')}}" method="POST">
    <p class="form_text">
        Username
    </p>
    <input type="text" name="product_name">
</form>

@endsection