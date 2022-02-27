<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Http\Requests\Api\ShopCreateProduct;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{


    public function index(){
        $products = Product::where('shop_id',auth('shop')->user()->id)->paginate(10); //15;
        return view('site.pages.shop.product.index',compact(['products']));
    }

    public function create(){
        return view('site.pages.shop.product.create');
    }



    public function store(ShopCreateProduct $request){
     // return $request->all();



        try {
            $files = request()->file('file');
            $techvalues = $request->techvalue ;
            $techkeys = $request->techkey ;
            $information = [];
            foreach ($techkeys as $k => $v){

                $data =[ 'key' => $v,'value' => $techvalues[$k] ];
                array_push($information ,$data  );

            }

            $informations = json_encode($information,JSON_UNESCAPED_UNICODE);

            $images = [] ;
            foreach ($files as $key => $file){
                //$this->validate(request(), ['file' => 'image|mimes:jpg,jpeg,png']);
                $filename = $file->getClientOriginalName();
                $imageDestinationPath = 'uploads/';
                $postImage = rand(0,12312312312). "." . $file->getClientOriginalExtension();
                $file->move($imageDestinationPath, $postImage);

                if ($request->coverimage == $key){
                    //cover olacaq image fayi arrayin ilk evveline qoyulur
                    //0 ci index coverdir herzaman
                    array_unshift($images , $postImage);
                }else{
                    array_push($images,$postImage);
                }
            }
            $images = json_encode($images,JSON_UNESCAPED_UNICODE) ;

            $price = $request->price;
            $sale_price = $request->sale_price;
            $stock = $request->stock;
            $sku = $request->sku;
            $warranty = $request->warranty;
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
                'warranty'   => $warranty,
                'informations'  => $informations,
                'images'    => $images,
            ] ;

           $product = Product::create($dbdata);

           if($product){
               return true;
           }else{
               return false;
           }
        }catch (\Exception $e){

           // return $e ;
            return false ;

        }

    }

    public function edit($id,$slug){
        $shop_id = auth('shop')->user()->id;
        $product = Product::where('shop_id',$shop_id)->where('key',$id)->where('slug',$slug)->first();
        $product = json_encode($product, JSON_UNESCAPED_UNICODE) ;
        return view('site.pages.shop.product.edit',compact(['product']));
    }


    public function update($id, Request $request){

    }


    public function active(Request $request){
        $id = $request->id;
        $shop_id = auth('shop')->user()->id;
        $status = $request->status;
        var_dump($status);
       $product =  Product::where('shop_id',$shop_id)->where('key',$id)->first();

       if ( $status == "true" ){
           $status = 1;
       }  if ( $status == "false" ){
           $status = 0;
       }
       $product->access = $status;
        $product->save();
    }



    public function delete($key){
        $shop_id = auth('shop')->user()->id;
          Product::where('shop_id',$shop_id)->where('key',$key)->update(['access'=>0]) ;
        $delete = Product::where('shop_id',$shop_id)->where('key',$key)->delete();
        if ( $delete ){
            $status = 1;
        }  if ( $status == "false" ){
            $status = 0;
        }

        return view('site.pages.shop.product.index' );
    }


    public function onlyTrashedProducs(){

        $products = Product::where('shop_id',auth('shop')->user()->id)->onlyTrashed()->paginate(10); //15;
        return view('site.pages.shop.product.index',compact(['products']));
    }



}





