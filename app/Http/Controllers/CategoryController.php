<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\category;
use App\Components\cate;
use Illuminate\Support\Facades\Auth;
class CategoryController extends Controller
{
    private $htmlSlelect = '';

    public function __construct(){
        $this->htmlSlelect ='';
        $this->middleware('CheckLoginAdmin');
    }
    public function index()
    {
        $data = category::latest()->paginate(15);
        return view('admin.category.index',['data'=>$data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = category::all();
        $cate = new cate($data);
        $htmlSlelect = $cate->cate('',0,'');
        //echo $htmlSlelect;
        return view('admin.category.add',['html'=>$htmlSlelect]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        category::create([
            'name'=>$request->name,
            'parent_id'=>$request->parent_id,
            'user_id'=>Auth::user()->id,
            'file'=>str_replace(' ','',$request->name),
        ]);
        return redirect('admin/categories')->with('title','Add Category')->with('mess','Đã thêm '.$request->name);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = category::find($id);
        $html = $this->getCategory($data->parent_id);
        //echo $html;
        return view('admin.category.edit',['data'=>$data,'html'=>$html]);
    }
    public function getCategory($parent_id)
    {
        $data = category::all();
        $cate = new Cate($data);
        $htmlSlelect = $cate->cate($parent_id,0,'');
        return $htmlSlelect;
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
        $data = category::find($id);
        $data->update([
        'name'=>$request->name,
        'parent_id'=>$request->parent_id,
        'user_id'=>Auth::user()->id,
        'file'=>str_replace(' ','',$request->name),
        ]);
        return redirect('admin/categories')->with('title','Update Category')->with('mess','Đã Sửa '.$request->name);
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
            $data = category::findOrFail($id);
            category::findOrFail($id)->delete();
            return response()->json([
                'code'=>200,
                'mess'=>'Delete success '.$data->name,
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
