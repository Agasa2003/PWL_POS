<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class UserModel extends Model
{
    use HasFactory;

    protected $table = 'm_user'; // mendefinisikan nama tabel yang digunakan untuk model ini
    protected $primaryKey = 'user_id'; // Mendefisiniskan primary key dari tabel yang digunakan
}
