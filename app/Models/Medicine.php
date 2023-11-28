<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Medicine extends Model
{
    use HasFactory;
     public function company(){
        return $this->belongsTo(Companies::class,'companie_id','id');
    }
     public function category(){
        return $this->belongsTo(Category::class);
    }
     public function supplier(){
        return $this->belongsTo(Supplier::class);
    }
     public function dose(){
        return $this->belongsTo(Dose::class);
    }
}
