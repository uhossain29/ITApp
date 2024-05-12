<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Administration extends Model
{
    use HasFactory;
    protected $fillable = [
    'name',
    'designation',
    'sub_office_id',
    'email',
    'mobile',
    'details',
    'sequence',
    'user_id',
    'photo',
    ];
    public function withdesignation()
{
    return $this->hasOne('App\Models\administrationdesignation','id','designation');
}
public function withsuboffice()
{
    return $this->hasOne('App\Models\administrationsuboffice','id','sub_office_id');
}
}
