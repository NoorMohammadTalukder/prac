<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\EmployeeUser;
use App\Http\Requests\StoreEmployeeUserRequest;
use App\Http\Requests\UpdateEmployeeUserRequest;

class EmployeeUserController extends Controller
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

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEmployeeUserRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEmployeeUserRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EmployeeUser  $employeeUser
     * @return \Illuminate\Http\Response
     */
    public function show(EmployeeUser $employeeUser)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EmployeeUser  $employeeUser
     * @return \Illuminate\Http\Response
     */
    public function edit(EmployeeUser $employeeUser)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEmployeeUserRequest  $request
     * @param  \App\Models\EmployeeUser  $employeeUser
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEmployeeUserRequest $request, EmployeeUser $employeeUser)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EmployeeUser  $employeeUser
     * @return \Illuminate\Http\Response
     */
    public function destroy(EmployeeUser $employeeUser)
    {
        //
    }
    public function userRegistration(){
        return view("pages.user.userRegistration");
    }

    public function userRegistrationSubmit(Request $request){
        $validate=$request->validate([
            'name'=>'required|min:5|max:100',
            'email'=>'email',
            'phone'=>'required|regex:/^([0-9\s\-\+\(\)]*)$/',
            'address'=>'required',
            'password'=>'required'
        ],

        [
            'name.required'=>'Please put your name',
            'name.min'=>'Name must be greater than 5 charcters',
            'email'=>"Put your mail",
            'phone.required'=>"put your phone",
            'address.required'=>"put your address",
            'password.required'=>"put your password"

        ]
    );
       $user=new EmployeeUser();
       $user->name =$request->name;
       $user->email=$request->email;
       $user->phone =$request->phone;
       $user->address=$request->address;
       $user->password=$request->password;
       $user->save();
    //    $msg="Registration Successful";
        // return view('pages.student.studentRegistration') ;
        // return $student;
        // return view('pages.student.list')->with('students', $students);
         return redirect()->route('userRegistration');

    }

    public function userLogin(){
        return view('pages.user.userLogin');
    }

    public function userLoginSubmit(){
        return "ok";
    }

   
}
