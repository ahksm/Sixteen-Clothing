<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory;
    use SoftDeletes;

    protected $guarded = [];

    protected $with = ['reviews.replies', 'rate'];

    public function reviews()
    {
        return $this->hasMany(Review::class)->whereNull('parent_id');
    }

    public function rate()
    {
        return $this->hasMany(Rate::class);
    }

    public function countReviews()
    {
        return Review::where('product_id', $this->id)->count();
    }

    public function rateAvg()
    {
        return number_format($this->rate()->avg('rating'), 1);
    }
}
