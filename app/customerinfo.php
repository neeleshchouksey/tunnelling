<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class customerinfo extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'customer_name', 'customer_email', 'phone','country','company_name', 'job_title'
    ];
}
