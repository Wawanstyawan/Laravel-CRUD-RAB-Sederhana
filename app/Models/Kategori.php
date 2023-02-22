<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Kategori extends Model
{
    use HasFactory;
    protected $table = 'kategoris';
	protected $fillable = [
		'id',
		'nama_kategori',
		'created_at', 
		'updated_at', 
	];

	public function katalogs()
	{
		return $this->HasMany(Katalog::class);
	}
}
