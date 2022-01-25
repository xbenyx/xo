<?php

namespace App\Http\Controllers;

use App\SLCustomerAccount;
use Illuminate\Http\Request;


class SLCustomerAccountController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }


    public function index()
    {
        $SLCustomerAccounts = SLCustomerAccount::all();
        return view('SLCustomerAccount.index', compact('SLCustomerAccounts'));
    }

    // /**
    //  * Display the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function show($id)
    // {
    //     //
    // }

    // /**
    //  * Show the form for editing the specified resource.
    //  *
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function edit($id)
    // {
    //     $SLCustomerAccount = SLCustomerAccount::findOrFail($id);
    //     return view('SLCustomerAccount.edit', compact('SLCustomerAccount'));
    // }

    //     /**
    //  * Update the specified resource in storage.
    //  *
    //  * @param  \Illuminate\Http\Request  $request
    //  * @param  int  $id
    //  * @return \Illuminate\Http\Response
    //  */
    // public function update(Request $request, $id)
    // {
    //     $request->validate([
    //         'name' => 'required|min:3|regex:/^[a-zA-Z ]+$/',
    //         'address' => 'required|min:3',
    //         'mobile' => 'required|min:3|digits:11',
    //         'details' => 'required|min:3|',
    //         'previous_balance' => 'min:3',
    //     ]);

    //     $SLCustomerAccount = SLCustomerAccount::findOrFail($id);
    //     $SLCustomerAccount->name = $request->name;
    //     $SLCustomerAccount->address = $request->address;
    //     $SLCustomerAccount->mobile = $request->mobile;
    //     $SLCustomerAccount->details = $request->details;
    //     $SLCustomerAccount->save();

    //     return redirect()->back()->with('message', 'Customer Updated Successfully');
    // }




}

