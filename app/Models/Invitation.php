<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Invitation extends Model
{
    use HasFactory;

    public float $value = 0;
    public float $cost = 0;

    public int $draw = 0;

    protected $table = 'band_festival';

    public function band(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Band::class);
    }

    public function festival(): \Illuminate\Database\Eloquent\Relations\BelongsTo
    {
        return $this->belongsTo(Festival::class);
    }
}
