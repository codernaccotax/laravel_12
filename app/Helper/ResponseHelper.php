<?php

namespace App\Helper;

class ResponseHelper
{
    /**
     * Create a new class instance.
     */
    public function __construct()
    {
        //
    }
    public static function success($status='success',$message=null,$data=[], $statusCode=200){
        return response()->json([
            "status" => $status,
            "message" => $message?? "Success",
            "data" => $data
        ],$statusCode);
    }
    public static function error($status='error',$message=null,$data=[], $statusCode=400){
        return response()->json([
            "status" => $status,
            "message" => $message?? "error in program",
            "data" => $data
        ],$statusCode);
    }

}
