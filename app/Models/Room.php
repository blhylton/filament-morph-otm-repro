<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

/**
 * @property-read int $id
 */
class Room extends Model
{
    use HasFactory;

    public function oneWeekProduct(): MorphOne
    {
        return $this->morphOne(Product::class, 'productable')
            ->ofMany([], fn ($q) => $q->where('duration', 7));
    }

    public function twoWeekProduct(): MorphOne
    {
        return $this->morphOne(Product::class, 'productable')
            ->ofMany([], fn ($q) => $q->where('duration', 14));
    }

    public function weekendProduct(): MorphOne
    {
        return $this->morphOne(Product::class, 'productable')
            ->ofMany([], fn ($q) => $q->where('duration', 2));
    }
}
