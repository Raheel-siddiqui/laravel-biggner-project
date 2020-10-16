<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Customer;

class CustomerController extends Controller
{
    public function index(){


        $customer = Customer::all();

        return view('customer.index')->with('customers' , $customer);
    }

    public function create(){

        $customer = new Customer();
        return view('customer.create', compact('customer'));
    }
    public function store(){

        // $data = request()->validate([

        //     'name'=>'required',
        //     'email'=>'required|email'
        // ]);

      $customer = Customer::create($this->formvalidate());
        return redirect('/customers/'.$customer->id);
    }

    public function show($customerid){

        

        $customer = Customer::findorfail($customerid);

        return view('customer.show', compact('customer'));

    }

    public function edit(Customer $customer){

        

        return view('customer.edit', compact('customer'));
    }

    public function update(Customer $customer){

        // $data = request()->validate([

        //     'name'=> 'required',
        //     'email'=> 'required|email'
        // ]);

        $customer->update($this->formvalidate());
        // $customer = Customer::Update($data);

        return redirect('/customers');


    }

    public function destroy(Customer $customer){


        $customer->delete();
        return redirect('/customers');
    }

    protected function formvalidate(){

        return request()->validate([

            'name'=> 'required',
            'email'=> 'required|email'
        ]);
    }
}
