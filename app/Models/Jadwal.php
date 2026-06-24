<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Jadwal extends Model
{
    //
    protected $table="jadwal";
        
    protected $primaryKey = 'id';
    public $incrementing = true; 
    protected $keyType = 'string';

    protected $fillable=['kode_matakuliah','nidn', 'kelas', 'hari', 'jam'];
}
