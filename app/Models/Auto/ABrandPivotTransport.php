<?php

namespace App\Models\Auto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ABrandPivotTransport extends Model
{
    use HasFactory;

    protected $fillable = ['transport_id', 'brand_id'];
}
