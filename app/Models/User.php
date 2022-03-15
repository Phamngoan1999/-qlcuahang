<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function roles()
    {
        return $this->belongsToMany(
            Role::class,
            'tbl_taikhoan_roles',
            'iMa_tai_khoan',
            'iMa_role'
        );
    }

    public function binhluan()
    {
        return $this->hasMany(BinhLuan::class, 'iMa_khach_hang','id');
    }

    public function attachRole(array $roles)
    {
        return $this->roles()->attach($roles);
    }

    public function getUserRoleCustomer()
    {
        $query = User::whereHas('roles', function($query){
                $query->where('iMa_role', '2');
            }
        )->paginate(10);
        return $query;
    }


    public function hasPermission($permission)
    {
        foreach ($this->roles as $role){
            if($role->hasPermission($permission)){
                return true;
            }
        }
        return false;
    }

    public function hasRole($role)
    {
        return $this->roles()->where('ten_roles', $role)->exists();
    }

    public function isSuperAdmin()
    {
        return $this->hasRole('super_admin');
    }
}
