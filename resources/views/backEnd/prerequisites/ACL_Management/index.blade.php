@extends('layouts.backEnd.master')
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/core.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/icon-font.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/style.css') }}">
    <link rel="alternate" href="{{ asset('src/plugins/datatables/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" href="{{ asset('src/plugins/datatables/css/responsive.bootstrap4.min.css') }}">
@endpush
@section('content')
<div class="card-box pd-20 height-100-p mb-30 col-md-6">
    <div class="row">
        <div class="col-md-12">
            <a href="javascript:void(0)" class="btn btn-primary btn-md float-right" data-toggle="modal" data-target="#add-meal-type" type="button">
                <i class="icon-copy dw dw-add"></i>
                Add Permission
            </a>
        </div>
        {{-- Modal  --}}
        <div class="modal fade bs-example-modal-lg" id="add-meal-type" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">Permission</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                         <div class="row">
                             <div class="col-md-12">
                                 <form action="#" method="post">
                                    @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="">Name</label>
                                        <input type="text" class="form-control" name="name" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">Guard Name</label>
                                        <input type="text" class="form-control" name="guard_name" required>
                                    </div>
                                    
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-success btn-md float-right">
                                        <i class="icon-copy dw dw-add"></i>
                                            Add Permission</button>
                                    </div>
                                </div>
                                </form>
                             </div>
                         </div>
                    </div>  
                </div>
            </div>
        </div>
    </div>
   <div class="row align-items-center">
    <div class="col-md-12">
        <table class="table hover multiple-select-row data-table-export nowrap">
            <thead>
                <th>Serial</th>
                <th>Name</th>
                <th>Guard Name</th>
                <th>Action</th>
            </thead>
            <tbody>
               
                @foreach ($permissions as $permission)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $permission->name }}</td>
                        <td>{{ $permission->guard_name }}</td>
                        <td>
                            <a href="#" class="btn btn-success btn-md" data-toggle="tooltip" data-placement="top" title="permission-edit"><i class="icon-copy dw dw-edit1"></i></a>
                            <a href="#" class="btn btn-danger btn-md" data-toggle="tooltip" data-placement="top" title="permission-delete" onclick="return confirm('Are you sure to delete this item form the list ?')"><i class="icon-copy dw dw-trash1"></i></a>
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