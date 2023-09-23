<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\View\View;

class UserController extends Controller
{

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
//        Hello
//        return User::create([
//            'name' => $data['name'],
//            'email' => $data['email'],
//            'password' => Hash::make($data['password']),
//        ]);
    }

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('users.createAccount');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function created()
    {

    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {

        $validatedData = $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ], [
            'name.required'=> 'Name field is required.',
            'email.required' => 'Email field is a required field.',
            'email.unique' => 'This email is associated with another user account.'
        ]);
        $user = null;
        $validatedData['password'] = Hash::make($validatedData['password']);
//        DB::transaction(function($validatedData){
            $user = User::create($validatedData);
//        });

        if($user!=null) {
            return back()->with('success', 'Account created Successfully ');
        }else{
            return back()->with('error', 'Account could not be created Successfully');
        }
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function deleteManager()
    {
        $users = User::where('id','<>', '1')->get();
        return view('users.delete', compact(['users']));
    }
    public function editManager()
{
    $users = User::where('id','<>', '1')->get();
    return view('users.edit', compact(['users']));
}
}
