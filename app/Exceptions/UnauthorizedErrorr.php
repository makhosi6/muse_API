<?php

namespace App\Exceptions;

use Exception;
use App\Models\User;
use Illuminate\Support\Facades\Auth;


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
    public function render($request){


        return response()->json([
            "status_message"=>"Valid 'access token' must be granted.",
            "status_code" => 401,

        ], 401);
    }
}
