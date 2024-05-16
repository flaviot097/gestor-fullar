<?php

namespace App\Livewire;

use League\Flysystem\UnableToListContents;
use Livewire\Component;
use Illuminate\Support\Facades\DB;

class CajaRegistradora extends Component
{
    public function render()
    {
        return view('livewire.caja-registradora');
    }
    public $inputP = "";
    public $priceP = "";
    public $counts;
    public $codeP = "";
    public $nameP = "";
    public $quantityP = 1;
    public $arrayAcu = [];
    public $total = 0;
    public $loks = [];
    public $ArrayTotalSale;

    public function carge()
    {
        $productsInput = $this->inputP;
        $this->loks = DB::select("select * from products where name_product=?", [$productsInput]);
        $this->priceP = $this->loks[0]->price;
        $this->codeP = $this->loks[0]->code;
        $this->nameP = $this->loks[0]->name_product;
        $this->arrayAcu[] = array($this->priceP, $this->nameP, $this->codeP, $this->quantityP);
        setcookie("caja1", time() - 360);
        setcookie("caja1", json_encode($this->arrayAcu), time() + 360);
        $this->total = ($this->loks[0]->price) * $this->quantityP + $this->total;

        if ($this->counts !== null) {
            $this->counts = $this->counts + 1;
        }
        if ($this->counts == null) {
            $this->counts = 0;
        }

    }
    public function closeSale()
    {
        $this->ArrayTotalSale = array($this->total, date("Y-m-d H:i:s"));
        dd($this->ArrayTotalSale);

    }
}