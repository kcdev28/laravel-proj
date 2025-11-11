<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Resident extends Model
{
    protected $table = 'tbl_residents';
    protected $primaryKey = 'residentID';
    public $timestamps = true;
    
    const CREATED_AT = 'created_at';
    const UPDATED_AT = null;
    
    protected $fillable = [
        'userID',
        'first_name',
        'middle_name',
        'last_name',
        'suffix',
        'profile_image',
        'street',
        'area',
        'barangay',
        'city',
        'date_of_birth',
        'gender',
        'civil_status',
        'contact_no',
        'religion',
        'voter_status',
        'precint_no',
        'occupation',
        'employment_status',
        'special_group_status',
        'verify_img',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'userID', 'userID');
    }
}