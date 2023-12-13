<?php

namespace App\Http\Controllers;

use App\Models\GetnewAccountno;
use App\Models\UserAccountDetail;
use App\Http\Requests\StorenewAccountnoControllerRequest;
use App\Http\Requests\UpdatenewAccountnoControllerRequest;

class NewAccountnoControllerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StorenewAccountnoControllerRequest $request)
    {
        GetnewAccountno::create($request->validated());
        return redirect()->back()->with('success', 'Form submitted successfully for the verification');
    }

    /**
     * Display the specified resource.
     */
    public function show(newAccountnoController $newAccountnoController)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(newAccountnoController $newAccountnoController)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatenewAccountnoControllerRequest $request, newAccountnoController $newAccountnoController)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(newAccountnoController $newAccountnoController)
    {
        //
    }

    public function checkAccountNumber(Request $request)
    {
        $accountNumber = $request->input('account_number');

        $exists = UserAccountDetail::where('account_number', $accountNumber)->exists();

        return response()->json(['exists' => $exists]);
    }
}
