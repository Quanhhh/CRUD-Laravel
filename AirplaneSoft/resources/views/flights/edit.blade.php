@extends('flights.master')

@section('content')

<div class="card">
    <div class="card-header">Sửa thông tin chuyến bay</div>
    <div class="card-body">
        <form method="post" action="{{ route('flights.update', $flight->Flight_ID) }}" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form">Mã máy bay</label>
            <div class="col-sm-10">
                <input type="text" name="Aircraft_ID" class="form-control" value="{{ $flight->Aircraft_ID }}" />
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form">Nơi đi</label>
            <div class="col-sm-10">
                <input type="text" name="Departure_Airport" class="form-control" value="{{ $flight->Departure_Airport}}" />
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form">Nơi đến</label>
            <div class="col-sm-10">
                <input type="text" name="Arrival_Airport" class="form-control" value="{{ $flight->Arrival_Airport}}" />
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form">Thời gian cất cánh</label>
            <div class="col-sm-10">
                <input type="text" name="Departure_Time" class="form-control" value="{{ $flight->Departure_Time }}" />
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form">Thời gian hạ cánh</label>
            <div class="col-sm-10">
                <input type="text" name="Arrival_Time" class="form-control" value="{{ $flight->Arrival_Time }}" />
            </div>
        </div>
        <div class="row mb-3">
            <label class="col-sm-2 col-label-form">Thời gian bay dự kiến</label>
            <div class="col-sm-10">
                <input type="text" name="Flight_Duration" class="form-control" value="{{ $flight->Flight_Duration }}" />
            </div>
        </div>
        <div class="text-center">
            <input type="hidden" name="hidden_id" value="{{ $flight->Flight_ID }}" />
            <a href="{{ route('flights.index') }}" class="btn btn-secondary">Quay lại</a>
            <input type="submit" class="btn btn-primary" value="Sửa" />
        </div>
        </form>
    </div>
</div>
<!-- <script>
    document.getElementById
</script> -->

@endsection('content')