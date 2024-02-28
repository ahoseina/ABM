<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Address extends Model
{
    use HasFactory;

    protected $fillable = [
        "title",
        "cellphone",
        "postalcode",
        "longitude",
        "latitude",
        "province",
        "city",
        "address",
        "name"
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
