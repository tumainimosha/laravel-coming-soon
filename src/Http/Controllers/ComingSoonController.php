<?php

namespace snw\ComingSoon\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Mail;
use snw\ComingSoon\Mail\ComingSoonMailable;
use snw\ComingSoon\Models\ComingSoon;

class ComingSoonController extends Controller
{
    public function index()
    {
        return view('comingsoon::comingsoon');
    }

    public function send(Request $request)
    {
        Mail::to(config('comingsoon.snw_send_email_to'))->send(new ComingSoonMailable($request->email));
        ComingSoon::create($request->all());

        return redirect('/');
    }
}
