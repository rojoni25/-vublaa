<?php

namespace App\Http\Controllers;

use App\Models\Education;
use App\Models\MembershipPayments;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class HomeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        return "Your Data has been saved";
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('member_registration');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //

        // dd($request->all());
        $registration_id = "VUB".time();

        $user = new User();
        $user->registration_id = $registration_id;
        $user->name = $request->name;
        $user->nickname = $request->nickname;
        $user->dob = $request->dob;
        $user->gender = $request->gender;
        $user->civil_status = $request->civil_status;
        $user->spouse = $request->spouse;
        $user->sons = $request->sons;
        $user->daughters = $request->daughter;
        $user->mailing_address = $request->mailing_address;
        $user->permanent_address = $request->permanent_address;
        $user->ocupation = $request->ocupation;
        $user->designation = $request->designation;
        $user->organization = $request->organization;
        $user->mobile = $request->mobile_number;
        $user->email = $request->email;
        $user->password = Hash::make($request->mobile_number);

        $photo = $request->file('photo');
		$original_name = $photo->getClientOriginalName();
		$photo_random_name = uniqid().'.'.$photo->getClientOriginalExtension();
        $photo->move(public_path().'/uploads/images/photo/', $photo_random_name);
        $user->profile_photo_path = 'uploads/images/photo/'.$photo_random_name;

        $signature = $request->file('signature');
		$original_name = $signature->getClientOriginalName();
		$signature_random_name = uniqid().'.'.$signature->getClientOriginalExtension();
        $signature->move(public_path().'/uploads/images/signature/', $signature_random_name);
        $user->signature_path = 'uploads/images/signature/'.$signature_random_name;

        $academic_file = $request->file('academic_certificate');
		$original_name = $academic_file->getClientOriginalName();
		$academic_file_random_name = uniqid().'.'.$academic_file->getClientOriginalExtension();
        $academic_file->move(public_path().'/uploads/images/academic_file/', $academic_file_random_name);
        $user->academic_file_path = 'uploads/images/academic_file/'.$academic_file_random_name;

        $user->save();

        $user_id = $user->id;

        $education = new Education();

        foreach($request->degree as $key=>$deg){
            $education->user_id = $user_id;
            $education->membership_id = $user->membership_id;
            $education->degree = $deg;
            $education->subject = $request->major[$key];
            $education->passing_year = $request->year[$key];
            $education->save();
        }

        $payment = new MembershipPayments();
        $payment->user_id = $user_id;
        $payment->registration_id = $registration_id;
        $payment->payment_method = $request->payment_mode;
        $payment->reference = $request->reference;
        $payment->transaction_id = $request->trxid;
        $payment->bank_name = $request->bank_name;
        $payment->bank_branch = $request->bank_branch;
        $payment->bank_date = $request->bank_date;
        $payment->paid_amount = '';
        $payment->checked_by = '';
        $payment->status = 'Pending';
        $payment->save();

        return route('home.index');

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
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
