@extends('layouts.backEnd.master');

@push('css')
    <link rel="stylesheet" herf="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.79/theme-default.min.css') }}">
@endpush
@section('content')
<div class="card-box pd-20 height-100-p mb-30">
    <div class="row align-items-center">
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
            {{-- <table class="table table-striped">
                <thead>
                    <th>Title</th>
                    <th>Data</th>
                </thead>
                <tbody>
                    <tr>
                        <td>Name</td>
                        <td>{{ auth()-> user()->name }}</td>
                    </tr>
                    <tr>
                        <td>Email</td>
                        <td>{{ auth()->user()->email  }}</td>
                    </tr>
                </tbody>
            </table> --}}
            <form action="{{ route('user.update',auth()->user()->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                {{-- laravel er defult methor hocche patch --}}
                @method('PATCH') 
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="">Name:</label>
                    <input type="text" class="form-control" name="name" id="" data-validation="required" value="{{ $user->name }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Email:</label>
                    <input type="email" class="form-control" name="email" id="" data-validation="email" value="{{ $user->email }}">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Password:</label>
                    <input type="password" class="form-control" name="password" id="" data-validation="required">
                </div>
                <div class="form-group col-md-6">
                    <label for="">Password Confirm:</label>
                    <input type="password" class="form-control" name="password_confirmation" id="" data-validation="required">
                </div>
                <div class="form-group col-md-12">
                    <button type="submit" class="btn btn-success float-right"><i class="icon-copy fa fa-check-circle" aria-hidden="true"></i>Update</button>
                  </div>
            </div>

            </form>
        </div>
    </div>
</div>
    
@endsection
@push('js')
    <script src="{{ asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.79/jquery.form-validator.min.js') }}"></script>
    <script>
        $(document).ready(function(){
        $.validate();
        // alert('hi');
    });
    </script>
@endpush