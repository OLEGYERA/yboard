<?php

namespace App\Models\Auto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AFabricator extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'rtitle', 'utitle', 'alias', 'old_val'];
}
