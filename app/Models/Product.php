<?php

namespace App\Models;

use App\Http\Requests\Api\ShopCreateProduct;
use http\Env\Request;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Str;

class Product extends Model
{

    use SoftDeletes;
    protected $table = 'products';
    protected $dates = ['deleted_at'];
    protected $guarded = [] ;
    protected $hidden = ['id'];



    public static function createProduct($request){

        try {
            $files = request()->file('file');
            $techvalues = $request->techvalue ;
            $techkeys = $request->techkey ;
            $information = [];
            foreach ($techkeys as $k => $v){
                echo
                $data =[ 'key' => $v,'value' => $techvalues[$k] ];
                array_push($information ,$data  );

            }

            $informations = json_encode($information,JSON_UNESCAPED_UNICODE);

            $images = [] ;
            foreach ($files as $file){
                //$this->validate(request(), ['file' => 'image|mimes:jpg,jpeg,png']);
                $filename = $file->getClientOriginalName();
                $imageDestinationPath = 'uploads/';
                $postImage = rand(0,12312312312). "." . $file->getClientOriginalExtension();
                $file->move($imageDestinationPath, $postImage);

                array_push($images,$postImage)  ;

            }
            $images = json_encode($images,JSON_UNESCAPED_UNICODE) ;

            $price = $request->price;
            $sale_price = $request->sale_price;
            $stock = $request->stock;
            $sku = $request->sku;
            $barkode = $request->barkode;
            $name = $request->name;
            $description = $request->description;
            if ($sale_price == null){
                $sale_price = $price;
            }else{
                $sale_price= $sale_price ;
            }

            $key = md5(md5( Str::slug($name).$sku.$barkode)) ;
            $dbdata=[
                'key' => $key,
                'shop_id'   => auth('shop')->user()->id,
                'category_id'   => $request->category_id ,
                'access'    => 0,
                'name'  => $name,
                'slug'  => Str::slug($name),
                'price' => $price,
                'sale_price'    => $sale_price,
                'description'   =>  $description,
                'stock' =>  $stock,
                'barkode'   => $barkode,
                'sku'   => $sku,
                'informations'  => $informations,
                'images'    => $images,
            ] ;

            Product::create($dbdata);

            return true ;

        }catch (\Exception $e){

            return $e ;

        }


    }

    public static function getFindProduct($key){

       return Product::where('key',$key)->first();

    }

    public static function getFindProductID($key){

       return Product::where('key',$key)->select(['key','id'])->first();

    }

    public function scopeFilter($query)
    {
        if(\request('warranty') == 'warranty'){
           $query->where('warranty' ,'>',0) ;
        }


          if( request('category') != null ){

              foreach (\request('category') as $cat_id){
                  $query->orWhere('category_id' ,$cat_id ) ;
              }

          }
          if(\request('minprice') != ''){
              $query->orWhere('sale_price' ,'>',request('minprice') ) ;
          }
          if(\request('maxprice') != ''){
              $query->orWhere('sale_price' ,'<',request('maxprice')) ;
          }
        return $query ;

    }



    public static function getSimilarProducts($category_id){
        $Category = Category::select(['id','parent_id'])->with('parent')->find($category_id);
        $ParentCategory = Category::select(['id','parent_id'])->with('children')->find($Category->parent->parent->id);

        $catlist= [];


        if ($ParentCategory !=null ){
            foreach($ParentCategory->children as $c){
                foreach($c->children as $ce){
                    array_push($catlist , $ce->id);
                }
            }
        }


        return Product::whereIn('category_id',$catlist)//whereIn ile $catlist array icinde olanlardan
        // her hansi biri category_id ile uygundursa o productu getirir
        ->where('access',1)
            ->select(['key','images', 'slug', 'sku', 'barkode', 'name', 'sale_price','price',])
            ->take(6)
            ->with('hasWish')
            ->get();
    }

    public function productStatistc(){
        return $this->belongsTo(ProductStatistics::class)
        ->where('hit','>',0)
        ->orderBy('hit','DESC');
    }

    public   function hasWish(){
        if (isset(auth('user')->user()->id) ){
            return $this
                ->hasMany('App\Models\Wish','product_key','key')
                ->where('user_id',auth('user')->user()->id);
        }

        return $this
            ->hasMany('App\Models\Wish','product_key','key');
    }
}
