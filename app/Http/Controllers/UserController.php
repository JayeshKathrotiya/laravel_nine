<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class UserController extends Controller
{
    public function uploadAvatar(Request $request)
    {
        if($request->hasFile('image')){
           User::uploadAvatar($request->image);
        //    $request->session()->flash('message','Image Uploaded!');
           return redirect()->back()->with('message', 'Image Uploaded!'); // success message
        }
        // $request->session()->flash('error','Image Upload Failed!');
        return redirect()->back()->with('error', 'Image Upload Failed!'); // error message
    }


    public function index()
    {
        $data = [
            'name' => 'Elon',
            'email' => 'elon@bytefum.com',
            'password' => 'password',
        ];
        // User::create($data);

        // $user = new User();
        // $user->name = 'Jayesh King';
        // $user->email = 'jayesh.bytefum@gmail.com';
        // $user->password = bcrypt('password');
        // $user->save();

        // User::where('id', 4)->delete();

        // User::where('id', 5)->update(['name' => 'Jayesh']);

        $user = User::all();
        return $user;


        // dd($user);
        // DB::insert('insert into users (name, email, password) values (?, ?, ?)', ['jayesh', 'jayesh.bytefum@gmail.com', '123456']);

        // DB::update('update users set name = ? where id = ?', ['jayesh kathrotiya', 1]);

        // DB::delete('delete from users where id = ?', [1]);

        // $users = DB::select('select * from users');
        // return $users;

        return view('home');
    }
}
