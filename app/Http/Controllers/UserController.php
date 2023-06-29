<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use PDO;

class UserController extends Controller
{
    public function login(Request $request)
    {
        $name = $request->input('user_name_email');
        $password = $request->input('password');
        //db request
        $table =array();
        //vars_test
        $name_test = User::where('name', $name)
            ->first();
        $email_test = User::where('email', $name)
            ->first();
        
        $user_test='false';
        $password_test= 'false';

        //IF name
        if ($name_test) {
            $table = $name_test->toArray();
            $user_test='true';
            // password true
            if ($name_test->password === $password) {
                $password_test='true';
            }
        }
        //IF email
        else if ($email_test) {
            $table = $email_test->toArray();
            $user_test='true';
            // password true
            if ($email_test->password === $password) {
                $password_test='true';
            }
        }
        if($password_test=='true'){
            return redirect()->route('user.index')->with('user_data',$table);
        }
        else{
            $errors=['user_test'=>$user_test,'password_test'=>$password_test];
            return redirect()->route('login')->with('user_data',$errors);
        }
    }
    public function index()
    {
        $table = session('user_data');
        session([
            'user_id'=>$table['id'],
            'user_name'=>$table['name'],
            'user_path'=>$table['path_avatar'],
            'user_side_pict'=>$table['side_pict'],
        ]);
        return redirect()->route('themes.index');
    }
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        echo 'stored';
    }
    public function show()
    {
        echo 'show';
    }

    public function edit()
    {
        echo 'edite';
    }

    public function update(Request $request)
    {

    }

    public function destroy()
    {
        // Handle the deletion of the user with the given $id
        // Example: $user = User::find($id); $user->delete();

        return redirect()->route('users.index')->with('success', 'User deleted successfully.');
    }
}

