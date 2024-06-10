<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Stads;
use Illuminate\Support\Facades\Auth;
use App\Models\Stads as ModelsStads;



class StadsController extends Controller
{       /**
        * The attributes products.
        *
        * @var array<int, string>
        */


    public function CreatedOrder(): void
    {
        $stads = new ModelsStads;
        $stads->employee_user = Auth::user()->email;

    }

}
