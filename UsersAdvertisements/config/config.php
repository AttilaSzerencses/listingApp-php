<?php
    /**
     * This is the config class, which contains the information:
     * host,user,password,database name for the database connection.
     * @author     Attila Szerencses
     */
    class config{
        function __construct() {
            $this->host = "localhost";
            $this->user  = "root";
            $this->pass = "";
            $this->db = "users_advertisements";
        }
    }

?>