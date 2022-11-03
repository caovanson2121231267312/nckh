<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pay;
class PayController extends Controller
{
    private $htmlSlelect = '';

    public function __construct(){
        $this->htmlSlelect ='';
        $this->middleware('CheckLoginAdmin');
    }

    public function index()
    {
        $data= Pay::paginate(20);
        return view('admin.pay.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.pay.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Pay::Create([
            'name'=>$request->name,
            'content'=>$request->content,
        ]);
        return redirect('admin/pay')->with(["mess"=>"Đã thêm 1 hình thức thanh toán mới","title"=>"Thông báo"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Pay::find($id);
        return view('admin.pay.edit',['data'=>$data]);
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
    public function update(Request $request,$id)
    {
        $data = Pay::find($id)->update([
            'name'=>$request->name,
            'content'=>$request->content,
        ]);
        return redirect('admin/pay')->with(["mess"=>"Đã sửa hình thức thanh toán","title"=>"Thông báo"]);
    }


    public function destroy($id)
    {
        $data = Pay::find($id)->delete();
        return redirect('admin/pay')->with(["mess"=>"Đã xóa hình thức thanh toán","title"=>"Thông báo"]);
    }
}
