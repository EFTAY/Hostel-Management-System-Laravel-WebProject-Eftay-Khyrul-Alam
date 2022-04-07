@extends('layouts.frontEnd.master')

@section('content')
<div class="card-box pd-20 height-100-p mb-30">
   <div class="row align-items-center">
       <div class="col-md-12">
            <table class="table table-striped">
                <h3 class=" p-3" style="text-align: center">Student Profile</h3>
                <tbody>
                    <tr class="image">
                        <div style="text-align: center"><img src="{{ asset('files/student/image').'/'.$student->image }}" alt=""></div>
                        
                    </tr>
                    <tr class="bg-info">
                        <td>Student ID:</td>
                        <td>{{ $student->studentID}}</td>
                        
                    </tr>
                    <tr class="bg-success">

                        <td>Department Name:</td>
                        <td>{{ $student->department}}</td>
                        
                    </tr>
                    <tr class="bg-Faded">
                        <td>Email:</td>
                        <td>{{ $student->email}}</td>
                        
                    </tr>
                    <tr class="bg-warning">
                        <td>Gender:</td>
                        <td>{{ $student->gender}}</td>
                    </tr>
                    <tr class="bg-primary">
                        <td>Phone:</td>
                        <td>{{ $student->phone}}</td>
                        
                    </tr>
                    <tr class="bg-success">
                        <td>Guardian Phone:</td>
                        <td>{{ $student->guardianPhone}}</td>
                        
                    </tr>
                    <tr class="bg-Faded">
                        <td>Nationality:</td>
                        <td>{{ $student->nationality}}</td>
                        
                    </tr>
                    <tr class="bg-info">
                        <td>Address:</td>
                        <td>{{ $student->address}}</td>
                        
                    </tr>
                    {{-- <tr class="bg-warning"><td>Seat Number:</td>
                        <td>{{ $student->hostelseat->floor.' - '.$student->hostelseat->flat.' - '.$student->hostelseat->seatNumber}}</td>
                        
                    </tr> --}}
                    <tr class="bg-primary">
                        <td>Payment Status:</td>
                        <td>{{ $student->paymentStatus}}</td>
                        
                    </tr>
                    <tr class="bg-success">
                        <td>Status:</td>
                        <td>{{ $student->status}}</td>
                    </tr>
                </tbody>
            </table>
       </div>
   </div>
</div>
@endsection