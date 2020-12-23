<?php

namespace App\Exceptions;

use Exception;

class UnauthorizedErrorr extends Exception
{
      //
      /**
     * Report the exception.
     *
     * @return void
     */
    public function report()
    {
        //
    }

    /**
     * Render the exception into an HTTP response.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function render($request)
    {
        return response()->json([
            "status_message"=>"Valid API key must be granted.",
            "status_code" => 401
        ], 401);
    }
}
