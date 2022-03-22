<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    use HasFactory;

    protected $table = 'tbl_roles';

    protected $fillable = [
        'ten_roles',
        'vai_tro'
    ];

    public function permissions()
    {
        return $this->belongsToMany(
            Permission::class,
            'tbl_role_quyen',
            'iMa_role',
            'iMa_quyen'
        );
    }

    public function hasPermission($permission)
    {
        return $this->permissions()->where('ten_quyen', $permission)->exists();
    }
}
