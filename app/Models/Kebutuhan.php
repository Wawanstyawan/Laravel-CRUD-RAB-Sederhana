<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Kebutuhan extends Model
{
    use HasFactory;
    protected $table = 'kebutuhans';
    protected $fillable = [
        'id',
    	'kegiatan_id',
    	'no', 
    	'urn_kebutuhan', 
    	'kuantitas', 
    	'harga_satuan',
    	'sumber_barang',
    ];

    public function kegiatan()
    {
        return $this->belongsTo(Kegiatan::class);
    }
}
