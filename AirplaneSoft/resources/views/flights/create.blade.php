@extends('flights.master')

@section('content')

@if ($errors->any())

<div class="alert alert-danger">
    <ul>
        @foreach ($errors->all() as $errors)

        <li>{{ $errors }}</li>
        
        @endforeach
    </ul>
</div>

@endif

<div class="card">
    <div class="card-header">Thêm chuyến bay mới</div>
    <div class="card-body">
        <form method="post" action="{{ route('flights.store') }}" enctype="multipart/form-data">
            @csrf
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Mã máy bay</label>
                <div class="col-sm-10">
                    <input type="text" name="name" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Nơi đi</label>
                <div class="col-sm-10">
                    <input type="text" name="description" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Nơi đến</label>
                <div class="col-sm-10">
                    <input type="text" name="image" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Giờ đi</label>
                <div class="col-sm-10">
                    <input type="text" name="origin" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Giờ đến</label>
                <div class="col-sm-10">
                    <input type="text" name="origin" class="form-control" />
                </div>
            </div>
            <div class="row mb-3">
                <label class="col-sm-2 col-label-form">Thời gian bay</label>
                <div class="col-sm-10">
                    <input type="text" name="origin" class="form-control" />
                </div>
            </div>
            <div class="text-center">
                <a href="{{ route('flights.index') }}" class="btn btn-secondary">Quay lại</a>
                <input type="submit" class="btn btn-primary" value="Thêm" />
            </div>
        </form>
    </div>
</div>

@endsection