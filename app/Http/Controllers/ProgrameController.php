<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Programe;
use App\Models\Department;
use Auth;
use Carbon\Carbon;
use Hash;
class ProgrameController extends Controller
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

        return view('dashboard/programe/index',[

            'programes'=> Programe::all(),
             'data' => Department::all(),

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
        Programe::insertGetId([

            'department_id'=>$request->department_id,
            'programe_name'=>$request->programe_name,
          
            'created_at'=>Carbon::now()
            ] ); return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
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
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
