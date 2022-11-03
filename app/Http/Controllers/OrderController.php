<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\orders;

class OrderController extends Controller
{
    private $htmlSlelect = '';

    public function __construct(){
        $this->htmlSlelect ='';
        $this->middleware('CheckLoginAdmin');
    }
    public function index()
    {
        $data= orders::where('status_id','!=','4')->where('status_id','!=','3')->latest()->paginate(20);
        return view('admin.order.index',['data'=>$data]);
    }
    public function cancel()
    {
        $data= orders::where('status_id','=','4')->latest()->paginate(20);
        return view('admin.order.cancel',['data'=>$data]);
    }
    public function check($id)
    {
        orders::find($id)->update([
            'status_id'=>3,
        ]);
        $data= orders::where('status_id','=','3')->latest()->paginate(20);
        return redirect('admin/order/ship')->with(['mess'=>'Đã duyệt đơn ']);
    }

    public function ship()
    {
        $data= orders::where('status_id','=','3')->latest()->paginate(20);
        return view('admin.order.ship',['data'=>$data]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return $data;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data= orders::where('id','=',$id)->with('p')->first();
        //dd($data);
        // return $data;
        return view('admin.order.show',['data'=>$data]);
    }

    public function count_data()
    {
        $data= orders::where('status_id','!=','4')->where('status_id','!=','3')->count();
        //dd($data);
        // return $data;
        return $data;
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
    public function order(Request $request)
    {
        return $data;
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
            orders::findOrFail($id)->update([
                'status_id'=>4,
            ]);
            return response()->json([
                'code'=>200,
                'mess'=>'Đã hủy đơn thành công ',
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
