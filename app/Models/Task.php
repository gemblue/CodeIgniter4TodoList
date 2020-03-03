<?php

namespace App\Models;

use CodeIgniter\Model;

class Task extends Model
{
    protected $table      = 'task';
    protected $primaryKey = 'id';
    protected $allowedFields = ['title', 'is_done'];
    protected $useSoftDeletes = true;
}