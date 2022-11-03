<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Store;

class StoreController extends Controller
{
    private $htmlSlelect = '';

    public function __construct(){
        $this->htmlSlelect ='';
        $this->middleware('CheckLoginAdmin');
    }

    public function index()
    {
        $data= Store::paginate(20);
        return view('admin.store.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.store.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        Store::Create([
            'name'=>$request->name,
            'url'=>$request->url,
            'map'=>$request->map,
        ]);
        return redirect('admin/store')->with(["mess"=>"Đã thêm vị trí mới","title"=>"Thông báo"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Store::find($id);
        return view('admin.store.edit',['data'=>$data]);
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
        $data = Store::find($id)->update([
            'name'=>$request->name,
            'url'=>$request->url,
            'map'=>$request->map,
        ]);
        return redirect('admin/store')->with(["mess"=>"Đã sửa vị trí","title"=>"Thông báo"]);
    }


    public function destroy($id)
    {
        $data = Store::find($id)->delete();
        return redirect('admin/store')->with(["mess"=>"Đã xóa vị trí thành công","title"=>"Thông báo"]);
    }
}
