<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customar;

class CustomerController extends Controller
{
    public function customer() {
        return view('customer');
    }

    public function customerReg(Request $request) {
        request()->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required',
            'confirm_password' => 'required|same:password',
            'country' => 'required',
            'state' => 'required',
            'address' => 'required',
            'dob' => 'required',
            'gender' => 'required'
        ]);

        $customerData = new Customar;
        $customerData-> name = $request['name'];
        $customerData-> email = $request['email'];
        $customerData-> gender = $request['gender'];
        $customerData-> address = $request['address'];
        $customerData-> state = $request['state'];
        $customerData-> country = $request['country'];
        $customerData-> dob = $request['dob'];
        $customerData-> password = md5($request['password']);
        $customerData-> save();

    }

    public function view()
    {

    }
}
