<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServiceController extends Controller
{
    public function index(){

        $services = \App\Service::all();

        // return view('subview/services')->with('service' , $services);
        return view('service.index', compact('services'));
    }

    public function store(){


        $data = request()->validate([

            'name'=> 'required|min:3|max:10',
        ]);
        \App\service::create($data);

        // $service = new \App\Service();
        // $service->name = request('name');
        // $service->save();

        return redirect()->back();
    }
}
