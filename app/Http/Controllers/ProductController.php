<?php

namespace App\Http\Controllers;

use App\Exceptions\ProductErrorExceptions;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * The attributes products.
     *
     * @var array<int, string>
     */
    public $message = "Error al crear Producto";
    public function crear(Request $request)
    {
        $product_create = new Product;
        $product_create->user_id = Auth::user()->email;
        $product_create->name_product = $request->input("product");
        $product_create->code = $request->input("code");
        $product_create->departamento = $request->input("departamento");
        $product_create->stock = $request->input("stock");
        if ($product_create !== "" || $product_create !== []) {
            try {
                $product_create->save();
                return redirect()->route("deposito");
            } catch (\Exception $e) {
                if ($product_create->error) {
                    throw new ProductErrorExceptions($product_create->error->message, $product_create->error->staus);
                } else {
                    throw new ProductErrorExceptions();
                }

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
