<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;
use App\Http\Requests\SendEmailRequest;

class ContactController extends BaseController
{

    public function index()
    {
        return view('contact');
    }
    
    public function sendEmail(SendEmailRequest $request){
        $subject = 'subject';
        $message = view('mail', ['data' => $request->all()])->render();
        $headers = 'mail';
        $success = mail('embassyukr001@gmail.com', $subject, $message, $headers);

        return redirect()->route('contact', ['#description'])->with('message', 'Success!');
    }

}
