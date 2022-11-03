<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Notification;

class NotificationController extends Controller
{
    private $htmlSlelect = '';

    public function __construct(){
        $this->htmlSlelect ='';
        $this->middleware('CheckLoginAdmin');
    }

    public function index()
    {
        $data = Notification::latest()->paginate(10);
        return view('admin.notification.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.notification.add');
    }

    public function store(Request $request)
    {
        $request->file('img')->move('public/assets/upload',$request->img->getClientOriginalName());
        Notification::create([
            "title" => $request->title,
            "url" => $request->url,
            "img" => $request->img->getClientOriginalName(),
            "time_limit" => $request->time,
        ]);
        return redirect('admin/notification')->with(["title"=>"Thông báo"])->with(["mess"=>"Đã thêm 1 thông báo mới"]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = Notification::find($id);
        return view('admin.notification.edit',['data'=>$data]);
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        $data = notification::find($id);
        if(isset($request->img)){
            $request->file('img')->move('public/assets/upload',$request->img->getClientOriginalName());
            $data->update([
                "title" => $request->title,
                "url" => $request->url,
                "img" => $request->img->getClientOriginalName(),
                "time_limit" => $request->time,
            ]);
        }else{
            $data->update([
                "title" => $request->title,
                "url" => $request->url,
                "time_limit" => $request->time,
            ]);
        }

        return redirect('admin/notification')->with('title','Thông báo')->with('mess','Đã Sửa thông báo thanh công');
    }

    public function destroy($id)
    {
        $data = Notification::find($id)->delete();
        return redirect('admin/notification')->with(["mess"=>"Đã xóa thông báo thành công","title"=>"Thông báo"]);
    }
}
