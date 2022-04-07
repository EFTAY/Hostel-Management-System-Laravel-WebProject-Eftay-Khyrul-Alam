<?php

namespace App\Http\Controllers\meal;

// use Barryvdh\DomPDF\PDF;
use Barryvdh\DomPDF\Facade as PDF;
use App\Models\HostelMeal;
use Illuminate\Http\Request;
use App\Models\StudentInformation;
use App\Http\Controllers\Controller;
// use App\Http\Controllers\meal\HostelMealController;

class HostelMealController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $meal = HostelMeal::get();
        return view('backEnd.students.meal.index',compact('meal'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {   
        //
        
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
        // HostelMeal::create([
        //     'mealDay' => $request->mealDay,
        //     'mealType' => $request->mealType,
        //     'mealItems' => $request->mealItems,
        //     'mealPrice' => $request->mealPrice
        // ]);       
        HostelMeal::create($request->all());       
        toast('Meal Added Successfully','success');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $meal=HostelMeal::find($id);
        return view('backEnd.students.meal.edit',compact('meal'));
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
        HostelMeal::find($id)->update($request->all());
        toast('Meal Update successfully','success');
        return redirect()->route('hostle-meal.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        HostelMeal::destroy($id);
        toast('Meal item deleted successfully','success');
        return redirect()->back();
    }
    public function informationdownload($id)
    {
        $meal = HostelMeal::find($id);
        // return $meal;
        $pdf = PDF::loadView('backEnd.students.meal.download',['meal' => $meal]);
        // return $pdf->download($meal->studentID.'.pdf');
        // download hocce direct dwnload
        return $pdf->stream($meal->mealType.'.pdf');//stream hocce age pdf show korbe
        
    }
}
