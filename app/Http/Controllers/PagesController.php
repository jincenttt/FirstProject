<?php

namespace App\Http\Controllers;

use App\Models\Booking;
use Illuminate\Http\Request;

use function GuzzleHttp\Promise\all;

class PagesController extends Controller
{

        public function home(){
            return view ('pages.home');
        }

        public function posts(){
        return view ('pages.index');
        }

        public function records(){
        return view ('pages.records');
        }

        public function view(request $request){

            $id = Booking::find($request->id);
            return view('pages.view',compact('id'));
            }

            public function show(request $request){

        $id = Booking::find($request->id);
        return view('pages.update',compact('id'));
        }

        public function update(request $request){

        $data = Booking::find($request->id);

        $data->surname=$request->surname;
        $data->firstname=$request->firstname;
        $data->middlename=$request->middlename;
        $data->age=$request->age;
        $data->bday=$request->bday;
        $data->streetname=$request->streetname;
        $data->city=$request->city;
        $data->postal=$request->postal;
        $data->phonenumber=$request->phonenumber;
        $data->mobilenumber=$request->mobilenumber;
        $data->email=$request->email;
        $data->fullname=$request->fullname;
        $data->emergencynumber=$request->emergencynumber;
        $data->relationship=$request->relationship;
        $data->save();

            return redirect()->route('viewrecords');
            }

        public function delete($id){
            $data = Booking::find($id);
            $data->delete();
            return redirect ('records');
        }

}


