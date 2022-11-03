<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\banner;
use Illuminate\Support\Facades\Auth;
class BannerController extends Controller
{
    public function __construct(){
        $this->middleware('CheckLoginAdmin');
    }
    public function index()
    {
        $data = banner::all();
        return view('admin.banner.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.banner.add');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->file('file')->move('public/assets/banner',$request->file('file')->getClientOriginalName());
        banner::create([
            'title'=>$request->title,
            'img'=>$request->file('file')->getClientOriginalName(),
            'position'=>$request->position,
            'url'=>$request->url,
        ]);
        return redirect('admin/banner')->with(['title'=>'Add Banner','mess'=>'Đã Thêm Banner Mới']);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $data = banner::find($id);
        //echo $data;
         return view('admin.banner.edit')->with('data',$data);
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
        $request->file('file')->move('public/assets/banner',$request->file('file')->getClientOriginalName());
        $data = banner::find($id);
        $data->update([
            'title'=>$request->title,
            'img'=>$request->file('file')->getClientOriginalName(),
            'position'=>$request->position,
            'url'=>$request->url,
        ]);
        return redirect('admin/banner')->with(['title'=>'Update Banner','mess'=>'Đã sửa banner thành công']);
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
            $data = banner::findOrFail($id);
            banner::findOrFail($id)->delete();
            return response()->json([
                'code'=>200,
                'mess'=>'Delete success '.$data->title,
            ],200);
            //return redirect('categories')->with('mess',"Đã Xóa ".$data->name);
        } catch(Exception $e){
            Log::error($e->getMessage().'line : '.$e->getLine());
            return response()->json([
                'code'=>500,
                'mess'=>'Delete fail '.$e->getMessage().'line : '.$e->getLine(),
            ],500);
        }
    }
}
