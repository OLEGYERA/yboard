<?php

namespace App\Models\Auto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ABrand extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'alias', 'old_val', 'fabricator_id'];
}
