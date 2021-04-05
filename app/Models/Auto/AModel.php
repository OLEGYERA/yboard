<?php

namespace App\Models\Auto;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AModel extends Model
{
    use HasFactory;

    protected $fillable = ['title', 'old_val', 'brand_pivot_transport_id', 'parent_id', 'hasChild'];
}
