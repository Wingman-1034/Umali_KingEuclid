<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

/**
 * Model: AdminModel
 * 
 * Automatically generated via CLI.
 */
class AdminModel extends Model {
    protected $table = 'users';
    protected $primary_key = 'id';

    public function __construct()
    {
        parent::__construct();
    }

    public function verifyAdmin($username, $password)
    {
        return $this->db->table($this->table)
                        ->where('email', $username)
                        ->where('password', $password) // Ensure to hash passwords properly
                        ->where('role', 'sAdmin')
                        ->get();
    }

    public function get_all()
    {
        return $this->db->table($this->table)->get_all();
    }
}