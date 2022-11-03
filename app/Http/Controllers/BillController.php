<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orders;

class BillController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function map()
    {
        return view("shop.map");
    }
    public function index()
    {
        return view("shop.tra-cuu-don-hang-online");
    }

    public function bill(Request $request)
    {

        try {
            $data = orders::findOrFail($request->id)->where('phone_number','=',$request->sdt)->first();
            if(empty($data)){
                $data = "Vui lòng nhập chính xác số điện thoại";
            }
            return response()->json([
                'code'=>200,
                'mess'=>$data,
            ],200);
            //return redirect('categories')->with('mess',"Đã Xóa ".$data->name);
        } catch(Exception $e){
            // Log::error($e->getMessage().'line : '.$e->getLine());
            return response()->json([
                'code'=>500,
                'mess'=>"Chưa có mã hóa đơn mà bạn tìm kiếm",
            ],500);
        }
    }


    public function store(Request $request)
    {
        //
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
