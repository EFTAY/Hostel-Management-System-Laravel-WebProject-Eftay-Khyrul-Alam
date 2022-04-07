@extends('layouts.frontEnd.master')
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/core.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/icon-font.min.css') }}">
    <link rel="alternate" href="{{ asset('src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('src/plugins/datatables/css/responsive.bootstrap4.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/style.css') }}">
@endpush
@section('content')
<div class="card-box pd-20 height-100-p mb-30">
    <div class="row align-items-center">
        <div class="col-md-12">
            <table class="table table-bordered">

                <tr class="image">
                    <div style="text-align: center"><img src="{{ asset('files/student/image').'/'.$studentMeal->image }}" alt=""></div>
                    
                </tr>
                <tr class="bg-success">
                    <td style="text-align: center">Student Name: {{ $studentMeal->name }}</td>
                </tr>
                <tr class="bg-warning">
                    <td style="text-align: center">Student ID: {{ $studentMeal->studentID }}</td>
                </tr>
            </table>
        </div>
        <div class="col-md-12">
            <table class="table table-striped">
                <tbody>
                    <thead>
                        <th>Date</th>
                        <th>BF Q</th>
                        <th>Price</th>
                        <th>L Q</th>
                        <th>Price</th>
                        <th>D Q</th>
                        <th>Price</th>
                        <th>Comments</th>
                        <th>Total Price</th>
                    </thead>
                    @foreach ($studentMeal->hostel_meals as $item)
                        <tr>
                            <td>{{ Carbon\Carbon::parse($item->date)->format('d M Y') }}</td>
                            <td>{{ $item->breakfast_quantity }}</td>
                            <td>{{ $item->breakfast_price }}</td>
                            <td>{{ $item->lunch_quantity }}</td>
                            <td>{{ $item->lunch_price }}</td>
                            <td>{{ $item->dinner_quantity }}</td>
                            <td>{{ $item->dinner_price }}</td>
                            <td>{{ $item->comments }}</td>
                            <td>{{ $item->total }}</td>
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
<script src="{{ asset('src/plugins/datatables/js/jquery.dataTables.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/dataTables.bootstrap4.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/dataTables.responsive.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/responsive.bootstrap4.min.js') }}"></script>
<!-- buttons for Export datatable -->
<script src="{{ asset('src/plugins/datatables/js/dataTables.buttons.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/buttons.bootstrap4.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/buttons.print.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/buttons.html5.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/buttons.flash.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/pdfmake.min.js') }}"></script>
<script src="{{ asset('src/plugins/datatables/js/vfs_fonts.js') }}"></script>
<!-- Datatable Setting js -->
<script src="{{ asset('vendors/scripts/datatable-setting.js') }}"></script>
@endpush