<?php

namespace App\Models;

class PartnerAuth extends BaseUuid
{   
    protected $table = 'partner_auths';
    
    protected $fillable = [
        'email','password', 'remember_token', 'email_verfied_at'
    ];

    public function partner()
    {
        return $this->hasOne('App\Models\Partner', 'partner_id', 'id');
    }
    

}
