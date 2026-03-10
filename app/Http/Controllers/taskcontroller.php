<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class taskcontroller extends Controller
{
    //
    public function mont(Request $request){
      $v= $request->validate(['title'=>'required|string|max:90',
      'descriptio'=>'nullable|string',
      'age'=>'required|integer']);
      Task::create ($v);
    
}
public function index(){

$re=Task::all();
return  response()->json($re);

}
 public function mise(Request $request,$id){
    $x=Task::findOrFail($id);
    $x->update($request->all());
    return  response()->json($x);
}
public function index1($id)
{
   $x= Task::findOrfail($id);
   return  response()->json($x);

}
public function sup($id)
{
   $x =Task::findOrfail($id);
   $x->delete();
     return  response()->json(null);

}
}