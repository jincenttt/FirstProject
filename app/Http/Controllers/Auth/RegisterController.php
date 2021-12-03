<?php

namespace App\Http\Controllers\Auth;

use App\Models\Booking;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class RegisterController extends Controller
{
    public function booking(){
        return view('auth.booking');
    }

public function store(REQUEST $request){
$this->validate($request, [
    // customer information
    'surname' =>'required|max:255',
        'firstname' =>'required|max:255',
       'middlename' =>'required|max:255',
      'bday' =>'required|max:255',
      'age' =>'required|max:100',
      // customer address
      'streetname' =>'required|max:255',
      'city' =>'required|max:255',
      'postal' =>'required|max:100',
      //customer contact
      'phonenumber' =>'required|max:11',
      'mobilenumber' =>'required|max:11',
      'email' =>'required|email|max:255',
      // emergency contact
      'fullname' =>'required|max:255',
      'emergencynumber' =>'required|max:255',
      'relationship' =>'required|max:255',
]);

       Booking::create([
        'surname'=>$request->surname,
        'firstname'=>$request->firstname,
        'middlename'=>$request->middlename,
        'bday'=>$request->bday,
        'age'=>$request->age,

        'streetname'=>$request->streetname,
        'city'=>$request->city,
        'postal'=>$request->postal,

        'phonenumber' =>$request->phonenumber,
        'mobilenumber' =>$request->mobilenumber,
        'email' =>$request->email,

        'fullname' =>$request->fullname,
        'emergencynumber' =>$request->emergencynumber,
        'relationship' =>$request->relationship,


]);

    return redirect('records');
}


public function records(){
    $records = Booking::all();
    return view ('pages.records',[
        'records' => $records
    ]);
}


}
