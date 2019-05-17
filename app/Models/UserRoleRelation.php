<?php

namespace App\Models;

class UserRoleRelation extends BaseUuid
{
    protected $table = 'user_role_relations';
    
    protected $fillable = [
        'user_id', 'superior', 'accounting', 'manager'
    ];

    public function companyUser()
    {
        return $this->belongsTo('App\Models\CompanyUser', 'user_id', 'id');
    }
}
