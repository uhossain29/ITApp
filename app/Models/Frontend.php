<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Frontend extends Model
{
    use HasFactory;
    protected $fillable = [
        'student_name',
  'profile_photo','signature_photo',

    ];
    public function withdepartment()
    {
        return $this->hasOne('App\Models\Department','id','department_id');
    }
    public function withdesignation()
    {
        return $this->hasOne('App\Models\Designation','id','designation_id');
    }
    public function withfaculty()
    {
        return $this->hasOne('App\Models\Faculty','id','faculty_id');
    }

}
