<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Contact;



class ContactController extends Controller
{
     public function index(Request $request)
    {
        $items = Contact::all();
        return view('index', ['items' => $items]);
    }
   
    public function find()
    {
        return view('find', ['input' => '']);
    }
    public function search(Request $request)
    {
        $item = Contact::where('name', $request->input)->first();
        $param = [
            'input' => $request->input,
            'item' => $item
        ];
        return view('find', $param);
    }
    public function confirm(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'gender'   =>'required',
            'email'    => 'required|email',
            'postcode' => 'required',
            'address'   => 'required',
            'building_name' => 'nullable',
            'opinion'  =>'required|max:120',
        ]);
        $inputs = $request->all();
        $request->session()->put($inputs);
        return view('/confirm', compact('inputs'));

    }
    public function create(Request $request)
    {
        $this->validate($request, Contact::$rules);
        $form = $request->all();
        unset($form['_token_']);
        Contact::create($form);
        
    }
    
    public function thanks(Request $request)
    {
        
        return view('/thanks');
    }

   
}
