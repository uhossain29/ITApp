<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Department;


use Auth;
use Carbon\Carbon;
use Hash;
class DepartmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('AdminRole');
    }
    
    public function index()
    {

        return view('dashboard/department/index',[

  
        'data' => Department::orderBy('id', 'desc')->get(),

 ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate( [

      'department_name' => 'required',

    ]);
  Department::insertGetId([

  'department_name'=>$request->department_name,

  'created_at'=>Carbon::now()
  ] ); return back();
    }


    /**
     * Display the specified resource.
     */
    public function show(string $department_id)
    {
        return view('dashboard\department\show',[
            'departments' => Department::find($department_id),


          ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Department $department_id)
    {
        Department::find($request->department_id)->update([
           
            'department_name'=>$request->department_name,

          ]);
          return back()->with('edit_status',' Department Edit success');

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
