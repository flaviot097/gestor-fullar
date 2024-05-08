<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use App\Livewire\Form;

class HomeComponent extends Component
{
    public function render()
    {

        return view('livewire.home-component');
    }

    public $alert = "error al ingresar usuario";
    public $products = "";
    public $codigo = "";
    public $price = "";
    public $stock = "";
    public $listProduct = [];
    public $state1 = false;
    public $nameProducts = [];

    public $in = 0;
    public function createDivs()
    {
        //$this->listProduct = $this->pull(["name", "content"]);
        array_push($this->listProduct, array("products" => $this->products, "price" => $this->price, "stock" => $this->stock, "codigo" => $this->codigo));
        $this->nameProducts[] = $this->products;
        $this->products = '';
        $this->price = '';
        $this->stock = "";
        $this->codigo = '';
        $this->state1 = true;
        //return [$this->products => array("price" => $this->price, "stock" => $this->stock, "codigo" => $this->codigo)];
        /**pull()recupera todos los datos */

    }
    public $DElete = "";
    public function plus()
    {
        //$this->nameProducts = Product::create([$this->products => $this->listProduct]);
    }

    public function changeDElete()
    {
        $this->DElete = "dasdas";
    }
}