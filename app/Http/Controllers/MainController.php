<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\reservations_model;
use App\rooms_model;
use Session;
use Validator;

class MainController extends Controller
{
    function rooms(){
        $rooms=rooms_model::all();
        return view('rooms',compact('rooms'));
    }

    function we(){
        return view('about-us');
    }

    function contacts(){
        return view('contact');
    }

    function fortwo(){
        $room=rooms_model::where('name','2')->get();
        return view('two',compact('room'));
    }

    function forthree(){
        $room=rooms_model::where('name','3')->get();
        return view('three',compact('room'));
    }

    function forfour(){
        $room=rooms_model::where('name','4')->get();
        return view('four',compact('room'));
    }

    function forfive(){
        $room=rooms_model::where('name','5')->get();
        return view('five',compact('room'));
    }

    function reservation(Request $form){
        // dd(date('d/m/Y', strtotime($form->checkin)));
    	// $form->validate([
    	// 	'name'=>'required|min:2',
    	// 	'phone'=>"required|numeric",
    	// 	'checkin'=>'required',
    	// 	'days'=>'required|numeric',
    	// ]);

        if($form->rooms=='fortwo'){
            $room_id=2;
        }

        else if($form->rooms='forthree'){
            $room_id=3;
        }

        else if($form->rooms='forfour'){
            $room_id=4;
        }

        else if($form->rooms='forfive'){
            $room_id=5;
        }
        $reservation_date=date('d/m/Y', strtotime($form->checkin));
        $reservation_data = str_replace("/","-",$reservation_date);
        $addedDate=date("d/m/y", strtotime(date('d-m-Y', strtotime(" + $form->days days", strtotime($reservation_data)))));
        dd($reservation_date);
    	$reservation=new reservations_model;
    	$reservation->name=$form->name;
    	$reservation->phone=$form->phone;
    	$reservation->room_id=$room_id;
        $reservation->reservation_date=$form->checkin;
        $reservation->days=$form->days;
        $reservation->save();
        rooms_model::where('name',$room_id)->update(['reservation_date'=>$form->checkin,'reserved'=>1]);
        return redirect()->back();
    }
}
