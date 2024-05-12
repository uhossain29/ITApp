<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Programe extends Model
{
    use HasFactory;
    protected $fillable = [

        'department_id',
        'programe_name',

        
    ];
    public function withdepartmentmodel()
    {
        return $this->hasOne('App\Models\Department','id','department_id');
    }
}
