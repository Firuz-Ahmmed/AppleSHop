<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class InvoiceProduct extends Model
{
    protected $fillable = [
        'qty', 'sale_price', 'invoice_id', 'product_id', 'user_id',
    ];
    public function product(): BelongsTo
    {
        return $this->belongsTo(Product::class);
    }
}
