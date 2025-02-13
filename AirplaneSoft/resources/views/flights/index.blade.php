@extends('flights.master')

@section('content')

@if ($message = Session::get('success'))
<div class="alert alert-success">
    {{ $message }}
</div>

@endif


<head>
    <!-- Các liên kết và script khác -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>

<div class="container mt-5">
    <h1 class="text-primary mt-3 mb-4 text-center"><b>Quản lý chuyến bay</b></h1>
</div>

<div class="card">
    <div class="card-header">
        <div class="row">
            <div class="col col-md-6"><b></b></div>
            <div class="col col-md-6">
                <a href="{{ route('flights.create') }}" class="btn btn-success btn-sm float-end">Thêm chuyến bay mới</a>
            </div>
        </div>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <tr>
                <th>Mã chuyến bay</th>
                <th>Mã máy bay</th>
                <th>Nơi đi</th>
                <th>Nơi đến</th>
                <th>Giờ đi</th>
                <th>Giờ đến</th>
                <th>Thời gian bay</th>
            </tr>
            @if(count($flights) > 0)

        @foreach($flights as $row)
            <tr>
                <td>{{ $row->Flight_ID }}</td>
                <td>{{ $row->Aircraft_ID }}</td>
                <td>{{ $row->Departure_Airport }}</td>
                <td>{{ $row->Arrival_Airport }}</td>
                <td>{{ $row->Departure_Time }}</td>
                <td>{{ $row->Arrival_Time }}</td>
                <td>{{ $row->Flight_Duration}}</td>
                <td>
                    <form method="post" action="{{ route('flights.destroy', $row->Flight_ID) }}">
                        @csrf
                        @method('DELETE')
                        <a href=" {{ route('flights.show', $row->Flight_ID) }}" class="btn btn-primary"><i class="fas fa-info-circle"></i></a>
                        <a href=" {{ route('flights.edit', $row->Flight_ID) }}" class="btn btn-warning"><i class="fas fa-edit"></i></a>
                        <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Bạn có chắc chắn muốn xóa?')">
                                <i class="fas fa-trash-alt"></i>
                        </button>
                    </form>

                </td>
            </tr>
        @endforeach

        @else
        <tr>
            <td colspan="5" class="text-center">No data found</td>
        </tr>
        @endif
        </table>
        {!! $flights->links() !!}
    </div>
</div>
@endsection
