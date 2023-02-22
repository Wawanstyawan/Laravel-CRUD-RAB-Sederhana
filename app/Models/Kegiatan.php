<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Kegiatan extends Model
{
    use HasFactory;
    protected $table = 'kegiatans';
    protected $fillable = [
        'id',
    	'user_id',
    	'nama_kegiatan', 
    	'penanggung_jawab', 
    	'no_hp',
    	'tgl_kegiatan',
    	'alamat_kegiatan',
    ];

    public function kebutuhans()
    {
        return $this->HasMany(Kebutuhan::class);
    }
}
