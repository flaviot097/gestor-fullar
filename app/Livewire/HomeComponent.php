<?php

namespace App\Livewire;

use App\Models\Product;
use Livewire\Component;
use Livewire\Attributes\Validate;

class HomeComponent extends Component
{
    public function render()
    {

        return view('livewire.home-component');
    }
}/*

public $alert = "error al ingresar usuario";
#[Validate('required')]
public $products = "";
#[Validate('required|min:1')]
public $codigo = "";
#[Validate('required|min:2', message: 'El precio debe ser entre mayor a $10')]
public $price = "";
#[Validate('required', message: 'El precio debe ser entre mayor a $0')]
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
  /**pull()recupera todos los datos

}
public $DElete = "";
public function save()
{
  //$this->nameProducts = Product::create([$this->products => $this->listProduct]);
  $this->validate([
      "products" => "required",
      "price" => "required",
      "stock" => "required",
      "codigo" => "unique:products"
  ]);
}

public function changeDElete()
{
  $this->DElete = "dasdas";
}
}

class CreatePost extends Component
{
#[Validate('required|min:3')]
public $title = '';

#[Validate('required|min:3')]
public $content = '';

public function save()
{
  $this->validate();

  Post::create([
      'title' => $this->title,
      'content' => $this->content,
  ]);

  return redirect()->to('/posts');
}

// ...
} */