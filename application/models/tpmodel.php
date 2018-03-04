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
        $query = "INSERT INTO users (companyname, email, phone, contactperson, password) values (?,?,?,?,?)";
        $values = [$arg['companyname'], $arg['email'], $arg['phone'], $arg['contactname'], $arg['password']];

        $this->db->query($query, $values);


    }
    public function login($email, $password)
    {
        $myquery = "SELECT * FROM users WHERE email=? AND password = ? AND approved=1  ";
        $values = array("$email", "$password");
        $query = $this->db->query($myquery, $values)->row_array();
        if ($query) {
            return $query;
        } else {
            return false;
        }
    }
    public function accountchecker($email, $password)
    {
        $myquery = "SELECT * FROM users WHERE email=? AND password = ? AND approved=0  ";
        $values = array("$email", "$password");
        $query = $this->db->query($myquery, $values)->row_array();
        if ($query) {
            return $query;
        } else {
            return false;
        }
    }
    public function search($text)
    {
        $query = "SELECT * FROM postings
                JOIN users 
                ON postings.user_id = users.id
                WHERE postings.title LIKE '%$text%'";
        $result = $this->db->query($query)->result_array();
        return $result;
    }
    public function mypage($id)
    {
        $query = "SELECT * FROM users
        JOIN postings
        ON users.id = postings.user_id
        WHERE users.id= $id
        ORDER BY postings.id DESC";
        $result = $this->db->query($query)->result_array();
        return $result;
    }
    public function allpostings()
    {
        $query = "SELECT * FROM users
        JOIN postings
        ON users.id = postings.user_id
        ORDER BY postings.id DESC";
        $result = $this->db->query($query)->result_array();
        return $result;
    }
    public function requestedpostings()
    {
        $query = "SELECT * FROM users
        JOIN postings
        ON users.id = postings.user_id
        WHERE postings.active=0
        ORDER BY postings.id DESC";
        $result = $this->db->query($query)->result_array();
        return $result;
    }
}
