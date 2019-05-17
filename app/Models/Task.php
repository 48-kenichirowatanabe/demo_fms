<?php

namespace App\Models;

class Task extends BaseUuid
{
    protected $table = 'tasks';
    
    protected $fillable = [
        'projects_id', 'name', 'content', 'started_at', 'ended_at', 'purchaseorder', 'invoice'
    ];

    public function project(){
        return $this->belongsTo('App\Models\Project', 'project_id', 'id');
    }

    public function taskCompanyPics()
    {
        return $this->hasMany('App\Models\TaskCompanyPic', 'taski_id', 'id');
    }

    public function taskPartnerPics()
    {
        return $this->hasMany('App\Models\TaskPartnerPic', 'task_id', 'id');
    }

}
