<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;
use App\Models\orders;

class AdminController extends Controller
{
    public function __construct(){
        $this->middleware('CheckLoginAdmin');
    }
    public function index()
    {
        $ordersReceived = orders::where("status_id","=","2")->count();
        $orders = orders::count();
        return view('admin.index',[
            'ordersReceived'=>$ordersReceived,
            'orders'=>$orders,
        ]);
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function show($id)
    {
        //
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
