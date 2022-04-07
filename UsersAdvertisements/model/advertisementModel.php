<?php

    /**
     * This class for the advertisement model. It contains the database connection,
     * The database end, and the select querys.
     * @author     Attila Szerencses
     */
    class advertisementModel {

        function __construct($consetup) {
            $this->host = $consetup->host;
            $this->user = $consetup->user;
            $this->pass =  $consetup->pass;
            $this->db = $consetup->db;
        }

        /**
         * This function is open the database. If there is a problem, the script stop, and write an error message.
         * If there isn't any problem, the function creat a connection.
         */
        public function openDb() {
            $this->condb=new mysqli($this->host,$this->user,$this->pass,$this->db);
            if ($this->condb->connect_error)
            {
                die("Erron in connection: " . $this->condb->connect_error);
            }
        }

        /**
         * This function is close the database connection.
         */
        public function close_db() {
            $this->condb->close();
        }

        /**
         * This function is a query. Get all advertisements from database. Advertisement id, title, and the username who write the advertisement.
         * Firstly, creat a connection to the database, select the records from the table, and close the connection. After  return the resource which contains the data, or false, if the query is unsuccessful.
         * @return $resource
         */
        public function selectAllAdvertisements(){
            try{
                $this->openDb();
                $query=$this->condb->prepare("SELECT advertisements.id,title,name FROM advertisements,users WHERE users.id = advertisements.userid");
                $query->execute();
                $result=$query->get_result();
                $query->close();
                $this->close_db();
                return $result;

            } catch (Exception $e){
                $this->close_db();
                throw $e;
            }
        }

    }

?>