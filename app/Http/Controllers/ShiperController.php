<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Shiper;

class ShiperController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Shiper::latest()->paginate(10);
        return view('admin.shiper.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.shiper.add');
    }


    public function store(Request $request)
    {
        $request->file('img')->move('public/assets/upload',$request->img->getClientOriginalName());
        Shiper::create([
            'name' => $request->name,
            'img' => $request->img->getClientOriginalName(),
            'phone' => $request->phone,
        ]);
        return redirect('admin/shiper')->with(["title"=>"Thông báo"])->with(["mess"=>"Đã thêm 1 đơn vị vận chuyển mới"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Shiper::find($id);
        return view('admin.shiper.edit',['data'=>$data]);
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
        $data = Shiper::find($id);
        if(isset($request->img)){
            $request->file('img')->move('public/assets/upload',$request->img->getClientOriginalName());
            $data->update([
                'name' => $request->name,
                'img' => $request->img->getClientOriginalName(),
                'phone' => $request->phone,
            ]);
        }else{
            $data->update([
                'name' => $request->name,
                'phone' => $request->phone,
            ]);
        }

        return redirect('admin/shiper')->with('title','Thông báo')->with('mess','Đã Sửa đơn vị vận chuyển thành công');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = Voucher::find($id)->delete();
        return redirect('admin/voucher')->with(["mess"=>"Đã xóa đơn vị vận chuyển thành công","title"=>"Thông báo"]);
    }
}
