<?php

namespace App\Http\Controllers;

use App\Models\LiftingPlan;
use Illuminate\Http\Request;

class LiftingPlanController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // dd('inside index');
        $liftingPlan = LiftingPlan::get();
        // dd($liftingPlan);
        return view('components.stock.liftingplan',[
            'liftingPlan' => $liftingPlan
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // dd('inside create');
    return view('components.stock.addnewliftingplan ');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // dd($request);
        $myarr=[
        'planning_dispatch_date'=>$request->planning_dispatch_date,
        'company'=>$request->company,
        'location' =>$request->location,
        'order_no' =>$request->order_no,
        'business_partner'=>$request->business_partner,
        'bp_name'=>$request->bp_name,
        'item'=>$request->item,
        'pending_quantity'=>$request->pending_quantity,
        'approx_quantity_for_dispatch'=>$request->approx_quantity_of_dispatch,
        'price' =>$request->price,
        'amount' =>$request->amount,
        'ref_no' =>$request->ref_no,
        'remark'=>$request->remark
        ];
        // dd($myarr);

        $query=LiftingPlan::insert($myarr);



        // $request->validate([
        //     'planning_dispatch_detail' => 'required',
        //     'company' => 'required',
        //     'location' => 'required',
        //     'order_no' => 'required',
        //     'business_partner' => 'required',
        //     'bp_name' => 'required',
        //     'item' => 'required',
        //     'pending_quantity' => 'required',
        //     'approx_quantity_for_dispatch' => 'required',
        //     'price' => 'required',
        //     'amount' => 'required',
        //     'ref_no' => 'required',
        //     'remark' => 'required',
        // ]);

        // LiftingPlan::create($request->all());

        return redirect('liftingplan');
    }

    /**
     * Display the specified resource.
     */
    public function show(LiftingPlan $liftingPlan)
    {
        return view('components.stock.liftingplan',compact('liftingplan'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(LiftingPlan $liftingPlan)
    {
        return view('components.stock.addnewliftingplan',compact('product'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, LiftingPlan $liftingPlan)
    {
        $request->validate([
            'planning_dispatch_detail' => 'required',
            'company' => 'required',
            'location' => 'required',
            'order_no' => 'required',
            'business_partner' => 'required',
            'bp_name' => 'required',
            'item' => 'required',
            'pending_quantity' => 'required',
            'approx_quantity_for_dispatch' => 'required',
            'price' => 'required',
            'amount' => 'required',
            'ref_no' => 'required',
            'remark' => 'required',
        ]);
  
        $liftingPlan->update($request->all());
  
        return redirect()->route('components.stock.liftingplan')->with('success','LiftingPlan updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(LiftingPlan $liftingPlan)
    {
        $liftingPlan->delete();
  
        return redirect()->route('components.stock.liftingplan')->with('success','LiftingPlan deleted successfully');
    }
}
