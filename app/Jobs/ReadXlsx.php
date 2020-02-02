<?php

namespace App\Jobs;
use App\Models\Category;
use Rap2hpoutre\FastExcel\FastExcel;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;
use Illuminate\Support\Facades\Storage;

class ReadXlsx implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;

    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    public function handle()
    {
        $rows = (new FastExcel)->import('../storage/app/file.xlsx');
        foreach ($rows as $row){
            foreach ($row as $ro){
                //dd($ro);
                if(!empty($ro)){
                    $df = Category::updateOrCreate([
                        'name' => $ro
                    ],[
                        'parent_id' => isset($df) ? $df->id : null,
                        'name' => $ro,
                        'type' => preg_replace('/[^0-9]/', '', array_search($ro, $row)),
                    ]);
                }
            }
            unset($df);
        }
        //dump($rows);
    }
}
