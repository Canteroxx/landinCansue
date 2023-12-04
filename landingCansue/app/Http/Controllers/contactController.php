<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact(Request $request){
		$contacto = new Contact();
		$contacto->username = $request->post('username');
		$contacto->email = $request->post('email');
		$contacto->comment = $request->post('comment');

		$contacto->save();

		return redirect()->route("pages.contact");
	}
}
