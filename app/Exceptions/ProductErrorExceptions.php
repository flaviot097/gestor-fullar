<?php

namespace App\Exceptions;

use Exception;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class ProductErrorExceptions extends Exception
{
    //
    public function __construct(string $message = "No se pudo agregar el Producto. ¡Algo anda mal! Intente mas tarde", int $code = Response::HTTP_INTERNAL_SERVER_ERROR, \Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function render(Request $request)
    {
        if ($request->isJson()) {
            return response()->json(["message" => $this->message], $this->code);
        }
    }
}