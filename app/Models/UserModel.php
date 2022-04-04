<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $table = 'student';
    protected $primaryKey = 'S_id';
    protected $allowedFields = ['S_id', 'name','surname','email','time','time_in','timeout'];
}
