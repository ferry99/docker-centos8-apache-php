<?php

namespace App;

use Illuminate\Database\Eloquent\Model;




class Trans extends Model
{
    public function insertTrans(){
        $arrToInsert = [
            "test" => "test"
        ];
        $statusInsert = \DB::table('test')->insert($arrToInsert);
    }
}