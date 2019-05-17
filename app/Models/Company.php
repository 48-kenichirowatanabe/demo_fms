<?php

namespace App\Models;

class Company extends BaseUuid
{
    protected $table = 'companies';

    protected $fillable = [
        'company_name', 'representive_name', 'zip_code', 'address', 'expire', 'expire2'
    ];

    public function companyUser()
    {
        return $this->belongsTo('App\Models\CompanyUserAuth', 'company_id', 'id');
    }
    
    public function projects()
    {
        return $this->hasMany('App\Models\Project', 'project_id', 'id');
    }

}
