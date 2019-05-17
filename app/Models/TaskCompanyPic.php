<?php

namespace App\Models;

class TaskCompanyPic extends BaseUuid
{
    protected $table = 'task_company_pics';
    
    protected $fillable = [
        'user_id', 'task_id'
    ];

    public function companyUser()
    {
        return $this->belongsTo('App\Models\CompanyUser', 'id', 'id');
    }

    public function task()
    {
        return $this->belongsTo('App\Models\Task', 'taski_id', 'id');
    }
}
