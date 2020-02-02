<?php

namespace App\Http\Controllers;

use App\Jobs\readXlsx;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ExcelController extends Controller
{
    public static function index()
    {
        try{
            if(Storage::disk('pixel-ftp')->path('/')){
                $allFiles = Storage::disk('pixel-ftp')->files('/categories/');
                //dump($allFiles);
                $dates = array();
                foreach ($allFiles as $file){ //isimleri arraye atıyoruz
                    $name = pathinfo($file)['filename'];//self::fileInfo(pathinfo($file));
                    $date = preg_replace('/[^0-9]/', '', $name);
                    array_push($dates,$date);
                }
                //timestamps'leri sıralıyoruz
                sort($dates);
                //en son yüklenen tarihi buluyoruz
                //dump('en son yüklenen tarihi buluyoruz: '.end($dates));
                $filename = "kategoriler-".end($dates);
                //dump('çekeceğimiz dosyanın adı: '.$filename);

                if(Storage::disk('pixel-ftp')->exists('/categories/'.$filename.'.xlsx')){
                    $theFile = Storage::disk('pixel-ftp')->get('/categories/'.$filename.'.xlsx');
                    Storage::put('/file.xlsx',$theFile);
                    ReadXlsx::dispatch();
                }else{
                    throw new \Exception("excel file does not found !");
                }
                return ['success'=>1];
            }else{
                throw new \Exception("Ftp connection failed");
            }
        }catch (\Exception $e){
            return ['error'=>$e->getMessage()];
        }
    }
    public static function fileInfo($filePath)
    {
        return $filePath['filename'];
    }
}
