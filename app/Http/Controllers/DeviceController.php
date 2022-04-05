<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Device;

class DeviceController extends Controller
{
    //
   //function index(Device $key)
   //{
      //return $key;

   //}
   //for API GET
    //function list()
   //{
      //return Device::all();
   //}

   // FOR POST Method
   function add(Request $req)

   {

       $device=new Device;
       $device->name=$req->name;
       $device->employee_id=$req->employee_id;
       $result=$device->save();

       if($result)
       {
        return [" Result"=>"Data has been Saved"];
       }
      else
      {
         return [" Result"=>"Operation Failed"];
      }
       
   }

   //put Method 

   function update(Request $req)
   {
      $device=Device::find($req->id);
      $device->name=$req->name;
      $device->employee_id=$req->employee_id;
      $result=$device->save();
      if($result)
      {
       return [" Result"=>"Data has been Updated"];
      }
     else
     {
        return [" Result"=>"Update Operation Faild"];
     }


   }

   function delete($id)
   {
       $device=Device::find($id);
       $result=$device->delete();

       if($result)
       {
         return [" Result"=>"Record has been deleted"];
       }

       else
       {
         return [" Result"=>"Delete Operation failed"];

       }

      

   }

   function search($name)
   {
       //search by full name
       //return Device::where("name",$name)->get();

       //search for Charecter Base
       return Device::where("name","like", "%".$name. "%")->get();
     
   }





}
