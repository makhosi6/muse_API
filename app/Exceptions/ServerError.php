<?php

namespace App\Exceptions;

use Exception;

class ServerError extends Exception
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
            "status_message"=>"Internal Server Error",
            "status_code" => 500,
            "path" => $request->path(),
            "method" => $request->method(),
        ], 500);
    }
}
