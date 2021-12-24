@extends('layouts.admin-layout')
@section('main')
<div class="col-12">
    <div class="card mt-5">
        <div class="card-body">
            <h4 class="header-title">Custom file input</h4>
            <form action="{{route('data.uploads')}}" method="post" enctype="multipart/form-data">
                @csrf
                @if($errors->any())
                    <ul>
                        @foreach($errors->all() as $error)
                            <li class="text-danger">{{$error}}</li>
                        @endforeach
                    </ul>
                @endif
                <div class="form-group">
                    <label for="example-text-input" class="col-form-label">Nom</label>
                    <input class="form-control" type="text" name="nom" id="example-text-input">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">$</span>
                        <span class="input-group-text">0.00</span>
                    </div>
                    <input type="text" class="form-control" name="post">
                </div>
                <div class="input-group mb-3">
                    <div class="input-group-prepend">
                        <span class="input-group-text">Upload</span>
                    </div>
                    <div class="custom-file">
                        <input type="file" class="custom-file-input" id="inputGroupFile01" name="profile">
                        <label class="custom-file-label" for="inputGroupFile01">Choose file</label>
                    </div>
                </div>
                <div class="col-auto my-1">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>
@endsection
