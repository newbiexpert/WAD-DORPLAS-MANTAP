<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Status extends Model
{
    use HasFactory;

    public $table = 'status';
    public $timestamps = false;
    protected $guarded = ['id'];

    public function donorNote(){
        return $this->hasMany(DonorNote::class);
    }
}