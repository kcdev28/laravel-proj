<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class User extends Authenticatable
{
    use HasFactory;

    protected $table = 'tbl_user';  // ✅ must match your database table name
    protected $primaryKey = 'userID';   // or whatever your primary key is
    public $timestamps = true;
    const UPDATED_AT = null;
    const CREATED_AT = 'created_at';
    protected $fillable = [
        'username',
        'password',
        'role',
        
    ];

   
}

