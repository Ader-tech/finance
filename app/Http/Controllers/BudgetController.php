<?php

namespace App\Http\Controllers;

use App\Models\Budget;
use Illuminate\Http\Request;

class BudgetController extends Controller
{

    public function create(Request $request)
    {
        $this->validate($request,[
            'budgetName'=> 'required',
            'budgetAmount'=> 'required',
            'budgetPeriod'=> 'required',
            'budgetStartdate'=>'required',
            'budgetProgress'=>'required',
            'budgetEnddate'=>'required',
            'budgetCreatedby'=>'required',
            'budgetStatus'=>'required'
        ]);

        $budget = new Budget;
        $budget->budgetName = $request->budgetName;
        $budget->budgetAmount = $request->budgetAmount;
        $budget->budgetPeriod = $request->budgetPeriod;
        $budget->budgetStartdate = $request->budgetStartdate;
        $budget->budgetProgress = $request->budgetProgress;
        $budget->budgetEnddate = $request->budgetEnddate;
        $budget->budgetCreatedby = $request->budgetCreatedby;
        $budget->budgetStatus = $request->budgetStatus;
        $budget->save();

        return response()->json([
            'status'=> true,
            'data' => $budget 
        ]);

    }
    public function update(Request $request, $id)
    {
        $budget = Budget::find($id);
        $budget->budgetName = $request->budgetName;
        $budget->budgetAmount = $request->budgetAmount;
        $budget->budgetPeriod = $request->budgetPeriod;
        $budget->budgetStartdate = $request->budgetStartdate;
        $budget->budgetProgress = $request->budgetProgress;
        $budget->budgetEnddate = $request->budgetEnddate;
        $budget->budgetCreatedby = $request->budgetCreatedby;
        $budget->budgetStatus = $request->budgetStatus;
        $budget->save();

        return response()->json([
            'status'=> true,
            'success' => 'created successfully',
            'data' => $budget
        ]);
    }
}
//     public function index()
//     {
        
//     }

//     /**
//      * Show the form for creating a new resource.
//      *
//      * @return \Illuminate\Http\Response
//      */
//     public function create()
//     {
//         //
//     }

//     /**
//      * Store a newly created resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @return \Illuminate\Http\Response
//      */
//     public function store(Request $request)
//     {
//         //
//     }

//     /**
//      * Display the specified resource.
//      *
//      * @param  \App\Models\Budget  $budget
//      * @return \Illuminate\Http\Response
//      */
//     public function show(Budget $budget)
//     {
//         //
//     }

//     /**
//      * Show the form for editing the specified resource.
//      *
//      * @param  \App\Models\Budget  $budget
//      * @return \Illuminate\Http\Response
//      */
//     public function edit(Budget $budget)
//     {
//         //
//     }

//     /**
//      * Update the specified resource in storage.
//      *
//      * @param  \Illuminate\Http\Request  $request
//      * @param  \App\Models\Budget  $budget
//      * @return \Illuminate\Http\Response
//      */
//     public function update(Request $request, Budget $budget)
//     {
//         //
//     }

//     /**
//      * Remove the specified resource from storage.
//      *
//      * @param  \App\Models\Budget  $budget
//      * @return \Illuminate\Http\Response
//      */
//     public function destroy(Budget $budget)
//     {
//         //
//     }
// }
