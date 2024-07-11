<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppSetting extends Model
{
    use HasFactory;

    protected $primaryKey = 'data_key';
    public $incrementing = false;
    protected $fillable = [
        'data_key',
        'data_value'
    ];
}
