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
    // public function search($match)
    // {
    //     $this->db->like('title', $match);
    //     $this->db->or_like('description', $match);
    //     $this->db->or_like('about', $match);
    //     $query = $this->db->get('postings');
    //     return $query->result_array();
    // }
    public function search($text1)
    {
        $text = $this->db->escape_like_str($text1);
        $query = "SELECT * FROM postings
                JOIN users 
                ON postings.user_id = users.id
                WHERE postings.active = 1 
                AND 
                postings.tags LIKE '%$text%'
                OR
                postings.title LIKE '%$text%'";
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
    public function allcompanies()
    {
        $query = "SELECT * FROM users
        JOIN postings
        ON users.id = postings.user_id
        GROUP BY users.companyname
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
    public function activepostings()
    {
        $query = "SELECT * FROM users
        JOIN postings
        ON users.id = postings.user_id
        WHERE postings.active=1
        ORDER BY postings.id DESC";
        $result = $this->db->query($query)->result_array();
        return $result;
    }

    public function details($id)
    {
        $query = "SELECT * FROM users
                JOIN postings
                ON postings.user_id = users.id
                WHERE postings.id=?";
        $values = [$id];
        $result = $this->db->query($query, $values)->row_array();
        return $result;
    }
    public function editinfo($id)
    {
        $query = "SELECT * FROM users
                 JOIN postings
                ON postings.user_id = users.id
                 WHERE postings.id=?";
        $values = [$id];
        $result = $this->db->query($query, $values)->row_array();
        return $result;
    }
    public function insertpostings($arg)
    {
        $query = "INSERT INTO `postings`(`user_id`, `title`, `description`, `about`, `identifies`, `tags`, `startdate`, `enddate`, `link`) VALUES (?,?,?,?,?,?,?,?,?)";
        $values = [$arg['tp-user_id'], $arg['tp-title'], $arg['tp-description'], $arg['tp-about'], $arg['tp-identifies'], $arg['tp-tags'], $arg['tp-startdate'], $arg['tp-enddate'], $arg['tp-link']];

        $this->db->query($query, $values);


    }
    public function edit($arg)
    {
        $query = "UPDATE `postings` SET `title`= ? ,`description`= ?,`about`=?,`identifies`= ?,`tags`=?,`startdate`=?,`enddate`=?,`link`=? WHERE postings.id= ?";
        $values = [$arg['tp-title'], $arg['tp-description'], $arg['tp-about'], $arg['tp-identifies'], $arg['tp-tags'], $arg['tp-startdate'], $arg['tp-enddate'], $arg['tp-link'], $arg['tp-posting_id']];

        $this->db->query($query, $values);


    }
    public function editadmin($arg)
    {
        $query = "UPDATE `postings` SET `title`= ? ,`description`= ?,`about`=?,`identifies`= ?,`tags`=?,`startdate`=?,`enddate`=?,`active`=?, `highlighted`=?,`link`=? WHERE postings.id= ?";
        $values = [$arg['tp-title'], $arg['tp-description'], $arg['tp-about'], $arg['tp-identifies'], $arg['tp-tags'], $arg['tp-startdate'], $arg['tp-enddate'], $arg['tp-active'], $arg['tp-highlighted'], $arg['tp-link'], $arg['tp-posting_id']];

        $this->db->query($query, $values);


    }
    public function newadmin($arg)
    {
        $query = "INSERT INTO users (companyname, email, password, adminlevel, approved) values (?,?,?,?,?)";
        $values = [$arg['name'], $arg['email'], $arg['password'], $arg['level'], 1];
        $this->db->query($query, $values);
    }

    public function deleteinfo($id)
    {
        $query = "DELETE  FROM postings WHERE id=?";
        $values = [$id];
        $result = $this->db->query($query, $values);
        return $result;
    }


}
