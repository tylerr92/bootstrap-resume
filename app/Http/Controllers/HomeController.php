<?php

namespace App\Http\Controllers;

use App\Home;
use App\Mail\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class HomeController extends Controller
{
  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function index()
  {
    return view('resume');
  }

  /**
  * Display a listing of the resource.
  *
  * @return \Illuminate\Http\Response
  */
  public function sendMail(Request $request)
  {
    $contact = $request;
    return new \App\Mail\ContactForm($contact);

    // Mail::to($request->emailAddress)
    // ->bcc('tylerradlick@gmail.com')
    // ->send(new ContactForm($contact));
    //
    // return redirect()->route('home.index');
  }
}
