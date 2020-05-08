<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    protected $fillable =[
        'name',
        'description',
        'project_type',
        'status',
        'start date',
        'project_sponsor'
    ];

    public function users(){
        return $this->belongsToMany('App\User');
    }

    public function company(){
        return $this->belongsTo('App\Company');
    }

}
