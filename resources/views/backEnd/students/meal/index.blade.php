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
    <div class="row">
        <div class="col-md-12">
            <a href="javascript:void(0)" class="btn btn-primary btn-md float-right" data-toggle="modal" data-target="#add-meal-type" type="button">
                <i class="icon-copy dw dw-add"></i>
                Add Meal Type
            </a>
        </div>
        {{-- Modal  --}}
        <div class="modal fade bs-example-modal-lg" id="add-meal-type" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myLargeModalLabel">Add Meal Type Form Hear</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                    </div>
                    <div class="modal-body">
                         <div class="row">
                             <div class="col-md-12">
                                 <form action="{{ route('hostle-meal.store') }}" method="post">
                                    @csrf
                                <div class="form-row">
                                    <div class="form-group col-md-4">
                                        <label for="">Meal Day</label>
                                        <input type="text" class="form-control" name="mealDay" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">Meal Type</label>
                                        <input type="text" class="form-control" name="mealType" required>
                                    </div>
                                    <div class="form-group col-md-4">
                                        <label for="">Meal Items</label>
                                        <input type="text" class="form-control" name="mealItems" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <label for="">Meal Price</label>
                                        <input type="number" class="form-control" name="mealPrice" required>
                                    </div>
                                    <div class="form-group col-md-12">
                                        <button type="submit" class="btn btn-success btn-md float-right">
                                        <i class="icon-copy dw dw-add"></i>
                                            Add Meal</button>
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
                <th>#</th>
                <th>Day</th>
                <th>Type</th>
                <th>Items</th>
                <th>Price</th>
                <th>Action</th>
            </thead>
            <tbody>
               @foreach ($meal as $meal)
                   <tr>
                       <td>{{ $loop->iteration }}</td>
                       <td>{{ $meal->mealDay }}</td>
                       <td>{{ $meal->mealType }}</td>
                       <td>{{ $meal->mealItems }}</td>
                       <td>{{ $meal->mealPrice }}</td>
                       <td>
                        <a href="{{ route('hostel-meal.download',$meal->id) }}" class="btn btn-info btn-md" data-toggle="tooltip" data-placement="top" title="download"><i class="icon-copy dw dw-download"></i></a>
                        <a href="{{ route('hostle-meal.edit',$meal->id) }}" class="btn btn-success btn-md" data-toggle="tooltip" data-placement="top" title="meal-edit"><i class="icon-copy dw dw-edit1"></i></a>
                        <a href="{{ route('hostle-meal.destroy',$meal->id) }}" class="btn btn-danger btn-md" data-toggle="tooltip" data-placement="top" title="meal-delete" onclick="return confirm('Are you sure to delete this item form the list ?')"><i class="icon-copy dw dw-trash1"></i></a>
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