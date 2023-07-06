<?php
namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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
        $user_name='user';

        //IF name
        if ($name_test) {
            $table = $name_test->toArray();
            $user_test='true';
            $user_name=$name_test->name;
            // password true
            if (Hash::check($password, $name_test->password)) {
                $password_test='true';
            } 
        }
        //IF email
        else if ($email_test) {
            $table = $email_test->toArray();
            $user_test='true';
            $user_name=$email_test->email;
            // password true
            if (Hash::check($password, $email_test->password)) {
                $password_test='true';
            } 
        }
        if($password_test=='true'){
            $credentials = [
                'name' => $table['name'],
                'email' => $table['email'],
                'password' => $request->input('password'),
            ];
            if (Auth::attempt($credentials)) {
                // Authentication successful
                return redirect()->route('user.index')->with('user_data',$table);
            } 
        }
        else{
            $errors=['user_test'=>$user_test,'password_test'=>$password_test,'user_name'=>$user_name];
            return redirect()->route('login')->with('user_data',$errors);
        }
    }
    public function index()
    {
        $table = session('user_data');
        session([
            'user_name'=>$table['name'],
            'user_email'=>$table['email'],
            'user_path'=>$table['path_avatar'],
        ]);
        return redirect()->route('themes.index');
    }
    public function create()
    {
        return view('users.create');
    }

    public function store(Request $request)
    {
        $name = $request->input('user_name');
        $email = $request->input('email');
        $password = $request->input('password');
        $questions = $request->input('questions');
        $answer = $request->input('answer');
        $path_avatar = $request->input('selected_avatar_input');
        //vars_test
        $name_test = User::where('name', $name)
            ->first();
        $email_test = User::where('email', $email)
            ->first();
        
        $user_test='false';
        $mail_test= 'false';
        //IF name
        if ($name_test) {
            $user_test='true';
        }
        //IF email
        if ($email_test) {
            $mail_test= 'true';
        }
        if($user_test == 'false' && $mail_test == 'false'){
            $user = new User();
            $user->name = $name;
            $user->email = $email;
            $user->password = $password;
            $user->questions = $questions;
            $user->answer = $answer;
            $user->path_avatar=$path_avatar;
            
            $user->save();
            session([
                'user_name'=>$name,
                'user_path'=>$path_avatar,
                'user_email'=>$email,
            ]);
            return redirect()->route('themes.store', ['theme' => 'theme', 'store' => 'store']);
        }
        else{
            $errors_new=[
                        'user_test'=>$user_test,
                        'email_test'=>$mail_test,
                        'user_email'=>$email,
                        'user_name'=>$name,
                        'page'=>'creat_new'];
            return redirect()->route('login')->with('user_data_new',$errors_new);
        }
    }
    public function update(Request $request)
    {

    }

    public function destroy()
    {

    }
    public function search(Request $request)
    {
        $name = $request->get('name_email');
        $users = User::where('name', 'LIKE', "%$name%")->get();
        return response()->json($users);
    }
    public function password_reset(Request $request)
    {
        $username = $request->input('name_hidden');
        $newPassword = $request->input('new_password_reset');
    
        $user = User::where('name', $username)->first();
        echo $user->password;
        echo '<br>';
        if ($user) {
            // Set the new password
            $user->password = Hash::make($newPassword);
            $user->save();
    
            // Authenticate the user
            Auth::login($user);
            echo $newPassword;
            echo '<br>';
            echo $user->password;
            echo '<br>';
            echo $user->name;
            echo '<br>';
            echo $user->path_avatar;
            // Redirect the user to a desired page
            //return redirect()->route('home');
        } else {
            // User not found
            return redirect()->back()->withInput()->withErrors([
                'user_name' => 'Invalid username.',
            ]);
        }
        // echo $user->password;
        // echo '<br>';
        // echo $new_password;
        // echo '<br>';
        // echo $new_password;
        // echo '<br>';
        // echo $user->name;
        // echo '<br>';
        // echo $user->path_avatar;
        //return redirect()->route('login')->with('passwrd_updated','passwrd_updated');
    }
}

