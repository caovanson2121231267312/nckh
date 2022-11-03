<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\banner;
use App\Models\category;
use App\Models\Product;
use App\Models\product_infor;
use App\Models\customer;
use App\Models\review;
use App\Models\Voucher;
use App\Models\Blog;
use App\Components\cate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Resources\Json\JsonResource;
use DB;

class ShopController extends Controller
{
    private $htmlSlelect = '';

    public function __construct(){
        $this->htmlSlelect ='';
    }
    public function indexTest()
    {
        //$data = Product::latest()->get();
        //$data = category::all();
        $data = category::chunkById(5, function($i) {
$s=0;
            foreach ($i as $item) {
$s++;
                echo "<pre>".$s.$item."</pre>";
            }
        });
        //echo "<pre>".$data."</pre>";
    }
    
    public function actionApriori()
    {
        $pro = DB::table('customer_product')
        ->join('products','customer_product.product_id','=','products.id')
        ->join('categories','categories.id','=','products.category_id')
        ->select('categories.file','products.name','products.main_img','products.price','customer_product.product_id'
            ,'customer_product.customer_id','products.name_file','products.sale_product')
        ->orderBy('customer_product.customer_id','desc')
        // ->take(5)
        ->get();

        $distinct = DB::table('customer_product')
        ->join('products','customer_product.product_id','=','products.id')
        ->select('customer_product.customer_id')
        ->distinct()
        ->orderBy('customer_product.customer_id','desc')
        // ->take(5)
        ->get();
        // dd($pro);
        return response()->json([
            'code'=>200,
            'mess'=>$pro,
            'distinct'=>$distinct
        ],200);
    }
    public function search(Request $req)
    {
        $pro = DB::table('products')
        ->join('categories','categories.id','=','products.category_id')
        ->join('discounts','products.id','=','discounts.product_id')
        ->select('products.name','products.price','products.sale_product','products.hot','products.name_file',
        'products.main_img','categories.file','discounts.sale')
        ->where('products.name', 'LIKE', '%' . $req->key . '%')
        ->get();


        $count =0;
        foreach($pro as $value){
            $count++;
        }
 // dd($pro);
        return view('shop.search',[
            'pro'=>$pro,
            'key'=>$req->key,
            'count'=>$count,
        ]);
    }
    public function get_item($key){
        $pro = DB::table('products')
        ->join('categories','categories.id','=','products.category_id')
        ->join('discounts','products.id','=','discounts.product_id')
        ->select('products.name','products.price','products.sale_product','products.hot','products.name_file',
        'products.main_img','categories.file','discounts.sale')
        ->where('products.name', 'LIKE', '%' . $key . '%')->take(10)
        ->get();
         return $pro;
    }

    public function index()
    {
        $bannerCenter = banner::where('position','=','Banner Center')->latest()->take(6)->get();
        $bannerLeft = banner::where('position','=','Banner Left')->latest()->take(3)->get();
        $bannerBottom = banner::where('position','=','Banner Bottom')->latest()->take(1)->get();
        $mobile = Product::where('title','=','Điện Thoại')
                            ->latest()
                            ->take(5)->with('discount')->with('category')->with('star')
                            ->get();
        $mobile1 = Product::where('title','=','Điện Thoại')
        //->select('')
        ->latest()->skip(5)->with('star')
        ->take(5)->with('discount')->with('category')
        ->get();

        $laptop = Product::where('title','=','Laptop')
        ->latest()
        ->take(5)->with('discount')->with('category')->with('star')
        ->get();

        $laptop1 = Product::where('title','=','Laptop')
        ->latest()->skip(5)
        ->take(5)->with('discount')->with('category')->with('star')
        ->get();
        $pc = Product::where('title','=','PC')
        ->latest()
        ->take(5)->with('discount')->with('category')->with('star')
        ->get();
        $tablet = Product::where('title','=','TABLET')
        ->latest()
        ->take(5)->with('discount')->with('category')->with('star')
        ->get();
        $amthanh = Product::where('title','=','Âm Thanh')
        ->latest()
        ->take(5)->with('discount')->with('category')->with('star')
        ->get();
 //echo dd($mobile1);
        $data = category::all();
        $cate = new cate($data);
        $htmlSlelect = $cate->showindex($data,0,'');

        //return $laptop;
        return view('shop.index')->with([
            'bannerCenter'=>$bannerCenter,
            'bannerLeft'=>$bannerLeft,
            'bannerBottom'=>$bannerBottom,
            'mobile'=>$mobile,
            'mobile1'=>$mobile1,
            'laptop'=>$laptop,
            'laptop1'=>$laptop1,
            'pc'=>$pc,
            'tablet'=>$tablet,
            'amthanh'=>$amthanh,
            'htmlSlelect'=>$htmlSlelect,
        ]);
        $id = Cookie::get('customers');
    }
    public function index1()
    {
        $data = category::with('products')->get();
        return $data;
    }
    public function index2()
    {
        $data = DB::table('customers')->where('customers.id','=',2)
                ->join('customer_product','customer_product.customer_id','=','customers.id')
                ->join('products','products.id','=','customer_product.product_id')
                ->join('discounts','discounts.product_id','=','products.id')
                ->orderBy('customer_product.created_at','desc')
                ->get();
        return $data;
    }
    public function index3()
    {
        $data = category::all();
        $cate = new cate($data);
        $htmlSlelect = $cate->cate('',0,'');
        return $htmlSlelect;
        // response()->json(
        //     ['data'=>$htmlSlelect],
        //     200,
        //     ['Content-type'=> 'application/json; charset=utf-8']
        //     , JSON_UNESCAPED_UNICODE
        // );
    }
    public function create($file)
    {
        $data=[];
        $category_parent = category::where('file','=',$file)->first();
        $category_child = category::where('parent_id','=', $category_parent->id)->get();
        $dem=0;
        foreach($category_child as $value){
            $dem++;
        }
        if($dem==0){
            $data[0] = DB::table('categories')->where('file','=',$file)
                ->join('products','categories.id','=','products.category_id')
                ->join('discounts','discounts.product_id','=','products.id')
                ->orderBy('products.title','desc')
                ->orderBy('products.created_at','desc')->take(20)
                ->get();
        }else{
            $j=0;
            foreach ($category_child as $value) {
                $data[$j] = DB::table('categories')->where('file','=',$value->file)
                    ->join('products','categories.id','=','products.category_id')
                    ->join('discounts','discounts.product_id','=','products.id')
                    ->orderBy('products.title','desc')
                    ->orderBy('products.created_at','desc')
                    ->take(20)
                    ->get();
                $j++;
            }

        }
        // $data = category::where('file','=',$file)->with('products')
        // ->get();
        // for ($i = 0; $i < ; $i++) {

        // }
        //echo dd($data);
        return view('shop.list-product',[
            'data'=>$data,
            'file'=>$file
        ]);
    }
    public function product($id,$name)
    {
        $pc = Product::where('title','=','PC')
        ->latest()
        ->take(5)->with('discount')->with('category')
        ->get();

         $data = Product::where('name_file','=',$name)
         ->with('category')
         ->with('img')->with('infor')->with('star')->orderBy('created_at','desc')
         ->first();
        $voucher = Voucher::latest()->take(2)->get();
         $ts = product_infor::where('product_id','=',$data->id)->with('tskt')->get();
         $star = [];
         $count_star = DB::table('reviews')
                    ->select(DB::raw('count(*) as count_star, star'))->orderBy('star','desc')
                    ->where('product_id','=',$data->id)->groupBy('star')->get();
        $sum = DB::table('reviews')->where('product_id','=',$data->id)->sum('star');
        $count = DB::table('reviews')->where('product_id','=',$data->id)->count();

        $blog = Blog::latest()->take(6)->get();
        //dd($voucher);

        return view('shop.product',[
            'data'=>$data,
            'pc'=>$pc,
            'ts'=>$ts,
            'count'=>$count,
            'sum'=>$sum,
            'star'=>$count_star,
            'voucher'=>$voucher,
            'blog'=>$blog,
        ]);
    }
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $sl=0;
        $id = Cookie::get('customers');
        if(!isset($id)){
            $gt = customer::latest()->first();
            customer::create([
                'id_address'=>$request->ip(),
            ]);
            $sl = $gt->id+1;
            Cookie::queue('customers', $sl, 60*24*30*12*4);
        }
            customer::findOrFail($id)->product()
            ->syncWithoutDetaching([$request->id=>["created_at" =>  \Carbon\Carbon::now()]]);
        return redirect('cart');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request)
    {
        $sl=0;
        $id = Cookie::get('customers');
        if(!isset($id)){
            $gt = customer::latest()->first();
            customer::create([
                'id_address'=>$request->ip(),
            ]);
            $sl = $gt->id+1;
            Cookie::queue('customers', $sl, 60*24*30*12*4);
        }
        $id = Cookie::get('customers');
        //customer::findOrFail(2)->product()->sync([13,15]);
        //xóa các tất cả insert lại
        //customer::findOrFail(2)->product()->syncWithoutDetaching([14,15]);
        //chỉ thêm những cái mới ko xóa
        //customer::findOrFail(2)->product()->attach([15=>['order_quantity'=>12]]);
        // thêm
        //customer::findOrFail(2)->product()->detach([14,15]);
        //customer::findOrFail(2)->product()->toggle([16,14,15]);
        //$data = customer::findOrFail(2)->with('product')->with('discount')->get();

        $data = DB::table('customers')->where('customers.id','=',$id)
                ->join('customer_product','customer_product.customer_id','=','customers.id')
                ->join('products','products.id','=','customer_product.product_id')
                ->join('discounts','discounts.product_id','=','products.id')
                ->orderBy('customer_product.created_at','desc')
                ->get();
        //echo dd($data);
        return view('shop.cart',['data'=>$data,'cookies'=>$id]);
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
    public function star(Request $request)
    {
        review::create([
            'name'=>$request->name,
            'phone'=>$request->phone,
            'review'=>$request->review,
            'star'=>$request->star,
            'product_id'=>$request->product_id,
        ]);
        return redirect()->back()->with([
            'title'=>'Cảm ơn đánh giá của anh,chị',
            'mess'=>'Thông báo',
        ]);
    }
    public function order($cookies,$idproduct,$id)
    {
        try {
            $data = DB::table('customer_product')
                    ->where('customer_id','=',$cookies)
                    ->where('product_id','=',$idproduct)
                    ->update([
                        'order_quantity'=>$id,
                        'updated_at'=>\Carbon\Carbon::now(),
                    ]);
            return response()->json([
                'code'=>200,
                'mess'=>'success',
            ],200);
            //return redirect('categories')->with('mess',"Đã Xóa ".$data->name);
        } catch(Exception $e){
            Log::error($e->getMessage().'line : '.$e->getLine());
            return response()->json([
                'code'=>500,
                'mess'=>'fail '.$e->getMessage().'line : '.$e->getLine(),
            ],500);
        }
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


    public function destroy($id)
    {
        try {
            $ip = Cookie::get('customers');
            customer::findOrFail($ip)->product()->detach($id);
            return response()->json([
                'code'=>200,
                'mess'=>'Delete success ',
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
    public function order_product(Request $req){

        return redirect()->back()->with(['mess'=>'Đã đặt hàng thành công chủ shop sẽ liên lạc lại bạn sớm nhất']);
    }
}
