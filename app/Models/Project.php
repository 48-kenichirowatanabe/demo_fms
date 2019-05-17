<?php

namespace App\Models;

class Project extends BaseUuid
{
    protected $table = 'projects';
    
    protected $fillable = [
        'company_id', 'name', 'detail', 'started_at', 'ended_at'
    ];

    public function company()
    {
        return $this->belongsTo('App\Models\Company', 'company_id', 'id');
    }

    public function task()
    {
        return $this->hasOne('App\Models\Task', 'project_id', 'id');
    }

    public function projectRoleRelation()
    {
        return $this->hasOne('App\Models\ProjectRoleRelation', 'project_id', 'id');
    }

    public function projectPartnerPics()
    {
        return $this->hasMany('App\Models\ProjectPartnerPic', 'project_id', 'id');
    }

    public function projectCompanyPics()
    {
        return $this->hasMany('App\Models\ProjectCompanyPic', 'project_id', 'id');
    }
}