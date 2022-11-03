<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Voucher;

class VoucherController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Voucher::latest()->paginate(10);
        return view("admin.voucher.index",['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.voucher.add");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->file('img')->move('public/assets/upload',$request->img->getClientOriginalName());
        Voucher::create([
            'title' => $request->title,
            'content' => $request->content,
            'sale' => $request->sale,
            'img' => $request->img->getClientOriginalName(),
            'detail' => $request->detail,
            'time_limit' => $request->time,
        ]);
        return redirect('admin/voucher')->with(["title"=>"Thông báo"])->with(["mess"=>"Đã thêm 1 voucher mới"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Voucher::find($id);
        return view('admin.voucher.edit',['data'=>$data]);
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
        $data = Voucher::find($id);
        if(isset($request->img)){
            $request->file('img')->move('public/assets/upload',$request->img->getClientOriginalName());
            $data->update([
                'title' => $request->title,
                'content' => $request->content,
                'sale' => $request->sale,
                'img' => $request->img->getClientOriginalName(),
                'detail' => $request->detail,
                'time_limit' => $request->time,
            ]);
        }else{
            $data->update([
                'title' => $request->title,
                'content' => $request->content,
                'sale' => $request->sale,
                'detail' => $request->detail,
                'time_limit' => $request->time,
            ]);
        }

        return redirect('admin/voucher')->with('title','Thông báo')->with('mess','Đã Sửa Voucher thành công');
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
        return redirect('admin/voucher')->with(["mess"=>"Đã xóa Voucher thành công","title"=>"Thông báo"]);
    }
}
