<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class departmen extends Model
{
    
    protected $guarded=[];
    
        public function newRec ($data){
            $this->create($data);
        }
    
}
