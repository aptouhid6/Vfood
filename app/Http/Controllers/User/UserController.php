<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use App\Models\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function loginpage(){
        $data['title'] = 'Welcome to Daily Shop! Please Login.';
        return view('user.login',$data);
    }

    public function login(Request $request){
        // dd($request->all());
        if($user = User::where('email',$request->email)->first()){
            if(Hash::check($request->password,$user->password)){
                $this->AfterLogin($user);
                return redirect()->route('frontend.home'); 
            }
            else{
                //  password not matched
                return redirect()->back(); 
            }
        }else{
            // user not found
            return redirect()->back(); 
        }
    }
    private function AfterLogin($user){
        Session::put('loggedUser', $user->id);
        Session::put('userRole', $user->role);
    }

    public function logout(){
        Session::forget(['loggedUser','userRole']);
        return redirect()->back();
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['title'] = 'Create your Daily Shop Account';
        return view('user.create',$data);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users',
            'role' => 'required',
            'password' => 'required|confirmed',
        ]);
        $user = new User();
        $user->name     = $request->name;
        $user->email    = $request->email;
        $user->role    = $request->role;
        $user->password = Hash::make($request->password);
        $user->save();
        // return redirect()->route('user.index');
        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
