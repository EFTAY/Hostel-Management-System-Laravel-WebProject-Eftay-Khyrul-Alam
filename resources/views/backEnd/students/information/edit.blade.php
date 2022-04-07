@extends('layouts.backEnd.master')
@push('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.79/theme-default.min.css">
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">    
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
           <h5 class="text-info"><span class="text-danger">*</span> fields are magnatory</h5>
           <form action="{{ route('student-information.update',$students->id) }}" method="post" enctype="multipart/form-data">
                @csrf
                @method("PATCH")
                <div class="form-row">
                    <div class="form-group col-md-6">
                        <label for="">Student ID:<span class="text-danger">*</span></label>
                        <input type="text" name="studentID" data-validation="required" class="form-control" id="" value="{{ $students->studentID }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Student Name:<span class="text-danger">*</span></label>
                        <input type="text" name="name" data-validation="required" class="form-control" id="" value="{{ $students->name }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Department<span class="text-danger">*</span></label>
                            <select name="department" class="form-control" data-validation="required" id="" value="{{ $students->department }}">
                                {{-- <option selected>Choose Department...</option> --}}
                                <option value="CSE">CSE</option>
                                <option value="EEE">EEE</option>
                                <option value="CE">CE</option>
                                <option value="BBA">BBA</option>
                                <option value="LAW">LAW</option>
                                <option value="ENG">ENG</option>
                            </select>
                      </div>
                    <div class="form-group col-md-6">
                        <label for="">Student Email:</label>
                        <input type="text" name="email" data-validation="email" data-validation-optional="true" class="form-control" id="" value="{{ $students->email }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Gender:<span class="text-danger">*</span></label>
                        <select class="form-control" name="gender" id="" data-validation="required" value="{{ $students->gender }}">
                            {{-- <option selected>Choose gender...</option> --}}
                            <option value="male">Male</option>
                            <option value="female">Female</option>
                        </select>
                    </div>
                    <div   class="form-group col-md-6">
                        <label for="">Student Phone Number:</label>
                        <input type="text" name="phone" data-validation="required" class="form-control" id="" value="{{ $students->phone }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Guardian Phone Number:<span class="text-danger">*</span></label>
                        <input type="text" name="guardianPhone" data-validation="required" class="form-control" id="" value="{{ $students->guardianPhone }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Nationality:<span class="text-danger">*</span></label>
                        <input type="text" name="nationality"  data-validation="required" class="form-control" id="" value="{{ $students->nationality }}">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Present Address:<span class="text-danger">*</span></label>
                        <textarea name="present_address" id="" class="form-control" cols="30" rows="10" data-validation="required" >
                            {{ $students->present_address }}
                        </textarea>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Permanent Address:<span class="text-danger">*</span></label>
                        <textarea name="permanent_address" id="" class="form-control" cols="30" rows="10" data-validation="required" >
                            {{ $students->permanent_address }}
                        </textarea>
                    </div>
                    <div class="form-group col-md-6 ">
                        <label for="">Seat Number:<span class="text-danger">*</span></label>
                        <select class="custom-select2 form-control" name="seatNumber" id="" data-validation="required" value="{{ $students->seatNumber }}">
                            @foreach ($seats as $items)
                                @php
                                    $check = App\Models\StudentInformation::where('seatNumber',$items->id)->exists();
                                @endphp
                                
                                <option @if ($check && $students->seatNumber!=$items->id)
                                    disabled
                                @endif @if ($items->id == $students->seatNumber)
                                    selected
                                @endif value="{{ $items->id }}">{{ $items->floor.' - '.$items->flat.' - '.$items->seatNumber }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Payments Status:<span class="text-danger">*</span></label>
                        <select class="form-control" name="paymentStatus" id="" data-validation="required" value="{{ $students->paymentStatus }}">
                            <option value="Clear">Clear</option>
                            <option value="Dues">Dues</option>
                        </select>
                    </div>
                    <div class="form-group col-md-6">
                        <label for="">Staus:<span class="text-danger">*</span></label>
                        <select class="form-control text-success" name="status" id="" data-validation="required" value="{{ $students->status }}">
                            <option value="0">Current</option>
                        </select>
                    </div>
                    <div class="form-group col-md-12">
                        <button class="btn btn-success btn-md float-right" type="submit"><i class="icon-copy dw dw-add-user"></i>Update</button>    
                    </div>
                </div>
            </form>
       </div>
   </div>
</div>
@endsection

@push('js')
    <script src="{{asset('https://cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.79/jquery.form-validator.min.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>

    <script>
        $(document).ready(function(){
            $.validate();
            $(".custom-select2").select2({
            allowClear: true
        });
    });
    </script>
@endpush
