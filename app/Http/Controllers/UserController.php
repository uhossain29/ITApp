<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Department;
use App\Models\Designation;
use Auth;
use Intervention\Image\ImageManager;
use Image;
use Carbon\Carbon;
use Hash;
class UserController extends Controller
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

        return view('dashboard/administrative/index',[

            'data' => User::orderBy('id', 'desc')->get(),
            'departments' => Department::all(),

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
        $request->validate([
            'email'=>'required|unique:users,email',
        ]);
         User::create([
            'name' =>$request->name,
            'email' =>$request->email,
            'password' =>Hash::make($request->password),
            'role' =>$request->role,
            'department_id' =>$request->department_id,
            'created_at'=>Carbon::now()
        ]);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show(string $user_id)
    {
        return view('dashboard/administrative/show',[

            'user' => User::find($user_id),
            'departments' => Department::all(),

     ]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {



    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Teacher $teacher)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::find($id)->delete();
return back()->with('delete_status',' User Profile Delete success');
    }
}
