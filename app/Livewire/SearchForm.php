<?php

namespace App\Livewire;

use App\Models\Product;
use GuzzleHttp\Promise\Create;
use Illuminate\Http\Request;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class SearchForm extends Component
{
    public function render()
    {
        return view('livewire.search-form');
    }
    //buscar usuarios
    public $codigoForm = "";
    public $productsForm = "";
    public $arrayProduct = [];
    public function search()
    {
        //$this->emit("productSearched", $this->codigoForm);
        //$ProductsAll = DB::table('users')->get();
        $productsForm = $this->productsForm;
        $codigoForm = $this->codigoForm;

        if ($productsForm !== "") {
            $loks = DB::select("select * from users where name=?", [$productsForm]);
            $this->arrayProduct = $loks;
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
