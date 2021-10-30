<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
         $employee = Employee::all();
        return view('index', compact('employee'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
       return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $storeData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'employeeid' => 'required|max:255',
            'age' => 'required|max:255',
            'gender' => 'required|max:255',
            'mobile' => 'required|max:255',
            'address' => 'required|max:255',
            'state' => 'required|max:255',
            'joiningdate' => 'required|max:255',
            'adharno' => 'required|max:255',
            
        ]);
        $employee = Employee::create($storeData);

        return redirect('/employees')->with('completed', 'Employee has been saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function show(Employee $employee)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
         $employee = Employee::findOrFail($id);
        return view('edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
         $updateData = $request->validate([
            'name' => 'required|max:255',
            'email' => 'required|max:255',
            'employeeid' => 'required|max:255',
            'age' => 'required|max:255',
            'gender' => 'required|max:255',
            'mobile' => 'required|max:255',
            'address' => 'required|max:255',
            'state' => 'required|max:255',
            'joiningdate' => 'required|max:255',
            'adharno' => 'required|max:255',
        ]);
        Employee::whereId($id)->update($updateData);
        return redirect('/employees')->with('completed', 'Employee has been updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Employee  $employee
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
           $employee = Employee::findOrFail($id);
        $employee->delete();

        return redirect('/employees')->with('completed', 'Employee has been deleted');
    }
}
