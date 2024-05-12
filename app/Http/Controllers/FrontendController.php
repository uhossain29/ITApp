<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Student;
use Session;


class FrontendController extends Controller
{
    public function index(){

        return view('frontend/index');

    }  
    // public function search(Request $request)
    // {
    //     $search = $request->input('search');
    //     $results = Product::where('name', 'like', "%$search%")->get();
    
    //     return view('products.index', ['results' => $results]);
    // }
       public function search(Request $request){
       if( !empty ($query = $request->input('query'))){
        if( !empty ($query2 = $request->input('query2'))){
            if(Student::where('std_id', $query)->first()){
                if(Student::where('std_certificate_no', $query2)->first()){
             $searched_items = Student::where('std_id', 'like' , "%$query%")
             ->Where('std_certificate_no', 'like', "%$query2%")
             ->orderBy('std_id', 'desc')
            ->get();
            if (!$searched_items || !$searched_items->count()) {
                Session::flash('no-results', 'Your search ID or Certificate SL No. Not Match');
            }
            return view('frontend/search_result', compact('searched_items'));
            }
                else{
                    return back()->with('not_found','Certificate SL No. Not Found');
                    }      
            }
                else{
                    return back()->with('not_found','ID Not Found');
                     }
            }    
                else{
                     return back()->with('add_status','Empty Certificate SL No. field');
                     }
            }
                 else{
                    return back()->with('add_status','Empty ID field');
                    }
            }
}