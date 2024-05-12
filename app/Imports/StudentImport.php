<?php

namespace App\Imports;

use App\Models\Student;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
class StudentImport implements ToModel,WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Student([
            'std_name' => $row['std_name'],
            'std_id' => $row['std_id'],
            'std_batch' => $row['std_batch'],
            'std_program' => $row['std_program'],
            'std_fname' => $row['std_fname'],
            'std_mname' => $row['std_mname'],
            'std_nid' => $row['std_nid'],
            'std_lsemester' => $row['std_lsemester'],
            'std_cgpa' => $row['std_cgpa'],
            'std_tcredit' => $row['std_tcredit'],
            'std_phone' => $row['std_phone'],
            'std_email' => $row['std_email'],
            'std_certificate_no' => $row['std_certificate_no'],       
            'std_certificate_issue' => $row['std_certificate_issue'],   
            'std_publication_date' => $row['std_publication_date'],   
            
        ]);
    }
}
