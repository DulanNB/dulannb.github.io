<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request){
        {
//        $this->validate($request,[
//            'name'=>'string|required|min:2',
//            'email'=>'email|required',
//            'message'=>'required|min:20|max:200',
//            'subject'=>'string|required',
//            'phone'=>'numeric|required'
//        ]);
            // return $request->all();

            //$message=Message::create($request->all());
            // return $message;
            $data = array();
            $data['contactName'] = $request->name;
            $data['contactEmail'] = $request->email;
            $data['contactMessage'] = $request->message;
            $data['contactSubject'] = $request->subject;
            $data['Title'] = "New customer feedback";


//        event(new MessageSent($data));
//        exit();
            try {
                Mail::send('email_layout.contact-us', $data, function ($message) {
                    // $to_name=$this->name;
                    $to_email = 'dultude@gmail.com';
                    $message->to($to_email)->subject
                    ('dulan.com Contact Me');
                });
                return response()->json(['success' => true]);

            } catch (\Throwable $th) {
                $msg = 'error';

                echo $msg;
            }

        }
    }
}
