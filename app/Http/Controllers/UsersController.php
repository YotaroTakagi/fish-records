<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;
use App\Record;

class UsersController extends Controller
{
    public function index() 
    {
        
        //$users = User::first();
        //$records = Record::first();
        
        return view("users.index");
    }
    
    public function showEditForm() {
         
         $users = User::first();
         
         return view("users.editer", [
             "users" => $users,
             ]);
    }
    
    public function edit(Request $request) {
        $users = User::first();
        
        $users->nickname = $request->nickname;
        $users->save();
        
        $file_name = $request->file('avatar')->getClientOriginalName();
        $request->file("avatar")->storeAs("/public/avatar", $file_name);
        
        $users->avatar = $file_name;
        $users->save();
        
        return redirect("/");
        
    }
    
    public function delete()
        {
        $users = User::first();
        $users->delete();
        
        return redirect("/");
    }
    
    public function fileUpload(Request $request)
    {
        //if文でファイルがあるか確認
        
        $file_name = $request->file('avatar')->getClientOriginalName();
        $request->file("avatar")->storeAs("/public/avatar", $file_name);
        
        $users = User::first();
        $users->avatar = $file_name;
        $users->save();
        
        return redirect("/");
        
    }
    
    public function filePost(Request $request)
    {
    
        $record = new Record;
        
        $record->content = $request->content;
        $record->length = $request->length;
        $record->timefix = $request->timefix;
        
        $record->save();
        
        return back();
    }
    
    public function fileIndex()
    {
        $recordsTime = Record::orderBy("created_at", "desc")->paginate(5);
        $recordsLength = Record::orderBy("length", "desc")->paginate(5);
        
        return view("commons.filepost", ["recordsTime"=>$recordsTime, "recordsLength"=>$recordsLength]);
    }
    
    public function destroy($id)
    {
        $record = Record::find($id);
        //dd($record);
        $record->delete();
        
        return back();
    }
    
    public function fishPicture(Request $request, $id)
    {
        //if文でファイルがあるか確認
        
        $file_name = $request->file('fish_picture')->getClientOriginalName();
        $request->file("fish_picture")->storeAs("/public/fish_picture", $file_name);
        
        $records = Record::find($id);
        $records->fish_picture = $file_name;
        $records->save();
        
        return back();
        
    }
  
    
}