<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JenisKelamin extends Model
{
    protected $guarded = [];
    use HasFactory;

    public function WaliCalon()
    {
        return $this->hasOne(WaliCalonSiswa::class, 'jenis_kelamin_id', 'id');
    }

    public function CalonSiswa()
    {
        return $this->hasOne(CalonSiswa::class, 'jenis_kelamin_id', 'id');
    }

    public function SiswaJenisKelamin()
    {
        return $this->hasOne(Siswa::class, 'jenis_kelamin_id', 'id');
    }

    public function WaliSiswa()
    {
        return $this->hasOne(WaliSiswa::class, 'jenis_kelamin_id', 'id');
    }

    public function ProfilePendidik()
    {
        return $this->hasMany(ProfilePendidik::class, 'jenis_kelamin_id', 'id');
    }
}
