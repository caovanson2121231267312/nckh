<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\status_order;

class StatusOrder extends Controller
{
    public function __construct(){
        $this->middleware('CheckLoginAdmin');
    }


    public function index()
    {
        $data = status_order::latest()->paginate(10);
        return view('admin.status_order.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.status_order.add');
    }

    public function store(Request $request)
    {
        status_order::create([
            'name'=>$request->name,
        ]);
        return redirect('admin/status_order')->with(['mess'=>'Đã thêm trạng thái thành công .']);
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
        try {
            $data = status_order::findOrFail($id);
            status_order::findOrFail($id)->delete();
            return response()->json([
                'code'=>200,
                'mess'=>'Đã xóa trạng thái '.$data->name,
            ],200);
            //return redirect('categories')->with('mess',"Đã Xóa ".$data->name);
        } catch(Exception $e){
            Log::error($e->getMessage().'line : '.$e->getLine());
            return response()->json([
                'code'=>500,
                'mess'=>'Lỗi '.$e->getMessage().'line : '.$e->getLine(),
            ],500);
        }
    }
}
