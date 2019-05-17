<?php

namespace App\Models;

class Partner extends BaseUuid
{   
    protected $table = 'partners';
    
    protected $fillable = [
        'partner_id', 'name', 'zip_code', 'address', 'tel', 'age',
        'sex', 'picture', 'occupations', 'academic', 'slack', 'chatwork', 'twitter', 'facebook', 'careersummary', 'jobcareer', 
        'portfolio', 'introduction', 'possible', 'skill', 'feature', 'language', 'qualification', 'relatedlinks', 'attachment' 
    ];

    public function taskPartnerPics()
    {
        return $this->hasMany('App\Models\TaskPartnerPic', 'user_id', 'id');
    }

    public function projectPartnerPics()
    {
        return $this->hasMany('App\Models\ProjectPartnerPic', 'user_id', 'id');
    }

    public function partnerAuth()
    {
        return $this->belongsTo('App\Models\PartnerAuth', 'partner_id', 'id');
    }
}
