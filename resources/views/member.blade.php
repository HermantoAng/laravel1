@extends('layouts.main')

@section('title' , 'Mem ber')
    
@section('content')
    
    <div>
        @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
        @endif
            HELLo
    </div>

@endsection