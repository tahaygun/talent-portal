<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Tpmodel extends CI_Model
{
    public function highlightedpostings()
    {
        $query = "SELECT * FROM users
        JOIN postings
        ON users.id = postings.user_id
        WHERE postings.highlighted=1
        ORDER BY postings.id DESC";
        $result = $this->db->query($query)->result_array();
        return $result;
    }
    public function insertuser($arg)
    {
        $query = "INSERT INTO users (companyname, email, phone, contactperson, password) values (?,?,?,?)";
        $values = [$arg['companyname'], $arg['email'], $arg['phone'], $arg['contactname'], $arg['password']];

        $this->db->query($query, $values);


    }
}
