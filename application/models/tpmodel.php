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
    public function checkpassword($arg)
    {
        $myquery = "SELECT * FROM users WHERE password = ?  ";
        $values = [$arg];
        $query = $this->db->query($myquery, $values)->row_array();
        if ($query) {
            return $query;
        } else {
            return false;
        }
    }
    public function changepassword($arg)
    {
        $query = "UPDATE `users` SET `password`=? WHERE id= ?";
        $values = [$arg['about'], $arg['user_id']];
        $this->db->query($query, $values);
    }

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
        $query = "SELECT users.id as userid, users.companyname, users.companylogo, postings.title, postings.id as postid, users.about, postings.description, postings.tags, postings.identifies FROM users
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
    public function jobsbycategory($arg)
    {
        $text = $this->db->escape_like_str($arg);
        $query = "SELECT * FROM users
        JOIN postings
        ON users.id = postings.user_id
        WHERE postings.active=1
        AND postings.tags LIKE  '%$text%'
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
    public function insertposting($arg, $path)
    {
        $query = "INSERT INTO `postings`(`user_id`, `title`, `description`, `about`, `identifies`, `tags`, `startdate`, `enddate`, `link`, `support_image`) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        $values = [$arg['user_id'], $arg['title'], $arg['description'], $arg['about'], $arg['identifies'], $arg['tags'], $arg['startdate'], $arg['enddate'], $arg['link'], $path];

        $this->db->query($query, $values);
    }
    public function insertpostingtrusted($arg, $path)
    {
        $query = "INSERT INTO `postings`(`user_id`, `title`, `description`, `about`, `identifies`, `tags`, `startdate`, `enddate`, `vacancy`, `link`, `support_image`) VALUES (?,?,?,?,?,?,?,?,?,?,?)";
        $values = [$arg['user_id'], $arg['title'], $arg['description'], $arg['about'], $arg['identifies'], $arg['tags'], $arg['startdate'], $arg['enddate'], $arg['vacancy'], $arg['link'], $path];

        $this->db->query($query, $values);
    }
    public function insertpostingadmin($arg, $path)
    {
        $query = "INSERT INTO `postings`(`user_id`, `title`, `description`, `about`, `identifies`, `tags`, `startdate`, `enddate`, `link`, `highlighted`, `active`, `support_image`) VALUES (?,?,?,?,?,?,?,?,?,?,?,?)";
        $values = [$arg['user_id'], $arg['title'], $arg['description'], $arg['about'], $arg['identifies'], $arg['tags'], $arg['startdate'], $arg['enddate'], $arg['link'], $arg['highlighted'], $arg['active'], $path];

        $this->db->query($query, $values);


    }
    public function editpost($arg)
    {
        $query = "UPDATE `postings` SET `title`= ? ,`description`= ?,`about`=?,`identifies`= ?,`active`= ?,`tags`=?,`startdate`=?,`enddate`=?,`link`=? WHERE postings.id= ?";
        $values = [$arg['title'], $arg['description'], $arg['about'], $arg['identifies'], $arg['active'], $arg['tags'], $arg['startdate'], $arg['enddate'], $arg['link'], $arg['posting_id']];

        $this->db->query($query, $values);
    }
    public function editposttrusted($arg)
    {
        $query = "UPDATE `postings` SET `title`= ? ,`description`= ?,`about`=?,`identifies`= ?,`active`= ?,`tags`=?,`startdate`=?,`enddate`=?,`vacancy`=?,`filled_vacancy`=?,`link`=? WHERE postings.id= ?";
        $values = [$arg['title'], $arg['description'], $arg['about'], $arg['identifies'], $arg['active'], $arg['tags'], $arg['startdate'], $arg['enddate'], $arg['vacancy'], $arg['filled_vacancy'], $arg['link'], $arg['posting_id']];

        $this->db->query($query, $values);
    }

    public function editadmin($arg)
    {
        $query = "UPDATE `postings` SET `title`= ? ,`description`= ?,`about`=?,`identifies`= ?,`tags`=?,`startdate`=?,`enddate`=?,`active`=?, `highlighted`=?,`link`=? WHERE postings.id= ?";
        $values = [$arg['title'], $arg['description'], $arg['about'], $arg['identifies'], $arg['tags'], $arg['startdate'], $arg['enddate'], $arg['active'], $arg['highlighted'], $arg['link'], $arg['posting_id']];

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


    public function adminlists()
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
        $result = $this->db->query($query, $values)->row_array();
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
        $values = [$arg['about'], $arg['user_id']];
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

 
