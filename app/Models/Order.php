<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;

/**
 * Class Order
 *
 * Represents an order in the application.
 *
 * @package App\Models
 */
class Order extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = ['user_id', 'total_amount'];

    /**
     * Get the user associated with the order.
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo The user model relationship.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the order details associated with the order.
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany The order details model relationship.
     */
    public function orderDetails()
    {
        return $this->hasMany(OrderDetail::class);
    }
}
