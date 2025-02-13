<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flight extends Model
{
    use HasFactory; public $timestamps = false;
    protected $primaryKey = 'Flight_ID';

    protected $fillable = ['Flight_ID', 'Aircraft_ID', 'Depature_Airport', 'Arrival_Airport', 'Depature_Time', 'Arrival_Time', 'Flight_Duration'];
}
