<?php

namespace App\Http\Controllers\API;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\User;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return User::latest()->paginate(10);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {   
        $this->validateNewData();
        return User::create([
            'name' => $request['name'],
            'mobile' => $request['mobile'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
            'type' => $request['type'],
            'bio' => $request['bio'],
            'photo' => $request['photo'],
        ]);
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
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);
        $this->validateUpdatedData($user);
        $user->update($request->all());
        return ['message' => 'User Updated'];
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);
        $user->delete();
        return ['message' => 'User Deleted'];
    }

    protected function validateNewData() 
    {
        return request()->validate([
            'name' => 'required|string|max:191',
            'mobile' => 'required|digits:10',
            'email' => 'bail|required|unique:users|max:255|email',
            'password' => 'required|string|min:8',
            'type' => 'required|string|max:50',
            'bio' => 'string|max:255',
        ]);
    }

    protected function validateUpdatedData($user) 
    {
        return request()->validate([
            'name' => 'required|string|max:191',
            'mobile' => 'required|digits:10',
            'email' => 'bail|required|max:255|email|unique:users,email,'.$user->id,
            'password' => 'sometimes|string|min:8',
            'type' => 'required|string|max:50',
            'bio' => 'string|max:255',
        ]);
    }
}
