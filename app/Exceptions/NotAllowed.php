<?php

namespace App\Exceptions;

use Exception;

class NotAllowed extends Exception
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
            "status_message"=>"Method Not Allowed",
            "status_code" => 405,
            "url" => "/".$request->path(),
            "method" => $request->method(),
        ], 405);
    }
}
