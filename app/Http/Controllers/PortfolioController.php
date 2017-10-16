<?php

namespace App\Http\Controllers;

use App\Mail\ContactInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class PortfolioController extends Controller {

  function contact() {
  	return view('pages.contact');
  }

  function saveContactForm(Request $request) {

    $this->validate($request, [
      'name'      => 'bail|required|string',
      'email'     => 'bail|required|email',
      'telephone' => 'bail|required|string',
      'website'   => 'nullable|url',
      'details'   => 'required'
    ]);

    // The contact info is valid, store in database and send email

    $data = array(
      'name'       => $request->input('name'),
      'email'      => $request->input('email'),
      'telephone'  => $request->input('telephone'),
      'website'    => $request->input('website'),
      'details'    => $request->input('details')
    );

    $sent = Mail::to('aaron.frey@gmail.com')->send(new ContactInformation($data));

    // Redirect back to form if there are errors
    return back()->withInput();
  }

  function home() {
  	return view('pages.home');
  }

  function plugins() {
  	return view('pages.plugins');
  }

  function resume() {
  	return view('pages.resume');
  }
}
