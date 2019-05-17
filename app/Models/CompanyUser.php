<?php

namespace App\Models;

class CompanyUser extends BaseUuid
{
    protected $table = 'company_users';
    
    protected $fillable = [
        'auth_id', 'company_id', 'name', 'image'
    ];

    public function companyUserAuth()
    {
        return $this->belongsTo('App\Models\CompanyUserAuth', 'auth_id', 'id');
    }

    public function company()
    {
        return $this->belongsTo('App\Models\Company', 'auth_id', 'id');
    }

    public function userRoleRelation()
    {
        return $this->hasOne('App\Models\UserRoleRelation', 'user_id', 'id');
    }

    public function projectCompanyPics()
    {
        return $this->hasMany('App\Models\ProjectCompanyPic', 'user_id', 'id');
    }

    public function taskCompanyPics()
    {
        return $this->hasMany('App\Models\TaskCompanyPic', 'id', 'id');
    }
    
}
