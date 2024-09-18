<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index(){
        $contacts=Contact::all();
        return view('contact.Afficher',compact('contacts'));
    }
    public function create(){
        return view('contact.Ajout');
    }
    public function store(Request $request){

        Contact::create($request->all());
        return redirect('contact/affiche');
    }
}
