<?php

namespace App\Models;

use CodeIgniter\Model;

class about extends Model
{
    protected $table = 'about_candra';
    protected $primaryKey = 'id';
    protected $allowedFields = ['name', 'age', 'ttl', 'address', 'telp'];
}
