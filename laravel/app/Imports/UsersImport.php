<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class UsersImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'fullname'  => $row['fullname'],
            'email'     => $row['email'],
            'phone'     => $row['phone'],
            'birthdate' => $row['birthdate'],
            'gender'    => $row['gender'],
            'address'   => $row['address'], 
            'password'  => bcrypt($row['password']),
        ]);
    }
}
