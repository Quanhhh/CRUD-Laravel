@extends('flights.master')

@section('content')

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b>Thông tin chuyến bay chi tiết</b></div>
            <div class="col col-md-6">
                <a href="{{ route('flights.index') }}" class="btn btn-primary btn-sm float-end">Xem tất cả danh sách</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Mã máy bay</b></label>
            <div class="col-sm-10">
                {{ $flight->Aircraft_ID }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Nơi cất cánh</b></label>
            <div class="col-sm-10">
                {{ $flight->Departure_Airport }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Nơi hạ cánh</b></label>
            <div class="col-sm-10">
                {{ $flight->Arrival_Airport }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Thời gian cất cánh</b></label>
            <div class="col-sm-10">
                {{ $flight->Departure_Time }}
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form"><b>Thời gian hạ cánh</b></label>
            <div class="col-sm-10">
                {{ $flight->Arrival_Time }}
            </div>
        </div>
        <div class="row-mb-3">
            <label class="col-sm-2 col-label-form"><b>Thời gian bay dự tính</b></label>
            <div class="col-sm-10">
                {{ $flight->Flight_Duration }}
            </div>
            <a href="{{ route('flights.index') }}" class="btn btn-secondary">Quay lại</a>
        </div>
    </div>
</div>

@endsection('content')