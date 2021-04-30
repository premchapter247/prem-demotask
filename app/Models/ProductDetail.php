<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductDetail extends Model
{
    use HasFactory,SoftDeletes;
    public $fillable = [ 'size', 'color','product_id' ];
    /**
     * The attributes that should be mutated to dates.
     * scratchcode.io
     * @var array
     */
    protected $dates = [ 'deleted_at' ];
    
    public function Product()
    {
        return $this->belongsTo(Product_detail::class);
    }
}
