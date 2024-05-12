<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Footer;
use App\Models\Student;
use App\Models\Programe;
use Intervention\Image\ImageManager;
use Illuminate\Support\Facades\Request as Input;
use Image;
use Auth;
use Session;
use Carbon\Carbon;
use Hash;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\StudentImport;
use App\Exports\StudentExport;
class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function __construct()
    {
        $this->middleware('auth');
        $this->middleware('EditorRole');
    }
    public function index()
    {
        $data = Student::where('std_certificate_issue', 'Issued')->orderBy('id', 'desc')->get();
        return view('dashboard/student/index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
       
        return view('dashboard/student/add_student',[
            'programe' => Programe::all(),
        ]);
    }

    public function issue()
    {
        $data = Student::where('std_certificate_issue', 'Not Issued')->orderBy('id', 'desc')->get();
        return view('dashboard/student/issue_certificate',['data'=>$data,]);

    }
    
    public function issued(Request $request, Student $student_id)
    {    
    Student::find($request->student_id)->update([
      'std_certificate_issue'=>$request->std_certificate_issue,
        ]);
    return redirect('/student')->with('edit_status',' Certificate Issued');
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {$request->validate([
        'std_id'=>'required|unique:students,std_id',
        'std_certificate_no'=>'required|unique:students,std_certificate_no',

        'std_name'=>'required',

    ]);


    if (Student::where('std_id', '=', Input::get('std_id'))->exists()) {
      
        return back()->with('exist','Student Already in Database');

     }
     else{


        $faculty_id=Student::insertGetId([
            'std_name'=>$request->std_name,
            'std_fname'=>$request->std_fname,
            'std_mname'=>$request->std_mname,
            'std_dob'=>$request->std_dob,
            'std_nid'=>$request->std_nid,
            'std_phone'=>$request->std_phone,
            'std_email'=>$request->std_email,
            'std_program'=>$request->std_program,
            'std_id'=>$request->std_id,
            'std_batch'=>$request->std_batch,
            'std_cgpa'=>$request->std_cgpa,
            'std_tcredit'=>$request->std_tcredit,
            'std_lsemester'=>$request->std_lsemester,
            'std_certificate_no'=>$request->std_certificate_no,
            'std_certificate_issue'=>$request->std_certificate_issue,
            'std_publication_date'=>$request->std_publication_date,
          
          
            'created_at'=>Carbon::now()
            ] );
            
            // if ($request->hasFile('std_photo')) {
            //     echo "$faculty_id";
            //   // if (Auth::user()->profile_photo !='default.jpg') {
            //   // $old_photo_location = 'public/assets/img/users/'.Auth::user()->profile_photo;
            //   // unlink(base_path($old_photo_location ));
            //   $uploaded_photo = $request->file('std_photo');
            //   $new_photo_name = $faculty_id.'.'.$uploaded_photo->getClientOriginalExtension();
            //    $new_photo_location='public/assets/images/student_photo/'.$new_photo_name ;
            //   Image::make($uploaded_photo)->resize(1400,600)->save(base_path($new_photo_location));
            //   Student::find($faculty_id)->update([
            //     'std_photo'=>$new_photo_name
            //   ]);
            //   return redirect('/student')->with('status', 'Profile Insert Success!');  
            // }
            return redirect('/issue')->with('status', 'Profile Insert Success!');  


     }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $student_id)
    {
        return view('dashboard.student.show',[
            
            'students'=> Student::find($student_id),
            'programe' => Programe::all(),

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
    public function update(Request $request, Student $student_id)
    {
        Student::find($request->student_id)->update([
            'std_name'=>$request->std_name,
            'std_fname'=>$request->std_fname,
            'std_mname'=>$request->std_mname,
            'std_dob'=>$request->std_dob,
            'std_nid'=>$request->std_nid,
            'std_phone'=>$request->std_phone,
            'std_email'=>$request->std_email,
            'std_program'=>$request->std_program,
            'std_id'=>$request->std_id,
            'std_batch'=>$request->std_batch,
            'std_cgpa'=>$request->std_cgpa,
            'std_tcredit'=>$request->std_tcredit,
            'std_lsemester'=>$request->std_lsemester,
            'std_certificate_no'=>$request->std_certificate_no,
            'std_certificate_issue'=>$request->std_certificate_issue,
            'std_publication_date'=>$request->std_publication_date,
          ]);
          return back()->with('edit_status',' Student Edit success');

    }
    // public function update(Request $request, Student $student_id)
    // {
    //     $student_id->update($request->except('_token','_method','std_photo'));
    //     if ($request->hasFile('std_photo')) {
    //         if (Student::findOrFail($student_id->id)->std_photo !='default.png') {
    //         $old_photo_location = 'public/assets/images/student_photo/'.Student::findOrFail($student_id->id)->std_photo;
    //         unlink(base_path($old_photo_location));
    //         }
    //         $uploaded_photo = $request->file('std_photo');
    //         $new_photo_name = $student_id->id.'.'.$uploaded_photo->getClientOriginalExtension();
    //         $new_photo_location='public/assets/images/student_photo/'.$new_photo_name ;
    //         Image::make($uploaded_photo)->save(base_path($new_photo_location));
    //         Student::find($student_id->id)->update([ 'std_photo'=>$new_photo_name]);  
    //   }
    //   return back()->with('edit_status',' event Profile Update Success');
    // }
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Student::find($id)->delete();
        return back()->with('delete_status',' Student Profile  Delete success');
    }
    
//     public function restorecategory($deleted_category_id)
//   {
// Category::withTrashed()->find($deleted_category_id)->restore();
// return back();

//   }
//   public function forcedeletecategory($deleted_category_id)
//   {
// Category::withTrashed()->find($deleted_category_id)->forceDelete();
// return back();

//   }

    public function import(Request $request){
        Excel::import(new StudentImport, $request->file('file')->store('files'));
        return redirect()->back();
    }

    public function exportUsers(Request $request){
        return Excel::download(new StudentExport, 'student.xlsx');
    }

//     public function search(Request $request){
//         // $query2 = $request->input('query2');
//        if( !empty ($query = $request->input('query'))){
//         if( !empty ($query2 = $request->input('query2'))){
//             if(Student::where('std_id', $query)->first()){
//                 if(Student::where('std_dob', $query2)->first()){
//              $searched_items = Student::where('std_id', 'like' , "%$query%")
//              ->Where('std_dob', 'like', "%$query2%")
//              ->orderBy('std_id', 'desc')
//             ->get();
//             if (!$searched_items || !$searched_items->count()) {
//                 Session::flash('no-results', 'Your search ID or Birth Date Not Match');
//             }
//     return view('frontend/search_result', compact('searched_items'));
 
//                 }

//                 else{
//                     return back()->with('not_found','DoB Not Found');
//                             }     
                
//    }

//  else{
//     return back()->with('not_found','ID Not Found');
//             }
        
//         }    
//         else{
//             return back()->with('add_status','Empty DoB field');
//         }
//         }

//         else{
//             return back()->with('add_status','Empty ID field');
//         }
//      }
}
