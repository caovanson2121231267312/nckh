<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\Models\User;
use App\Models\banner;
use App\Models\category;
use App\Models\Product;
use App\Models\product_infor;
use App\Models\customer;
use App\Components\cate;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Resources\Json\JsonResource;
use DB;
use App\Models\orders;
use Illuminate\Cookie\Middleware\AddQueuedCookiesToResponse;
header('Access-Control-Allow-Methods: GET, POST, PATCH, PUT, DELETE, OPTIONS');
header('Access-Control-Allow-Headers: Origin, Content-Type, X-Auth-Token, Authorization, Accept,charset,boundary,Content-Length');
header('Access-Control-Allow-Origin: *');

class ApiController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function order_product(Request $req){
        // dd($req);
        orders::Create([
            'name'=>$req->name,
            'email'=>$req->email,
            'phone_number'=>$req->phone,
            'address'=>$req->address,
            'note'=>$req->other,
            'money'=>$req->money,
            'pay'=>$req->pay,
            'bill'=>$req->bill,
            'status_id'=>2,
        ]);
        $data = orders::latest()->first();
        for($i=0;$i<count($req->products);$i++){
            DB::table('orders_products')->insert([
                'quantity'=>$req->quantity[$i],
                'order_id'=>$data->id,
                'product_id'=>$req->products[$i],
            ]);
        }
        // DB::table('users')->insert([
        //     ['email' => 'picard@example.com', 'votes' => 0],
        //     ['email' => 'janeway@example.com', 'votes' => 0],
        // ]);
        // insertGetId
        return redirect()->back()->with(['mess'=>"Đặt hàng thành công nhân viên sẽ liên hệ xác nhận lại đơn hàng sớm nhất , để hủy đơn đến địa điểm gần nhất để hủy",'title'=>'Thông báo']);
    }
    public function sondz()
    {
        $data = Product::where('title','=','Điện Thoại')
                            ->latest()
                            ->take(5)->with('discount')->with('category')
                            ->select('id','name','price')
                            ->get();

        return $data->toArray();


    }
    public function sondz1()
    {
        $data = Product::where('title','=','Điện Thoại')
                            ->latest()
                            // ->take(5)
                            // ->select('id','name','price')
                            ->get();
        return response()->json(
            ['data'=>$data],
            200,
            ['Content-type'=> 'application/json; charset=utf-8']
            , JSON_UNESCAPED_UNICODE
        );
    }
    public function show()
    {
        $data = Product::where('title','=','Điện Thoại')
                            ->latest()
                            ->take(5)->with('discount')->with('category')
                            ->select('id','name','price')
                            ->get();
        return response()->json(
            ['data'=>$data],
            200,
            ['Content-type'=> 'application/json; charset=utf-8']
            , JSON_UNESCAPED_UNICODE
        );
    }
    public function index()
    {
        $data = Product::where('title','=','Điện Thoại')
                            ->latest()
                            ->take(5)->with('discount')->with('category')
                            ->select('id','name','price')
                            ->get();

        return response()->json(
            ['data'=>$data],
            200,
            ['Content-type'=> 'application/json; charset=utf-8']
            , JSON_UNESCAPED_UNICODE
        );
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create(Request $request)
    {
        // Cookie::queue('customers', 1,0);
        $value = $request->cookie('customers');
        echo dd($value);
        if(isset($value)){
            echo 'no'."<br>";
        }
        // $response = new Response('Hello World');
        // $response->cookie('customers');
        // echo $response;
        $sl=0;
        echo $id = Cookie::get('customers');
        if(!isset($id)){
            $gt = customer::latest()->first();
            customer::create([
                'id_address'=>$request->ip(),
            ]);
            $sl = $gt->id+1;
            Cookie::queue('customers', $sl, 60*24*30*12*4);
        }
        $data = DB::table('customers')->where('customers.id','=',$id)
                ->join('customer_product','customer_product.customer_id','=','customers.id')
                ->join('products','products.id','=','customer_product.product_id')
                ->join('discounts','discounts.product_id','=','products.id')
                ->orderBy('customer_product.created_at','desc')
                ->get();
        // return response()->json(
        //     ['data'=>$data],
        //     200,
        //     ['Content-type'=> 'application/json; charset=utf-8']
        //     , JSON_UNESCAPED_UNICODE
        // );
    }


    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


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
