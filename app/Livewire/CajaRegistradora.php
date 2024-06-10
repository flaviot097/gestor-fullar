<?php

namespace App\Livewire;


use Illuminate\Support\Facades\Auth;
use Livewire\Component;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\RedirectResponse;

session_start();

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
        //$this->ArrayTotalSale = array($this->total /*, date("Y-m-d H:i:s")*/);
        $_SESSION["total"] = $this->total;


    }
    public function closeSale()
    {
        if ($_POST) {
            if (isset($_SESSION["total"])) {
                $valueTotal = intval($_SESSION["total"]);
                DB::insert('insert into stads (employee_user, total, dates, created_at, updated_at) values (?, ?, ? ,? ,?)', [Auth::user()->email, $valueTotal, date("Y-m-d"), date("Y-m-d H:i:s"), date("Y-m-d  H:i:s")]);
                return redirect('/caja');
            } else {
                return redirect('/caja');
            }
        }

    }
}
/*echo ('<body style="background-color: #bdbdbd" ><div class="alert alert-danger" role="alert" style="text-align: center;" >
                            Debe introducir productos!
                        </div>
                        <br>
                        <div class="d-grid gap-2 col-6 mx-auto" style="display: flex;flex-wrap: wrap;
                        justify-content: center;" ><a class="btn btn-primary" href="http://gestor-app.test/caja" style="
                        border: 2px solid rgb(216, 2, 134);
                        border-radius: 0px;
                        padding: 18px 36px;
                        display: inline-block;
                        background-color:#162944;
                        font-size: 14px;
                        color:white;
                        letter-spacing: 1px;
                        cursor: pointer;
                        box-shadow: inset 0 0 0 0 #D80286;
                        -webkit-transition: ease-out 0.4s;
                        -moz-transition: ease-out 0.4s;
                        transition: ease-out 0.4s;" >Volver a Caja</a></div></body>');
    */