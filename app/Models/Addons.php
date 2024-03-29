<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Addons extends Model
{
    use HasFactory, SoftDeletes;

    protected $table = 'addons';

    protected $guarded = [];

    public function produkAddons(){
        return $this->hasMany(ProdukAddons::class);
    }
}
