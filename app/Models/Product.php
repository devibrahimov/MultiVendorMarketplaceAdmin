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



    public static function createProduct(Request $request){

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

            Product::create($dbdata);

            return true ;

        }catch (\Exception $e){

            return $e ;

        }


    }

}
