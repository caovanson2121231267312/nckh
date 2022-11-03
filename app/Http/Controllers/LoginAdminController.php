<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginAdminController extends Controller
{
    public function index()
    {
        if(Auth::check()){
            return redirect('admin');
        }else{
            return view('admin.login');
        }
    }

    public function check(Request $request)
    {
        $credentials = ([
            'email' => $request->email,
            'password' => $request->password,
        ]);
        if (Auth::attempt($credentials)) {
           return redirect('admin');
        }else{
            return redirect('admin/login')->with([
               'mess' => 'Tài khoản hoặc mật khẩu không đúng .',
            ]);
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('admin/login');
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
