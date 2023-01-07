<?php

namespace App\Models;

use App\Enums\Colors;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Feature extends Model
{
    use HasFactory;

    public function scopeRequire(Builder $query)
    {
        $query->where('is_required', '=', true);
    }

    protected function color(): Attribute
    {
        return Attribute::make(
            get: fn ($value) => Colors::from($value),
        );
    }
}
