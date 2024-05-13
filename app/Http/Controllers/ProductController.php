<?php

namespace App\Http\Controllers;

use App\Exceptions\ProductErrorExceptions;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class ProductController extends Controller
{
    /**
     * The attributes products.
     *
     * @var array<int, string>
     */

    public function crear(Request $request)
    {
        //validamos los campos que nos lleg
        $request->validate([
            "product" => "required",
            "price" => "required",
            "stock" => "required",
            "code" => "unique:products|required",
            "departamento" => "required"

        ]);

        $product_create = new Product;
        $product_create->user_id = "flaviotrocello097@gmail.com";
        $product_create->name_product = $request->input("product");
        $product_create->code = $request->input("code");
        $product_create->code = $request->input("price");
        $product_create->departamento = $request->input("departamento");
        $product_create->stock = $request->input("stock");
        $product_create->save();


        //validacion de errores (si $product_create no responde)//////////////////////////////////////////---------------------------------------------------------------------
        if ($product_create->error) {
            throw new ProductErrorExceptions($product_create->error->message, $product_create->error->staus);
        }
        if ($product_create !== [] || $product_create !== "") {
            try {

                return redirect()->route("deposito");
            } catch (\Exception $e) {
                /////////////////////////////////si la db no funciona///////////////////////////////////////////-------------------------------------------------------------------
                throw new ProductErrorExceptions();
            }
        }

        /*Product::created([
            "name_product" => $request->input("product"),
            "code" => $request->input("code"),
            "departamento" => $request->input("departamento"),
            "stock" => $request->input("stock")
        ]);*/

    }

    public function consultar(Request $request)
    {
        //$datos = ["nombre"=>"Juan","edad"=>23];
        $request["products"] = Product::all();
        return view('Stock', $request);
    }



}