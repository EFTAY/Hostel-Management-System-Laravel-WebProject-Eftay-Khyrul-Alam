<?php

namespace App\Http\Controllers\student;

// use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\HostleSeats;
use Illuminate\Http\Request;
use App\Models\StudentInformation;
use App\Http\Controllers\Controller;

class StudentInformationControlller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $students=StudentInformation::orderBy('studentID','asc')->get();
        // return $students;
        return view('backEnd.students.information.index',compact('students'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $seats=HostleSeats::where('status','0')->orderBy('floor','asc')->get();
        // return $seats;/
        return view('backEnd.students.information.create',compact('seats'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request;
        $request->validate([
            'studentID'=>'required|unique:student_information'
        ]);
        StudentInformation::create($request->except('_token'));
        toast('Student Added successfully','success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id )
    {
        // return $id;
        // $students=StudentInformation::find($id);
        $students=StudentInformation::with('hostelseat')->find($id);
        // return $students;
        return view('backEnd.students.information.show',compact('students'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $students=StudentInformation::with('hostelseat')->find($id);
        $seats=HostleSeats::where('status','0')->orderBy('floor','asc')->get();
        // return $students;
        return view('backEnd.students.information.edit',compact('students','seats'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // return $request;
        StudentInformation::where('id',$id)->update($request->except('_token','_method'));
        toast("Student Information updated",'success');
        return redirect()->route('student-information.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        StudentInformation::destroy($id);
        toast('Students Information Deleted Successfully','success');
        return redirect()->back();
    }
    public function studentInformationDownload($studentID)
    {
        $students = StudentInformation::find($studentID);
        // return $students;
        $pdf = PDF::loadView('backEnd.students.information.download',['students' => $students]);
        return $pdf->download($students->studentID.'.pdf');
        //download hocce direct dwnload
        // return $pdf->stream($students->studentID.'.pdf');//stream hocce age pdf show korbe
        
    }
}
