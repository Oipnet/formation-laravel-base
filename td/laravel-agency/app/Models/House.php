<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use NumberFormatter;

class House extends Model
{
    use HasFactory;

    public function features(): BelongsToMany
    {
        return $this->belongsToMany(Feature::class)->withPivot('value');
    }

    public function media(): HasOne
    {
        return $this->hasOne(Media::class);
    }

    protected function getDisplayedPriceAttribute(): string
    {
        $numberFormateur = new NumberFormatter('fr_FR', NumberFormatter::CURRENCY);

        return $numberFormateur->formatCurrency($this->price_in_cents / 100, 'EUR');
    }
}
