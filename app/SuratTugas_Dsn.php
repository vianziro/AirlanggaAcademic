<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SuratTugas_Dsn extends Model
{

    protected $table = 'surat_tugas_dosen';
    protected $primaryKey = 'nip';
    protected $fillable = [
    'nip',
    'surat_id',
   ];

 
}

  

