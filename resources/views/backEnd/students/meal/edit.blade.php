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
            <form action="{{ route('hostle-meal.update',$meal->id) }}" method="post">
                @csrf
                @method('patch')
                <div class="form-row">
                    <div class="form-group col-md-4">
                        <label for="">Meal Day</label>
                        <input type="text" class="form-control" name="mealDay" value="{{ $meal->mealDay }}" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Meal Type</label>
                        <input type="text" class="form-control" name="mealType" value="{{ $meal->mealType }}" required>
                    </div>
                    <div class="form-group col-md-4">
                        <label for="">Meal Items</label>
                        <input type="text" class="form-control" name="mealItems" value="{{ $meal->mealItems }}" required>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="">Meal Price</label>
                        <input type="number" class="form-control" name="mealPrice" value="{{ $meal->mealPrice }}" required>
                    </div>
                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-success btn-md float-right">
                            <i class="icon-copy dw dw-checked"></i>
                            Update Meal</button>
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