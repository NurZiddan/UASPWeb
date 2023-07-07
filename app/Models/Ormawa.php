<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Ormawa extends Model
{
    use HasFactory;
    protected $fillable = ['id','nor','administrasi','keaktifan','proker','jang','kebersihan'];
    protected $table = 'ormawa';
}
