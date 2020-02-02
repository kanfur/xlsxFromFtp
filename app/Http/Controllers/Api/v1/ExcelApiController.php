<?php

namespace App\Http\Controllers\Api\v1;

use App\Http\Controllers\Controller;
use http\Env\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\ExcelController as Excel;

class ExcelApiController extends Controller
{
    public function excelUploaded(Request $request){
        try{
            $status = Excel::index();
            $flag = array_key_exists('success',$status);
            if($flag){
                return response()->json(['success'=>'Database will be updated soon'],200);
            }else{
                return response()->json(['error'=>$status['error']],200);
            }
        }catch (\Exception $e){
            return response()->json(['error'=>'A critical error has occurred !'],401);
        }
    }
}
