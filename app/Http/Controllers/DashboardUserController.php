<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Password;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('dashboard.user.index', [
            'users' => User::where('id', auth()->user()->id)->get()
        ]);
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
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function edit(User $user)
    {
        return view('dashboard.user.index', [
            'user' => $user,
            'users' => User::all()
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'name'      => 'required',
            'username'  => 'required',
            'email'     => 'required',
            'biodata'   => 'required',
            'image'     => 'image|file|max:1024'
        ];

        $validated = $request->validate($rules);

        if($request->file('image')){
            if($user->image){
                Storage::delete($user->image);
            }
            $validated['image'] = $request->file('image')->store('profil-images');
        }

        User::where('id', $user->id)
            ->update($validated);
        
            return redirect('/dashboard/user')->with('success-profile', 'Berhasil Memperbarui Profil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Http\Response
     */
    public function destroy(User $user)
    {
        //
    }

    public function password()
    {
        return view('dashboard.user.password', [
            'users' => User::all()
        ]);
    }

    public function changePassword(Request $request)
    {
        //  Validasi
         $request->validate([
            'current_password'  => 'required',
            'passwordNew' => 'required|same:konfirmasiPassword'
        ]);


        // Mencocokan Dengan Kata Sandi Lama
        if(!Hash::check($request->current_password, auth()->user()->password)){
            return back()->with('error', 'Old Password Doesnt match!');
        }


        // Update Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->passwordNew)
        ]);
        

        return back()->with('success', 'Berhasil Memperbarui Password');
    }

}
