<?php

namespace App\Models;

class ProjectRoleRelation extends BaseUuid
{
    protected $table = 'project_role_relations';
    
    protected $fillable = [
        'project_id', 'superior', 'accounting', 'manager'
    ];

    public function project()
    {
        return $this->belongsTo('App\Models\Project', 'project_id', 'id');
    }
}
