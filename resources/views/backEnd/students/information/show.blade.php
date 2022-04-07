@extends('layouts.backEnd.master')

@section('content')
<div class="card-box pd-20 height-100-p mb-30">
   <div class="row align-items-center">
       <div class="col-md-12">
            <table class="table table-striped">
                <h3 class=" p-3" style="text-align: center">Student Profile</h3>
                <tbody>
                    <tr class="bg-info">
                        <td>Student ID:</td>
                        <td>{{ $students->studentID}}</td>
                        
                    </tr>
                    <tr class="bg-success">

                        <td>Department Name:</td>
                        <td>{{ $students->department}}</td>
                        
                    </tr>
                    <tr class="bg-Faded">
                        <td>Email:</td>
                        <td>{{ $students->email}}</td>
                        
                    </tr>
                    <tr class="bg-warning">
                        <td>Gender:</td>
                        <td>{{ $students->gender}}</td>
                    </tr>
                    <tr class="bg-primary">
                        <td>Phone:</td>
                        <td>{{ $students->phone}}</td>
                        
                    </tr>
                    <tr class="bg-success">
                        <td>Guardian Phone:</td>
                        <td>{{ $students->guardianPhone}}</td>
                        
                    </tr>
                    <tr class="bg-Faded">
                        <td>Nationality:</td>
                        <td>{{ $students->nationality}}</td>
                        
                    </tr>
                    <tr class="bg-info">
                        <td>Address:</td>
                        <td>{{ $students->address}}</td>
                        
                    </tr>
                    <tr class="bg-warning"><td>Seat Number:</td>
                        <td>{{ $students->hostelseat->floor.' - '.$students->hostelseat->flat.' - '.$students->hostelseat->seatNumber}}</td>
                        
                    </tr>
                    <tr class="bg-primary">
                        <td>Payment Status:</td>
                        <td>{{ $students->paymentStatus}}</td>
                        
                    </tr>
                    <tr class="bg-success">
                        <td>Status:</td>
                        <td>{{ $students->status}}</td>
                    </tr>
                </tbody>
            </table>
       </div>
   </div>
</div>
@endsection