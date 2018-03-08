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
    public function insertuser($arg, $path)
    {
        $query = "INSERT INTO users (companyname, email, phone, contactperson, companylogo, password) values (?,?,?,?,?,?)";
        $values = [$arg['companyname'], $arg['email'], $arg['phone'], $arg['contactperson'], $path, $arg['password']];

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
        $text = $this->db->escape_like_str($text1['searchinput']);
        $category = $this->db->escape_like_str($text1['category']);
        $query = "SELECT users.id as userid, users.companyname, users.companylogo, postings.title, postings.id as postid, postings.description, postings.tags, postings.identifies FROM users
                JOIN  postings
                ON postings.user_id = users.id
                WHERE postings.active = 1 
                AND
                (postings.tags LIKE  '%$category%'
                AND
                (postings.tags LIKE '%$text%'
                OR
                postings.title LIKE '%$text%'
                OR
                postings.about LIKE '%$text%'
                OR
                postings.description LIKE '%$text%'
                OR
                users.companyname LIKE '%$text%'))";
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
        $query = "SELECT users.id as userid, users.companyname, users.companylogo, postings.title, postings.id as postid, postings.about, postings.description, postings.tags, postings.identifies, postings.active, postings.highlighted FROM users
        JOIN postings
        ON users.id = postings.user_id
        ORDER BY postings.id DESC";
        $result = $this->db->query($query)->result_array();
        return $result;
    }
    public function allcompanies()
    {
        $query = "SELECT users.id as userid, users.companyname, users.companylogo, postings.title, postings.id as postid, postings.about, postings.description, postings.tags, postings.identifies FROM users
        LEFT JOIN postings
        ON users.id = postings.user_id
        WHERE users.adminlevel = 3
        GROUP BY users.id
        ORDER BY postings.id DESC";
        $result = $this->db->query($query)->result_array();
        return $result;
    }
    public function companyrequests()
    {
        $query = "SELECT users.id as userid, users.companyname, users.companylogo, postings.title, postings.id as postid, postings.about, postings.description, postings.tags, postings.identifies FROM users
        LEFT JOIN postings
        ON users.id = postings.user_id
        WHERE users.approved = 0
        GROUP BY users.id
        ORDER BY postings.id DESC";
        $result = $this->db->query($query)->result_array();
        return $result;
    }
    public function trustedcompanies()
    {
        $query = "SELECT users.id as userid, users.companyname, users.companylogo, postings.title, postings.id as postid, postings.about, postings.description, postings.tags, postings.identifies FROM users
        LEFT JOIN postings
        ON users.id = postings.user_id
        WHERE users.trusted = 1
        GROUP BY users.id
        ORDER BY postings.id DESC";
        $result = $this->db->query($query)->result_array();
        return $result;
    }
    public function companyeditpage($id)
    {
        $query = "SELECT * FROM users
        WHERE users.id =$id
        ORDER BY users.id DESC";
        $result = $this->db->query($query)->row_array();
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
    public function aboutcompany($id)
    {
        $query = "SELECT * FROM users
                JOIN postings
                ON postings.user_id = users.id
                WHERE users.id=?";
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
    public function insertpostings($arg, $path)
    {
        $query = "INSERT INTO `postings`(`user_id`, `title`, `description`, `about`, `identifies`, `tags`, `startdate`, `enddate`, `link`, `support_image`) VALUES (?,?,?,?,?,?,?,?,?,?)";
        $values = [$arg['tp-user_id'], $arg['tp-title'], $arg['tp-description'], $arg['tp-about'], $arg['tp-identifies'], $arg['tp-tags'], $arg['tp-startdate'], $arg['tp-enddate'], $arg['tp-link'], $path];

        $this->db->query($query, $values);


    }
    public function insertpostingadmin($arg, $path)
    {
        $query = "INSERT INTO `postings`(`user_id`, `title`, `description`, `about`, `identifies`, `tags`, `startdate`, `enddate`, `link`, `highlighted`, `active`, `support_image`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        $values = [$arg['tp-user_id'], $arg['tp-title'], $arg['tp-description'], $arg['tp-about'], $arg['tp-identifies'], $arg['tp-tags'], $arg['tp-startdate'], $arg['tp-enddate'], $arg['tp-link'], $arg['highlighted'], $arg['active'], $path];

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

    public function deletenow($id)
    {
        $query = "DELETE  FROM postings WHERE id=?";
        $values = [$id];
        $result = $this->db->query($query, $values);
        return $result;
    }

    public function companypostings($id)
    {
        $query = "SELECT * FROM users
        JOIN postings
        ON users.id = postings.user_id
        WHERE users.id=$id
        ORDER BY postings.id DESC";
        $result = $this->db->query($query)->result_array();
        return $result;
    }


    public function adminlists($id)

    {
        $query = "SELECT * FROM users
        WHERE adminlevel = ?";
        $values = 2;
        $result = $this->db->query($query, $values)->result_array();
        return $result;
    }


    public function admininfo($id)
    {
        $query = "SELECT * FROM users
        WHERE users.id = ?";
        $values = $id;
        $result = $this->db->query($query, $values)->result_array();
        return $result;
    }

    public function unhighlight($id)
    {
        $query = "UPDATE `postings` SET `highlighted`=0 WHERE postings.id= $id";
        $this->db->query($query);
    }
    public function highlight($id)
    {
        $query = "UPDATE `postings` SET `highlighted`=1 WHERE postings.id= $id";
        $this->db->query($query);
    }
    public function approve($id)
    {
        $query = "UPDATE `postings` SET `active`=1 WHERE postings.id= $id";
        $this->db->query($query);
    }
    public function approvecompany($id)
    {
        $query = "UPDATE `users` SET `approved`=1 WHERE users.id= $id";
        $this->db->query($query);
    }
    public function updateabout($arg)
    {
        $query = "UPDATE `users` SET `about`=? WHERE id= ?";
        $values = [$arg['tp-about'], $arg['tp-user_id']];
        $this->db->query($query, $values);
    }
    public function editcompanywlogo($arg, $path)
    {
        $query = "UPDATE `users` SET `companyname`= ? ,`email`= ?,`contactperson`=?,`phone`= ?, `approved`=?, `trusted`=?, `companylogo`=? WHERE users.id= ?";
        $values = [$arg['companyname'], $arg['email'], $arg['contactperson'], $arg['phone'], $arg['approved'], $arg['trusted'], $path, $arg['userid']];

        $this->db->query($query, $values);
    }
    public function editcompany($arg)
    {
        $query = "UPDATE `users` SET `companyname`= ? ,`email`= ?,`contactperson`=?,`phone`= ?, `approved`=?, `trusted`=?  WHERE users.id= ?";
        $values = [$arg['companyname'], $arg['email'], $arg['contactperson'], $arg['phone'], $arg['approved'], $arg['trusted'], $arg['userid']];

        $this->db->query($query, $values);
    }
    public function deletecompany($id)
    {
        $query = "DELETE FROM users WHERE id=?";
        $values = [$id];
        $result = $this->db->query($query, $values);
    }
    public function deletecompanypostings($id)
    {
        $query = "DELETE FROM postings WHERE user_id=?";
        $values = [$id];
        $result = $this->db->query($query, $values);
        return $result;
    }
}

 
