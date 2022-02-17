@extends('layouts.member_app')
@section('main')
    <div class="container mx-auto">
        <div id="registrationInfoDiv" class="space-y-5 text-justify px-5">
            <p style="text-align:center"><span style="font-size:18px"><strong>MEMBERSHIP INFORMATION</strong></span></p>

            <p>
                A person holding a Bachelor (BBA) and/or Master degree (MBA) and/or other degree from the Department of
                Business Administration, Varendra University and presently not attached to the university as a
                &lsquo;student&rsquo;, shall be eligible to be a member of VUBLAA.</p>

            <p>
                <strong>Categories of membership:</strong>
            </p>

            <ol class="list-decimal space-y-2 pl-10">
                <li>Regular Member (RM): Minimum 2 years subscription/fee for an Alumnus/Alumna living in Bangladesh shall
                    be Tk. 500/= (five hundred Tk.) and for an overseas Alumnus/Alumna shall be US $20 (twenty US dollars)
                    only.</li>
                <li>Life Member (LM): For an Alumnus/Alumna living inside and outside Bangladesh, the subscription/fees
                    shall be Tk 3,000/= (three thousand) and US $100 (two hundred US dollars) respectively at a time. A
                    non-Alumnus/non-Alumna on payment of this amount or more shall be offered Associate Life Membership
                    (ALM).</li>
                <li>Grand Donor Member (GDM): An Alumnus/Alumna donating at least Tk. 100,000 (one hundred thousand) or more
                    at a time shall be offered Grand Donor membership. A non-Alumnus/ non-Alumna donating the same amount
                    shall be offered Associate grand donor membership (AGDM). The photograph of a GDM/AGDM with name and
                    citation shall be hung on the wall of the Alumni building.</li>
                <li>Honorary Life Member (HLM): A distinguished person may be conferred the Honorary Life Membership of the
                    association in recognition of her/ his long and distinguished/ outstanding/ eminent services to the
                    cause of humanity, culture, education, and national welfare. The Executive Committee may, if necessary,
                    grant honorary membership to non-alumni who are instrumental in the development / expansion of the
                    dignity and interests of the Association, donors, and eminent persons. S/he shall enjoy all the
                    privileges of a member/life member excepting right to hold an office of VUBLAA &amp; shall not have the
                    power to participate in or vote in any election.</li>
            </ol>

            <p class="text-red-700 mt-4 italic">* Please upload an academic certificate obtained from the
                Department of Business
                Administration, Varendra University.</p>
            <p class="text-red-700 mt-4 italic">** All the subscriptions should be payable to any of the following:</p>

            <p><strong>Bkash Number:</strong> <strong>01751412260 (<span style="color:#FF0000">Send Money</span>)</strong>
            </p>

            <div class="mx-auto mt-5">
                <a href="#" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"
                    onclick="$('#formDiv').css('display','block'); $('#registrationInfoDiv').css('display','none');">
                    Proceed
                </a>
            </div>
        </div>
        <div id="formDiv" style="display: none;">
            <div class="text-md font-semibold text-center px-5 py-5 mb-0">Registration Form</div>
            <div class=" flex justify-center align-center">
                <div class="px-5 py-5 w-full">
                    <form class="w-full" action="{{route('store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="md:flex md:space-x-8 md:space-y-0 space-y-8">
                            <div class="w-full md:w-1/2">
                                <div class="rounded border-t border-gray-500 px-5 py-5 shadow-lg mb-5">
                                    <div class="w-full text-center font-semibold mb-5">Personal Information</div>
                                    <div class="md:flex -mx-3 mb-6">

                                        <div class="flex flex-wrap w-full md:w-1/2 px-3 mb-6 md:mb-0">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="name">
                                                Full Name <span class="text-red-500 font-bold">*</span>
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-red-500 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white"
                                                id="name" name="name" type="text" placeholder="Your Full Name">
                                        </div>
                                        <div class="w-full md:w-1/2 px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="nickname">
                                                Nickname
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="nickname" name="nickname" type="text" placeholder="Your Nickname here">
                                        </div>
                                    </div>
                                    <div class="md:flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-1/3 px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="dob">
                                                Date of Birth <span class="text-red-500 font-bold">*</span>
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="dob" name="dob" type="date" placeholder="DD/MM/YYYY" required>

                                        </div>
                                        <div class="w-full md:w-1/3 px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="gender">
                                                Gender <span class="text-red-500 font-bold">*</span>
                                            </label>
                                            <select name="gender" id="gender"
                                                class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                <option value="male">Male</option>
                                                <option value="female">Female</option>
                                                <option value="others">Others</option>
                                            </select>
                                            {{-- <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="dob" name="dob" type="date" placeholder="DD/MM/YYYY">
								<p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p> --}}
                                        </div>
                                        <div class="w-full md:w-1/3 px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="civil_status">
                                                Civil Status <span class="text-red-500 font-bold">*</span>
                                            </label>
                                            <select name="civil_status" id="civil_status"
                                                onchange="displayMarried('#ifMarried');"
                                                class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                <option value="single">Single</option>
                                                <option value="married">Married</option>
                                                <option value="widow/er">Widow/er</option>
                                            </select>
                                            {{-- <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="dob" name="dob" type="date" placeholder="DD/MM/YYYY">
								<p class="text-gray-600 text-xs italic">Make it as long and as crazy as you'd like</p> --}}
                                        </div>
                                    </div>
                                    <div class="md:flex flex-wrap -mx-3 mb-6" style="display: none;" id="ifMarried">
                                        <div class="w-full md:w-3/5 px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="spouse">
                                                Spouse Name <span class="text-red-500 font-bold">*</span>
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="spouse" name="spouse" type="text" placeholder="Spouse Name">
                                        </div>
                                        <div class="w-full md:w-1/5 px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="sons">
                                                Son(s)
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="sons" name="sons" type="number" placeholder="Son(S)">
                                        </div>
                                        <div class="w-full md:w-1/5 px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="daughter">
                                                Daughter(s)
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="daughter" name="daughter" type="number" placeholder="Daughter(s)">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-1/2 px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="ocupation">
                                                Ocupation
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="ocupation" name="ocupation" type="text"
                                                placeholder="Your Current Ocupation">
                                        </div>
                                        <div class="w-full md:w-1/2 px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="designation">
                                                Designation
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="designation" name="designation" type="text"
                                                placeholder="Your Current Ocupation">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full  px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="organization">
                                                Organization
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="organization" name="organization" type="text"
                                                placeholder="Your Current Ocupation">
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded border-t border-gray-500 px-5 py-5 shadow-lg mb-5">
                                    <div class="w-full text-center font-semibold mb-5">Contact Information</div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full md:w-1/2 px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="mobile_number">
                                                Mobile Number <span class="text-red-500 font-bold">*</span>
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="mobile_number" name="mobile_number" type="text"
                                                placeholder="Your Current mobile_number">
                                        </div>
                                        <div class="w-full md:w-1/2 px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="email">
                                                Email <span class="text-red-500 font-bold">*</span>
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="email" name="email" type="email"
                                                placeholder="Your Email Address">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full  px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="mailing_address">
                                                Mailing Address <span class="text-red-500 font-bold">*</span>
                                            </label>
                                            <textarea
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="mailing_address" name="mailing_address" type="text" required
                                                placeholder="Your Current Address"></textarea>
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full  px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="permanent_address">
                                                Permanent Address <span class="text-red-500 font-bold">*</span>
                                            </label>
                                            <textarea
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="permanent_address" name="permanent_address" type="text" required
                                                placeholder="Your Current Address"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="rounded border-t border-gray-500 px-5 py-5 shadow-lg mb-5">
                                    <div class="w-full text-center font-semibold mb-5">Membership Information</div>
                                    <div class="md:flex flex-wrap -mx-3 mb-6">
                                        <div class="md:w-1/3  px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="membership_category">
                                                Category of Membership <span class="text-red-500 font-bold">*</span>
                                            </label>
                                            <select name="membership_category" id="membership_category"
                                                onkeyup="this.setAttribute('value', this.value);"
                                                onchange="changeAmount('#aamount');"
                                                class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                <option value="Regular Member">Regular Member</option>
                                                <option value="Life Member">Life Member</option>
                                                <option value="Grand Donor Member">Grand Donor Member</option>
                                                <option value="Honorary Life Member">Honorary Life Member</option>
                                            </select>
                                        </div>
                                        <div class="md:w-1/3  px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="amount_in">
                                                Currency
                                            </label>
                                            <select name="amount_in" id="amount_in"
                                                onkeyup="this.setAttribute('value', this.value);"
                                                onchange="changeAmount('#aamount');"
                                                class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                <option value="BDT">BDT</option>
                                                <option value="USD">USD</option>
                                            </select>
                                        </div>
                                        <div class="md:w-1/3  px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="amount">
                                                Amount Payable
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="aamount" name="aamount"
                                                onkeyup="this.setAttribute('value', this.value);"
                                                onchange="this.setAttribute('value', this.value);" value="500" disabled
                                                type="text" placeholder="Amount to be paid">
                                            <input type="hidden" onchange="this.setAttribute('value', this.value);"
                                                name="amount" id="amount">
                                        </div>
                                    </div>
                                    <div class="md:flex flex-wrap -mx-3 mb-6">
                                        <div class="md:w-1/3  px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="payment_mode">
                                                Mode of Payment <span class="text-red-500 font-bold">*</span>
                                            </label>
                                            <select name="payment_mode" id="payment_mode" onchange="displayPayment()"
                                                class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                <option value="Cash">Cash</option>
                                                <option value="Mobile Banking">Mobile Banking</option>
                                                <option value="Bank Deposit">Bank Deposit</option>
                                                <option value="DD">DD</option>
                                                <option value="TT">TT</option>
                                            </select>
                                        </div>
                                        <div class="md:w-2/3  px-3" id="ref" style="display: none;">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="reference">
                                                Reference mobile number <span class="text-red-500 font-bold">*</span>
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="reference" name="reference" type="text"
                                                placeholder="Reference of your Payment">
                                        </div>
                                        <div class="md:w-2/3  px-3" id="bank" style="display: none;">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="bank_name">
                                                Bank <span class="text-red-500 font-bold">*</span>
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="bank_name" name="bank_name" type="text" placeholder="Bank">
                                        </div>
                                    </div>
                                    <div class="md:flex flex-wrap -mx-3 mb-6" id="bankBranch" style="display: none;">
                                        <div class="md:w-1/2  px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="bank_branch">
                                                Branch
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="bank_branch" name="bank_branch" type="text" placeholder="Bank Branch">
                                        </div>
                                        <div class="md:w-1/2  px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="bank_date">
                                                Payment Date
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="bank_date" name="bank_date" type="date" placeholder="Payment Date">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="w-full md:w-1/2">

                                <div class="rounded border-t border-gray-500 px-5 py-5 shadow-lg mb-6">
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full text-center font-semibold mb-5">
                                            DEGREE OBTAINED FROM BUSINESS ADMINISTRATION, VU <span
                                                class="text-red-500 font-bold">*</span>
                                        </div>

                                        <div class="md:w-1/3 w-full  px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="degree[]">
                                                Degree
                                            </label>
                                            <select name="degree[]" id="degree[]"
                                                class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                <option value="BBA">BBA</option>
                                            </select>
                                        </div>

                                        <div class="md:w-1/3 w-full  px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="major[]">
                                                Major/Subject
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="major[]" name="major[]" type="text" placeholder="Major/Subject">
                                        </div>
                                        <div class="md:w-1/3 w-full  px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="year[]">
                                                Passing Year
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="year[]" name="year[]" type="text" placeholder="Passing Year">
                                        </div>
                                    </div>

                                    <div class="md:flex flex-wrap -mx-3 mb-6">
                                        <div class="md:w-1/3 w-full  px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="degree[]">
                                                Degree
                                            </label>
                                            <select name="degree[]" id="degree[]"
                                                class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                <option value="MBA">MBA</option>
                                            </select>
                                        </div>

                                        <div class="md:w-1/3 w-full  px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="major[]">
                                                Major/Subject
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="major[]" name="major[]" type="text" placeholder="Major/Subject">
                                        </div>
                                        <div class="md:w-1/3 w-full  px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="year[]">
                                                Passing Year
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="year[]" name="year[]" type="text" placeholder="Passing Year">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="md:w-1/3 w-full  px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="degree[]">
                                                Degree
                                            </label>
                                            <select name="degree[]" id="degree[]"
                                                class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                <option value="EMBA">EMBA</option>
                                            </select>
                                        </div>

                                        <div class="md:w-1/3 w-full  px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="major[]">
                                                Major/Subject
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="major[]" name="major[]" type="text" placeholder="Major/Subject">
                                        </div>
                                        <div class="md:w-1/3 w-full  px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="year[]">
                                                Passing Year
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="year[]" name="year[]" type="text" placeholder="Passing Year">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="md:w-1/3 w-full  px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="degree[]">
                                                Degree
                                            </label>
                                            <select name="degree[]" id="degree[]"
                                                class="block appearance-none w-full bg-gray-200 border border-gray-200 text-gray-700 py-3 px-4 pr-8 rounded leading-tight focus:outline-none focus:bg-white focus:border-gray-500">
                                                <option value="Others">Others</option>
                                            </select>
                                        </div>

                                        <div class="md:w-1/3 w-full  px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="major[]">
                                                Major/Subject
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="major[]" name="major[]" type="text" placeholder="Major/Subject">
                                        </div>
                                        <div class="md:w-1/3 w-full  px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="year[]">
                                                Passing Year
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="year[]" name="year[]" type="text" placeholder="Passing Year">
                                        </div>
                                    </div>
                                </div>


                                <div class="rounded border-t border-gray-500 px-5 py-5 shadow-lg mb-5">
                                    <div class="w-full text-center font-semibold mb-5">File Uploads</div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full  px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="photo">
                                                Photograph <span class="text-red-500 font-bold">*</span>
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="photo" accept="image/*" name="photo" type="file" required
                                                placeholder="Please Choose Photo">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full  px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="signature">
                                                Signature <span class="text-red-500 font-bold">*</span>
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="signature" accept="image/*" name="signature" type="file" required
                                                placeholder="Your Current Address">
                                        </div>
                                    </div>
                                    <div class="flex flex-wrap -mx-3 mb-6">
                                        <div class="w-full  px-3">
                                            <label
                                                class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2"
                                                for="academic_certificate">
                                                Academic Certificate <span class="text-red-500 font-bold">*</span>
                                            </label>
                                            <input
                                                class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500"
                                                id="academic_certificate" name="academic_certificate" type="file" required
                                                placeholder="Your Current Address">
                                        </div>
                                    </div>

                                    <div class="text-center">
                                        <button
                                            class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                                            Submit
                                        </button>
                                    </div>

                                </div>
                            </div>

                        </div>
                </div>

                </form>
            </div>

        </div>
    </div>
    </div>
@endsection

@push('js')
    <script>
        function displayMarried(selector) {
            if ($("#civil_status").find(':selected').attr('value') == 'single') {
                $(selector).css('display', 'none');
            } else {
                $(selector).css('display', 'flex');
            }

        }

        function displayPayment() {
            $('#ref').css('display', 'none');
            $("#bank").css('display', 'none');
            $("#bankBranch").css('display', 'none');
            if ($("#payment_mode").find(':selected').attr('value') == 'Mobile Banking') {
                $('#ref').css('display', 'block');
            } else if ($("#payment_mode").find(':selected').attr('value') == 'Bank Deposit') {
                $("#bank").css('display', 'block');
                $("#bankBranch").css('display', 'flex');
            }

        }
    </script>
    <script>
        function changeAmount(selector) {
            if ($("#membership_category").find(':selected').attr('value') == 'Regular Member' && $("#amount_in").find(
                    ':selected').attr('value') == 'BDT') {
                $(selector).attr('disabled', true);
                $("#amount").attr('value', '500');
                $(selector).attr('value', '500');
            } else if ($("#membership_category").find(':selected').attr('value') == 'Regular Member' && $("#amount_in")
                .find(':selected').attr('value') == 'USD') {
                $(selector).attr('value', '20');
                $(selector).attr('disabled', true);
                $("#amount").attr('value', '20');
            } else if ($("#membership_category").find(':selected').attr('value') == 'Life Member' && $("#amount_in").find(
                    ':selected').attr('value') == 'BDT') {
                $(selector).attr('value', '3000');
                $(selector).attr('disabled', true);
                $("#amount").attr('value', '3000');
            } else if ($("#membership_category").find(':selected').attr('value') == 'Life Member' && $("#amount_in").find(
                    ':selected').attr('value') == 'USD') {
                $(selector).attr('value', '100');
                $(selector).attr('disabled', true);
                $("#amount").attr('value', '100');
            } else if ($("#membership_category").find(':selected').attr('value') == 'Grand Donor Member' && $("#amount_in")
                .find(':selected').attr('value') == 'BDT') {
                $(selector).attr('value', '100000');
                $(selector).attr('disabled', false);
                $("#amount").attr('value', '100000');
            } else if ($("#membership_category").find(':selected').attr('value') == 'Grand Donor Member' && $("#amount_in")
                .find(':selected').attr('value') == 'USD') {
                $(selector).attr('value', '15000');
                $(selector).attr('disabled', false);
                $("#amount").attr('value', '15000');
            } else if ($("#membership_category").find(':selected').attr('value') == 'Honorary Life Member' && $(
                    "#amount_in").find(':selected').attr('value') == 'BDT') {
                $(selector).attr('value', '');
                $(selector).attr('disabled', true);
                $("#amount").attr('value', '');
            } else if ($("#membership_category").find(':selected').attr('value') == 'Honorary Life Member' && $(
                    "#amount_in").find(':selected').attr('value') == 'USD') {
                $(selector).attr('value', '');
                $(selector).attr('disabled', true);
                $("#amount").attr('value', '');
            }

        }
    </script>
@endpush
