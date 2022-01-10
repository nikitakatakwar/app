<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\user;
use App\Models\course;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Stroage;
use Illuminate\Support\Facades\DB;


class HomeController extends Controller
{
    public function index()

    {
      $role=Auth::user()->role;
      if($role=='1')
      {
        $student = user::paginate(5);
        return view('admin',['users'=>$student]);
     
      }  
      if($role=='2')
      {
        $data= course::all();
       return view('teacher',['data'=> $data]);
      }
      else
      {
        return view('dashboard');
      }
    }

    public function create(Request $req)
    {
      $validated = $req->validate([
        'name' => 'required',
        'email' => 'required',
        'password' => 'min:8',
        'Confirm-Password' => 'required_with:password|same:password|min:8'
       
    ]);
     
    $teacher = new user();
    $teacher->name=$req->name;
    $teacher->email=$req->email;
    $teacher->password=Hash::make($req->password);
    $teacher->role="2";
     $res=  $teacher->save();
     if( $res)
     {
      return view('add-teacher');
     }
     else
     {
      return "data not added";
     }

    }

    
    public function show($id) {
      $data = user::find($id);
      return view('editStudent',['data'=>$data]);
     }

      public function update(Request $req)
    { 
      $member=user::find($req->id);
      $member->name=$req->name;
      $member->email=$req->email;
      $req->session()->flash('successMsg','Saved succesfully!'); 
    
       $res= $member->save();
       if( $res)
       {
       
        return view('admin',['data'=> $member]);
       }
       else
       {
        return ["result"=>"data is not updated"];
       }
     
    }

    public function delete($id)
    {
        $student = user::find($id);
        $student->delete();
        return redirect()->back()->with('status','Student Deleted Successfully');
    }
    public function upload(Request $req)
    {
      $validated = $req->validate([
        'name' => 'required',
        'description' => 'required',
        'file' =>  'required',
      ]);
    
      $data=new course();
      $file=$req->file;
      $filename=time().'.' .$file->getClientOriginalExtension();
      $req->file->move('assets',$filename);
      $data->file=$filename;
      $data->name=$req->name;
      $data->description=$req->description;
      $data->save();
      return redirect()->back()->with('status','course added Successfully');
    }

    public function uploadpage()
    {
    
      return view('courses');
    }

  

    public function showcourse(){
     
      $data= course::all();;
      return view('user',['data'=> $data]);

      }
      // for downloading data //
    public function download(Request $request,$file)
    {
       
       
  
      return response()->download(public_path('assets/'.$file));
    }

    public function view($id)
    {
        $data=course::find($id);
        return view('viewproduct',compact('data'));
    }


}
