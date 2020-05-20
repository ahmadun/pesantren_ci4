<?php namespace App\Models;
use CodeIgniter\Model;

class DataSantri_m extends Model
{
    protected $table = 'santri';
    // protected $allowedFields = ['title', 'slug', 'body'];

    public function insert_santri($data){
        return $this->db->table($this->table)->insert($data);
    } 
}