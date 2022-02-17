<?php

namespace App\Http\Controllers;

use App\Models\MembershipPayments;
use App\Http\Requests\StoreMembershipPaymentsRequest;
use App\Http\Requests\UpdateMembershipPaymentsRequest;

class MembershipPaymentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @param  \App\Http\Requests\StoreMembershipPaymentsRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMembershipPaymentsRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MembershipPayments  $membershipPayments
     * @return \Illuminate\Http\Response
     */
    public function show(MembershipPayments $membershipPayments)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MembershipPayments  $membershipPayments
     * @return \Illuminate\Http\Response
     */
    public function edit(MembershipPayments $membershipPayments)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMembershipPaymentsRequest  $request
     * @param  \App\Models\MembershipPayments  $membershipPayments
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMembershipPaymentsRequest $request, MembershipPayments $membershipPayments)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MembershipPayments  $membershipPayments
     * @return \Illuminate\Http\Response
     */
    public function destroy(MembershipPayments $membershipPayments)
    {
        //
    }
}
