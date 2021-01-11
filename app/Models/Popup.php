<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Popup extends Model
{
    use HasFactory;
    protected $fillable = ['name', 'bgColor', 'title', 'infoText', 'fieldName', 'buttonText', 'containerWidth', 'containerHeight', 'items'];
}
