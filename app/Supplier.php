<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    protected $table = 'Supplier';
    protected $primaryKey = 'kd_supplier';
    protected $fillable = ['nama_supplier', 'alamat_supplier', 'telp_supplier'];
}
 