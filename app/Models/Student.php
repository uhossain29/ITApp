<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
class Student extends Model
{
    use SoftDeletes;
    use HasFactory;
    protected $fillable = [
        'std_name',
        'std_id',
        'std_fname',
        'std_mname',
        'std_nid',
        'std_dob',
        'std_email',
        'std_phone',
        'std_batch',
        'std_program',
        'std_lsemester',
        'std_cgpa',
        'std_tcredit',
        'std_photo',
        'std_certificate_no',
        'std_certificate_issue',
        'std_publication_date',
    ];
    protected $primaryKey = 'id';

}
