<?php

namespace App\Models;

use CodeIgniter\Model;

class CommentsModel extends Model
{
    protected $table = 'jppascua_myguests';

    protected $allowedFields = ['name', 'surname', 'email', 'subject', 'message'];

    public function getComments()
    {       
        return $this->findAll();
    }
}