<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

use Illuminate\Support\Facades\Hash;

class User extends Authenticatable
{
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $table = 'staffs';
    public $timestamps = false;
    protected $fillable = [
        'id', 'role_id', 'staff_name', 'email', 'password', 'phone', 'llandline', 'other_contact', 'emergency_contact', 'licence_id', 'expiration_date', 'inshurance_type', 'urt', 'ni', 'contract_start_date', 'contract_end_date', 'profile_image','team_id','status','added_date','is_staff','color_code','company_id'
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



    public function team()
    {
        return $this->hasOne(Team::class,'id','team_id');
    }
    public function role()
    {
        return $this->hasOne(Role::class,'id','role_id');
    }

    public function address()
    {
        return $this->hasOne(StaffAddress::class,'staff_id','id');
    }

    public function company()
    {
        return $this->hasOne(Company::class,'id','company_id');
    }

}
