@extends('layouts.backEnd.master')
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/core.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/icon-font.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/style.css') }}">
    <link rel="alternate" href="{{ asset('src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('src/plugins/datatables/css/responsive.bootstrap4.min.css') }}">
@endpush
@section('content')
<div class="card-box pd-20 height-100-p mb-30">
   <div class="row align-items-center">
    <div class="col-md-12">
        <table class="table hover data-table-export nowrap">
            <thead>
                <th>#</th>
                <th>ID</th>
                <th>Name</th>
                <th>Contact Number</th>
                <th>Guardian Number</th>
                <th>Status</th>
                <th>Action</th>
            </thead>
            <tbody>
                @foreach ($students as $students)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $students->studentID }}</td>
                        <td>{{ $students->name }}</td>
                        <td>{{ $students->phone }}</td>
                        <td>{{ $students->guardianPhone }}</td>
                        <td>{{ $students->status }}</td>
                        <td>
                            <a href="{{ route('student-information.download',$students->id) }}" class="btn btn-info btn-md" data-toggle="tooltip" data-placement="top" title="download-student-info"><i class="icon-copy dw dw-download"></i></a>
                            @can('add-student')
                            <a href="{{ route('student-information.show',$students->id) }}" class="btn btn-success btn-md" data-toggle="tooltip" data-placement="top" title="student-view"><i class="icon-copy dw dw-slideshow"></i></a>
                            @endcan
                            @can('edit-student')
                            <a href="{{ route('student-information.edit',$students->id) }}" class="btn btn-warning btn-md" data-toggle="tooltip" data-placement="top" title="student-edit"><i class="icon-copy dw dw-edit1"></i></a>
                            @endcan
                            <a href="{{ route('student-information.destroy',$students->id) }}" class="btn btn-danger btn-md" data-toggle="tooltip" data-placement="top" title="student-delete"><i class="icon-copy dw dw-trash1"></i></a>
                            {{-- @can('delete-student')
                            @endcan --}}
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