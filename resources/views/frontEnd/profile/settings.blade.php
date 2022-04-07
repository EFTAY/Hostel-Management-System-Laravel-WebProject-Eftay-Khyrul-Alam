@extends('layouts.frontEnd.master')
@section('content')
    <div class="row">
        <div class="col-md-12">
            @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
        </div>
        <div class="col-md-12">
            <form action="{{ route('student.update.image') }}" method="post" enctype="multipart/form-data">
                @csrf
                @method("PATCH")
                <div class="form-row">
                    <div class="form-group col-md-12">
                        <label for="">Image</label>
                        <input type="file" class="form-control" name="image" required  id="">
                    </div>
                    <div class="form-group col-md-12">
                        <button type="submit" class="btn btn-success float-right"><i class="icon-copy dw dw-up-arrow-4"></i> Update</button>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection