<?php

namespace App\Models;

class ProjectCompanyPic extends BaseUuid
{
    protected $table = 'project_company_pics';
    
    protected $fillable = [
        'user_id', 'project_id'
    ];

    public function project()
    {
        return $this->belongsTo('App\Models\Project', 'project_id', 'id');
    }

    public function companyUser()
    {
        return $this->belongsTo('App\Models\CompanyUser', 'user_id', 'id');
    }
}
