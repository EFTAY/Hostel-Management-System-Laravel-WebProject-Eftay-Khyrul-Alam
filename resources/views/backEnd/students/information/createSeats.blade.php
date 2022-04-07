@extends('layouts.backEnd.master')
@push('css')
    <link rel="stylesheet" href="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.79/theme-default.min.css') }}">
    <link rel="alternate" type="text/css" href="{{ asset('src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('src/plugins/datatables/css/responsive.bootstrap4.min.css') }}">
@endpush
@section('content')
<div class="card-box pd-20 height-100-p mb-30">
    <h3 class="text-info" style="text-align: center"> Hostle Seats</h3>
   <div class="row align-items-center">
    <div class="col-md-12">
        <table class="table hover multiple-select-row data-table-export nowrap">
            <thead>
                <th>#</th>
                <th>Floor</th>
                <th>Flat</th>
                <th>Seat Number</th>
                <th>Status</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($seats as $items)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $items->floor }}</td>
                        <td>{{ $items->flat }}</td>
                        <td>{{ $items->seatNumber }}</td>
                        @if ($items->status == '0')
                        <td class="text-success" ><i class="icon-copy dw dw-checked"></i>Seat available</td>
                            
                        @else
                        <td class="text-danger"><i class="icon-copy dw dw-cancel"></i>Seat Not available</td>

                        @endif
                        <td>
                            <a href="#" class="btn btn-success btn-md" data-toggle="tooltip" data-placement="top" title="student-edit"><i class="icon-copy dw dw-edit1"></i></a>
                            {{-- <a href="#" class="btn btn-warning btn-md" data-toggle="tooltip" data-placement="top" title="student-edit"><i class="icon-copy dw dw-edit1"></i></a> --}}
                            <a href="#" class="btn btn-danger btn-md" data-toggle="tooltip" data-placement="top" title="student-delete"><i class="icon-copy dw dw-trash1"></i></a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
   </div>
</div>
@endsection
@push('js')
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.79/jquery.form-validator.min.js') }}"></script>
<script src="src/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="src/plugins/datatables/js/dataTables.responsive.min.js"></script>
<script src="src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
@endpush