<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Katalog extends Model
{
    use HasFactory;
    protected $table = 'katalogs';
    protected $fillable = [
        'id',
        'kategori_id', 
        'nama_katalog', 
        'harga',
        'description',
        'link_referensi',
        'foto',
    ];
	
	public function kategori()
    {
        return $this->belongsTo(Kategori::class);
    }

}
