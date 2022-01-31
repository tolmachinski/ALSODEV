<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\FeedbackModel;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $reviews = new FeedbackModel();
        return view('home', ['reviews' => $reviews->all()]);
    }

    public function edit(int $id)
    {
        $new = FeedbackModel::findOrFail($id);
        $news = FeedbackModel::get();
         
        
        return view('edit', compact(['new'])); 
    }

    public function edit_new(Request $request, int $id)
    {
        $new = FeedbackModel::findOrFail($id);

        $valid = $request->validate([
            'email' => 'required',
            'message' => 'required',
            'user' => 'required',
        ]); 
        
        $new->email = $request->input('email');
        $new->message = $request->input('message');
        $new->user = $request->input('user');
        
        $new->update();
        
        return redirect('/home')->with('success', 'Your Message was Updated!');
    }

    public function delete(int $id)
    {
        $new = FeedbackModel::findOrFail($id);
        $new->delete();

        return redirect('/home')->with('success', 'Your Message was deleted!');
    }

}
