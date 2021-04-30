<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory,SoftDeletes;
    public $fillable = [ 'title', 'description','brand' ];
    /**
     * The attributes that should be mutated to dates.
     * scratchcode.io
     * @var array
     */
    protected $dates = [ 'deleted_at' ];
    
    public function Product_detail()
    {
        return $this->hasOne(Product_detail::class);
    }
    
}
