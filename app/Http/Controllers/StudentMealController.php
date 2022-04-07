<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use App\Models\Mealbill;
use App\Models\HostelMeal;
use Illuminate\Http\Request;
use App\Models\StudentInformation;

class StudentMealController extends Controller
{
    public function index()
    {
        return view('layouts.frontEnd.meal.index');
    }
    public function findMeal(Request $request)
    {
        try {
            $dayName = Carbon::parse($request->date)->format('l');
            $mealList = HostelMeal::where('mealDay',$dayName)->get();
            $date = $request->date;
            // return $mealList;
            return view('layouts.frontEnd.meal.index', compact('mealList','date'));
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    public function store(Request $request)
    {
        try {
            Mealbill::create([
                'student_id' => $request->studentID,
                'date' => $request->date,
                'breakfast_quantity' => $request->breakFastUnit,
                'breakfast_price' => $request->breakFastPrice,
                'lunch_quantity' => $request->lunchUnit,
                'lunch_price' => $request->lunchPrice,
                'dinner_quantity' => $request->dinnerUnit,
                'dinner_price' => $request->dinnerPrice,
                'comments' => $request->comments
            ]);
            toast('Meal booked successfully!','success');
            // return redirect()->back();
            return redirect()->route('meal.show',$request->studentID);
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    public function show($student_id){
        try {
            $studentMeal = StudentInformation::with('hostel_meals')->where('studentID',$student_id)->first();
            // return $studentMeal;
            return view('layouts.frontEnd.meal.bills', compact('studentMeal'));
        } catch (\Throwable $th) {
            return $th->getMessage();
        }
    }
    
}
