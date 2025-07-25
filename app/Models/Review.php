<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
protected $fillable = [
'user_id',
'product_id',
'rating',
'imagephoto', // Added field for image photo
'comment',
];

public function user()
{
return $this->belongsTo(User::class);
}

public function product()
{
return $this->belongsTo(Product::class);
}
}