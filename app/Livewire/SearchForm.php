<?php

namespace App\Livewire;

use Livewire\Component;
use Illuminate\Support\Facades\DB;
use App\Exceptions\ProductErrorExceptions;
use Dotenv\Parser\Value;
use GuzzleHttp\Psr7\Request;

class SearchForm extends Component
{
    public function render()
    {
        return view('livewire.search-form');
    }
    //buscar usuarios
    public $codigo = "";
    public $products = "";
    public $arrayProduct = [];
    public $clase = "";

    public function search()
    {
        //$this->emit("productSearched", $this->codigoForm);
        //$ProductsAll = DB::table('users')->get();

        $productsForm = $this->products;
        $codigoForm = $this->codigo;

        if ($productsForm !== "") {
            $loks = DB::select("select * from products where name_product=?", [$productsForm]);
            try {
                $this->arrayProduct = $loks;
                foreach ($loks as $value) {
                    if ($value->stock > 10) {
                        $this->clase = "stock-full";
                    }
                    if ($value->stock < 10 && $value->stock >= 2) {
                        $this->clase = "stock-whating";
                    }
                    if ($value->stock == 0 || $value->stock < 2) {
                        $this->clase = "stock-fuel";
                    }
                }
                ;
            } catch (\Exception $e) {
                throw new ProductErrorExceptions();
            }

        } else if ($codigoForm !== "") {
            $loks = DB::select("select * from users where code=?", [$codigoForm]);

        } else {
            return "los Campos estan vacios";
        }
        ;

        //return dd($loks[0]);
    }

}
/**use Illuminate\Http\RedirectResponse;
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed', Rules\Password::defaults()],
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        event(new Registered($user));

        Auth::login($user);

        return redirect(route('dashboard', absolute: false));
    } */