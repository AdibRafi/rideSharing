<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Trip
 *
 * @property int $id
 * @property int $user_id
 * @property int $driver_id
 * @property int $is_started
 * @property int $is_complete
 * @property mixed|null $origin
 * @property mixed|null $destination
 * @property string|null $destination_name
 * @property mixed|null $driver_location
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Driver|null $driver
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Trip newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Trip newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Trip query()
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereDestination($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereDestinationName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereDriverId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereDriverLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereIsComplete($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereIsStarted($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereOrigin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Trip whereUserId($value)
 * @mixin \Eloquent
 */
class Trip extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $casts = [
        'origin' => 'array',
        'destination' => 'array',
        'driver_location' => 'array',
        'is_started' => 'boolean',
        'is_complete' => 'boolean'
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function driver()
    {
        return $this->belongsTo(Driver::class);
    }
}
