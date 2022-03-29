<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Member;

class MemberController extends Controller
{
    
    // function show()
    //{
        //data fetch from database use:
       //$data= Member::all();

       //pagination
       //$data= Member::paginate(3);
       //return view('list',['members'=>$data]);
        //return view('list');
    //}

    //for Save data in database we use this code 
    //function addData(Request $req)
     //{

     // $member =new Member;
      //$member->name=$req->name;
      //$member->email=$req->email;
      //$member->address=$req->address;
      //$member->save(); 
      //return redirect('add');
     //}
     function list()
     {
        $data=Member::all();
        return view ('list',['members'=>$data]);
     }
     function delete($id)
     {
        $data=Member::find($id);
        $data->delete();
        return redirect('list');
     }


}





