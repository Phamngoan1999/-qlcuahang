<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
    use HasFactory;
    protected $table = 'tbl_quyen';

    protected $fillable = [
        'ten_quyen'
    ];

    public function roles()
    {
        return $this->belongsToMany(
            Role::class,
            'tbl_role_quyen',
            'iMa_quyen',
            'iMa_role');
    }
}
