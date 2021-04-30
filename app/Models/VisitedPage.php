<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VisitedPage extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function visitor()
    {
        return $this->belongsTo(Visitor::class);
    }
}
