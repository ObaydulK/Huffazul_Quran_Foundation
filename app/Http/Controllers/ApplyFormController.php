<?php

namespace App\Http\Controllers;
 

use App\Models\Peoplelist;
use Illuminate\Http\Request;

class ApplyFormController extends Controller
{

    public function create()
    {
        return view('createform');
        
    }

    public function contact(){
        $peoplelists = Peoplelist::get();
        return view('Contact', compact('peoplelists'));
    }
    public function store(Request $request)
    {
        Peoplelist::create($request->all());
        return redirect("/");
    }


    public function show()
    {

    }


    public function edit($id)
    {
        // $peoplelists = Peoplelist::find($id);


    }

    public function update()
    {
 

    }

    public function destroy($id)
    {
        $peoples = Peoplelist::find($id);
        $peoples->delete();
        return redirect('/');

    }

}
