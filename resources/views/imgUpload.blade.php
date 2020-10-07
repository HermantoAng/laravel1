@extends('layouts.app')

@section('content')
    <div class="form">
        <form action="{{route('imgUploadPost')}}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="row">
                <div class="col">
                    <input type="file" name="image" class="formControl">
                    <button type="submit" class="btn btn-warning">Upload</button>
                </div>
            </div>
        </form>    
    </div>    
@endsection