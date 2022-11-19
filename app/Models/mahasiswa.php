<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;

class mahasiswa extends Model
{
    use HasFactory;

    protected $fillable = ["nrp","nama","email","alamat"];

    protected $hidden = ["created_at","updated_at"];

    protected $table = 'mahasiswas';

    protected $casts = [
        "creates_at" => "datetime",
        "updated_at" => "datetime",
    ];

    protected $primaryKey = "id";
}

