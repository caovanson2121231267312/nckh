<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Blog;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Blog::latest()->paginate(10);
        return view("admin.blog.index",["data"=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("admin.blog.add");
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
        Blog::create([
            'title'=>$request->title,
            'content'=>$request->content,
            'file'=>$request->file,
            'img'=>$request->img->getClientOriginalName(),
            'user_id'=>$request->user_id,
        ]);
        return redirect('admin/blog')->with([
            'title'=>'Thông báo',
            'mess'=>'Đã thêm 1 bài viết mới'
        ]);
    }

    public function show($id)
    {
        $data = Blog::find($id);
        return view('admin.blog.edit',['data'=>$data]);
    }

    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        $data = Blog::find($id);
        if(isset($request->img)){
            $request->file('img')->move('public/assets/upload',$request->img->getClientOriginalName());
            $data->update([
                'title'=>$request->title,
                'content'=>$request->content,
                'file'=>$request->file,
                'img'=>$request->img->getClientOriginalName(),
                'user_id'=>$request->user_id,
            ]);
        }else{
            $data->update([
                'title'=>$request->title,
                'content'=>$request->content,
                'file'=>$request->file,
                'user_id'=>$request->user_id,
            ]);
        }

        return redirect('admin/blog')->with('title','Thông báo')->with('mess','Đã sửa bài viết thành công');
    }

    public function destroy($id)
    {
        $data = Blog::find($id)->delete();
        return redirect('admin/blog')->with(["mess"=>"Đã xóa bài viết thành công","title"=>"Thông báo"]);
    }
}
