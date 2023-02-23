<?php

namespace App\Models;
use App\Models\Kelas;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Siswa extends Model
{
    use HasFactory;

    protected $guarded = ['nisn'];

    public function kelas()
    {
        return $this->belongsTo(Kelas::class);
    }
}
