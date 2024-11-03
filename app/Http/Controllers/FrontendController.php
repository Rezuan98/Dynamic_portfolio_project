<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Message;

class FrontendController extends Controller
{
    // methodes for store message

 public function storeMessage(Request $request){

       // $validate = $request->validate([
   
       //     'name' => 'required',
       //     'email' => 'required|email',
       //     'phone' => 'required|phone',
       //     'subject' => 'required',
       //     'message' => 'required',
   
       // ]);
   
       Message::insert([
   
         'name' => $request->name,
         'email' => $request->email,
         'phone' => $request->phone,
         'subject' => $request->subject,
         'message' => $request->message,
       ]);
         
       $notification = array(
           'message' => 'Message Sent,We will Contact with you!',
            'alert-type' => 'info');
       return redirect()->back()->with($notification);
    }
}
