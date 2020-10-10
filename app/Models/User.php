<?php 
namespace App\Models;
use CodeIgniter\Model;

class User extends Model
{
    protected $DBGroup = 'default';

    protected $table      = 'user';
    protected $primaryKey = 'user_id';
    protected $returnType = 'array';

    protected $useTimestamps = false;
   /*  protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at'; */

    protected $allowedFields = ['user_name', 'user_email'];

    
}