<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\category;
use App\Models\Product;
use App\Models\Discount;
use App\Models\product_img;
use App\Models\product_infor;
use App\Models\tskt;
use App\Components\cate;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
class ProductController extends Controller
{
    private $htmlSlelect = '';

    public function __construct(){
        $this->htmlSlelect ='';
        $this->middleware('CheckLoginAdmin');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = Product::latest()->paginate(10);
        return view('admin.product.index',['data'=>$data]);
    }
    public function index1()
    {
        //$data = Product::latest()->get();
        $data = Product::latest()->all();
        dd($data);
    }
    /**
     * 
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data = category::all();
        $cate = new cate($data);
        $htmlSlelect = $cate->cate('',0,'');
        return view('admin.product.add',['html'=>$htmlSlelect]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request){
        str_replace(" ","_",$request->name);
        Product::create([
            "name" => $request->name,
            "name_file" => $request->name_file,
            "title" => $request->title,
            "hot" => $request->hot,
            "keywords" => $request->keywords,
            "sale_product" => $request->sale_product,
            "des" => $request->des,
            "main_img" => $request->file->getClientOriginalName(),
            "category_id" => $request->parent_id,
            "quantity" => $request->quantity,
            "type" => $request->type,
            "price" => $request->price,
            "review" => $request->review,
            "user_id" => Auth::user()->id
        ]);
        $first = Product::latest()->take(1)->get();
        $id = 0;
        foreach($first as $getid){
            $id = $getid->id;
            foreach($request->infor as $value){
                product_infor::create([
                    "name" => $value,
                    "product_id" => $id,
                ]);
            }
        }
        Discount::create([
            'sale'=>$request->discount,
            'sale_time'=>$request->sale_time,
            'product_id'=>$id,
        ]);
        $data = DB::table('product_infor')->where('product_id',$id)->get();
        $option ="";
        foreach($data as $value){
            $option.="<option value='".$value->id."'>".$value->name."</option>";
        }
        foreach($request->file('files') as $value){
            $value->move('public/assets/upload',$value->getClientOriginalName());
            product_img::create([
                "url_img" => $value->getClientOriginalName(),
                "product_id" => $id,
            ]);
        }
        return view('admin.product.next')->with('option',$option);
    }
    public function nextPost(Request $request){
        for ($i = 0; $i < count($request->name); $i++) {
            tskt::create([
                "name" => $request->name[$i],
                "value" => $request->value[$i],
                "infor_product_id" => $request->id[$i],
            ]);
        }
        return redirect('admin/product')->with('mess','da them')->with('title','Product');
    }
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show1()
    {
        return view('admin.product.next');
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
