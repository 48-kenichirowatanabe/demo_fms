<?php

namespace App\Models;

class CompanyUserAuth extends BaseUuid
{
    protected $table = 'company_user_auths';
    
    protected $fillable = [
       'company_user_role', 'email', 'password', 'remember_token', 'email_verfied_at'
    ];

    public function companyUser()
    {
        return $this->hasOne('App\Models\CompanyUser', 'auth_id', 'id');
    }

}
