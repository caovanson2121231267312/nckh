<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Product extends Model
{
    use HasFactory,SoftDeletes;

    protected $fillable = [
        'id',
        'name',
        'name_file',
        'title',
        'keywords',
        'des',
        'hot',
        'sale_product',
        'review',
        'infor',
        'main_img',
        'price',
        'quantity',
        'soldout',
        'view',
        'type',
        'user_id',
        'category_id',
    ];
    public function category()
    {
        return $this->belongsTo(category::class);
    }
    public function infor()
    {
        return $this->hasMany('App\Models\product_infor','product_id','id');
    }
    public function discount()
    {
        return $this->hasOne('App\Models\Discount','product_id','id');
    }
    public function img()
    {
        return $this->hasMany('App\Models\Product_img','product_id','id');
    }
    public function customer()
    {
        return $this->belongsToMany(customer::class,'customer_product');
    }
    public function star()
    {
        return $this->hasMany('App\Models\review','product_id','id');
    }
    public function o()
    {
        return $this->belongsToMany(orders::class);
    }
    // public function infor()
    // {
    //     return $this->hasMany('App\Models\product_infor','product_id','id');
    // }
    public function actionApriori()
    {
        // thuật toán Apriori
        $samples = [['iphone', 'tainghe', 'mayanh'], ['mayanh', 'tainghe', 'blackberry'], ['iphone', 'blackberry', 'tainghe'], ['ipad', 'tainghe', 'chuot'], ['ipad', 'tainghe', 'tainghe']];
        $labels  = [];
        // $support tức ngưỡng niềm tin là tỷ lệ mẫu có chứa cả X và Y đối với một quy tắc "nếu X thì Y"
        // $confidence tức là ngưỡng tối thiểu của sự tự tin , tức là tỷ lệ mẫu có chứa cả X và Y đối với những chứa X
        $associator = new Apriori($support = 0.4, $confidence = 0.5);
        $associator->train($samples, $labels);
        // dự đoán kết quả
        $result = $associator->predict(['blackberry']);
        // return [['tainghe']]
        var_dump($result);
    }

    public function getAll(){
        // thuật toán Apriori
        $samples = [[1,2,4], [2,3,5], [1,2,3,5], [2,5]];
        $labels  = [];

foreach ($samples as $value) {
    echo $value."<br>";
}
        var_dump($result);
        return $samples;
    }











    public function getProductSearch(Request $request){
        $product = Product::query();
        $product->name($request)->price($request)->type($request)->status($request);
        $products =  $product->get();
        return view('search-product_result', ['products' => $products]);
    }
    public function scopeName($query, $request){
        if ($request->has('name')) {
            $query->where('name', 'LIKE', '%' . $request->name . '%');
        }
        return $query;
    }
    public function scopeStatus($query, $request){
        if ($request->has('status')) {
            $query->where('name', $request->status);
        }
        return $query;
    }
    public function scopeType($query, $request){
        if ($request->has('type')) {
            $query->where('type', $request->type);
        }
        return $query;
    }
    public function scopePrice($query, $request){
        if ($request->has('price')) {
            $query->where('price', $request->price);
        }
        return $query;
    }
}
