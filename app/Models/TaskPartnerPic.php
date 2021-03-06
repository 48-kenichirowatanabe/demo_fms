<?php

namespace App\Models;

class TaskPartnerPic extends BaseUuid
{
    protected $table = 'task_partner_pics';
    
    protected $fillable = [
        'user_id', 'task_id'
    ];

    public function task()
    {
        return $this->belongsTo('App\Models\Task', 'task_id', 'id');
    }

    public function partner()
    {
        return $this->belongsTo('App\Models\Partner', 'user_id', 'id');
    }
}
