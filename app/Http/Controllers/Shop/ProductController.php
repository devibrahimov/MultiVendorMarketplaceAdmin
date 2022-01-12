<?php

namespace App\Http\Controllers\Shop;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ProductController extends Controller
{

    public function index(){
        $products = Product::where('shop_id',auth('shop')->user()->id)->paginate(3); //15;
        return view('site.pages.shop.product.index',compact(['products']));
    }

    public function create(){
        return view('site.pages.shop.product.create');
    }



    public function store(Request $request){
     // return $request->all();



        try {
            $files = request()->file('file');
            $techvalues = $request->techvalue ;
            $techkeys = $request->techkey ;
            $information = [];
            foreach ($techkeys as $k => $v){
                $data =[ $v => $techvalues[$k] ];
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

            $dbdata=[

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

           $product = Product::create($dbdata);

           if($product){
               return true;
           }else{
               return false;
           }


        }catch (\Exception $e){

            return $e ;

        }




    }


    public function edit($id){
        return view('site.pages.shop.product.edit');
    }


    public function active(Request $request){
        $id = $request->id;
        $status = $request->status;
        var_dump($status);
       $product =  Product::find($id);

       if ( $status == "true" ){
           $status = 1;
       }  if ( $status == "false" ){
           $status = 0;
       }

       $product->access = $status;
        $product->save();


    }

}
