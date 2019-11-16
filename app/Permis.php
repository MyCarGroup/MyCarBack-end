<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permis extends Model
{
    protected $fillable = [
        'label',
        'h_drive_price',
        'h_code_price',
        'created_at',
        'updated_at', ];
}
