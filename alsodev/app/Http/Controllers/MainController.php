<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeedbackModel;
use Mail;

class MainController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function feedback_check(Request $request)
    {




        $valid = $request->validate([
            'email' => 'required|max:100',
            'user' => 'required|min:4|max:100',
            'message' => 'required|min:15|max:500'

        ]);


        $feedback = new FeedbackModel();
        $feedback->email = $request->input('email');
        $feedback->user = $request->input('user');
        $feedback->message = $request->input('message');

        $feedback->save();

        //$email = env('MAIL_SEND');
        //$sender = $feedback->email;


        Mail::send(
            'email',
            [
                'feedback'          => $feedback,

            ],


            function ($message) use ($request, $feedback) {
                $message->from('no-reply@gmail.com', 'no-reply');
                $message->to('tolmachinski@gmail.com')->subject('Feedback message');
            }
        );


        return redirect('/')->with('success', 'Your Message was sent!');
    }
}
