<?php

namespace App\Http\Controllers;

use App\Models\MembershipCategory;
use App\Http\Requests\StoreMembershipCategoryRequest;
use App\Http\Requests\UpdateMembershipCategoryRequest;

class MembershipCategoryController extends Controller
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
     * @param  \App\Http\Requests\StoreMembershipCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreMembershipCategoryRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\MembershipCategory  $membershipCategory
     * @return \Illuminate\Http\Response
     */
    public function show(MembershipCategory $membershipCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\MembershipCategory  $membershipCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(MembershipCategory $membershipCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateMembershipCategoryRequest  $request
     * @param  \App\Models\MembershipCategory  $membershipCategory
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateMembershipCategoryRequest $request, MembershipCategory $membershipCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\MembershipCategory  $membershipCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(MembershipCategory $membershipCategory)
    {
        //
    }
}
