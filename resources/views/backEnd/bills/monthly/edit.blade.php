@extends('layouts.backEnd.master')
@push('css')
    <link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/core.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/icon-font.min.css') }}">
	<link rel="stylesheet" type="text/css" href="{{ asset('vendors/styles/style.css') }}">
    @endpush
@section('content')
<div class="card-box pd-20 height-100-p mb-30">
    <div class="row">
        <div class="col-md-12">
            <form action="{{ route('monthly-bills.update',$bill->id) }}" method="post">
                @csrf
                @method('patch')
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="">Title</label>
                    <input type="text" class="form-control" name="title" value="{{ $bill->title }}" required>
                </div>
                <div class="form-group col-md-4">
                    <label for="">Type</label>
                    <select name="type" class="form-control"  required >
                        <option value="fixed">Fixed</option>
                        <option value="variable">Variable</option>
                    </select>
                </div>
                <div class="form-group col-md-4">
                    <label for="">Amount</label>
                    <input type="number" class="form-control" value="{{ $bill->amount }}" name="amount" required>
                </div>
                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-success btn-md float-right">
                    <i class="icon-copy dw dw-add"></i>
                        Update Bill
                </button>
                </div>
            </div>
            </form>
        </div>
    </div>
</div>
@endsection
@push('js')
<script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.79/jquery.form-validator.min.js') }}"></script>
@endpush