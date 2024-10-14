<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Products extends Model
{   
    use HasFactory;
    protected $primarykey ="p_id";
    // protected $hidden =['created_at' , 'updated_at'];

public function varieties():HasOne

{

    return $this->HasOne(varieties::class , 'p_id', 'id');

}

}