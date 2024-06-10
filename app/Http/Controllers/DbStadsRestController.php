<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DbStadsRestController extends Controller
{
    public function index()
    {
        $RestJson = DB::select("select * from stads");
        $array = array();
        $enero = 0;
        $febrero = 0;
        $marzo = 0;
        $abril = 0;
        $mayo = 0;
        $junio = 0;
        $julio = 0;
        $agosto = 0;
        $septiembre = 0;
        $octubre = 0;
        $noviembre = 0;
        $diciembre = 0;
        foreach ($RestJson as $venta) {
            $cortar = $venta->dates;
            $mes = substr($cortar, 5, -3);
            switch ($mes) {
                case '01':
                    $enero = $enero + intval($venta->total);
                    break;
                case '02':
                    $febrero = $febrero + intval($venta->total);
                    break;
                case '03':
                    $marzo = $marzo + intval($venta->total);
                    break;
                case '04':
                    $abril = $abril + intval($venta->total);
                    break;
                case '05':
                    $mayo = $mayo + intval($venta->total);
                    break;
                case '06':
                    $junio = $junio + intval($venta->total);
                    break;
                case '07':
                    $julio = $julio + intval($venta->total);
                    break;
                case '08':
                    $agosto = $agosto + intval($venta->total);
                    break;
                case '09':
                    $septiembre = $septiembre + intval($venta->total);
                    break;
                case '10':
                    $octubre = $octubre + intval($venta->total);
                    break;
                case '11':
                    $noviembre = $noviembre + intval($venta->total);
                    break;
                case '12':
                    $diciembre = $diciembre + intval($venta->total);
                    break;
            }
        }
        array_push($array, $enero);
        array_push($array, $febrero);
        array_push($array, $marzo);
        array_push($array, $abril);
        array_push($array, $mayo);
        array_push($array, $junio);
        array_push($array, $julio);
        array_push($array, $agosto);
        array_push($array, $septiembre);
        array_push($array, $octubre);
        array_push($array, $noviembre);
        array_push($array, $diciembre);
        return response()->json($array, 200);
    }
}