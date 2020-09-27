<?php

class M_login extends CI_Model
{
    function auth($username, $password)
    {
        $query = $this->db->query("SELECT * FROM datauser WHERE username=$username AND password=$password LIMIT 1");
        return $query;
        //return $this->db->get_where($table, $where);
    }
}
