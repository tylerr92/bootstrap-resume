<?php

namespace App\Http\Controllers;

use App\Home;
use App\Mail\ContactForm;
use App\Http\Requests\ContactFormSubmission;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Response;

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
  public function sendMail(ContactFormSubmission $request)
  {
    // Grab only validated data
    $contact = $request->validated();

    // Send thank you response to requestor
    Mail::to($contact['emailAddress'])
    ->send(new ContactForm($contact));

    // Send lead to resume owner
    // Mail::to($request->emailAddress)
    // ->send(new ContactForm($contact));

    // Return with success toast to notify user the email was sent
    toast('Thank You. Your message has been.','success','top-right');

    // Redirect back to the index as the request is finished
    return redirect()->route('home.index');
  }
}
