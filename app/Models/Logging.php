<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Logging extends Model
{
    // protected $useTimestamps = true;
    protected $table = "logging";
    protected $fillable = ['name', 'value'];
    protected $primaryKey = 'id';
}