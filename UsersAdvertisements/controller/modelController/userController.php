<?php
    require_once 'model/userModel.php';
    require_once 'model/user.php';
    require_once 'config/config.php';

    session_status() === PHP_SESSION_ACTIVE ? TRUE : session_start();

    /**
     * This class is the controller for the advertisements.
     * @author     Attila Szerencses
     */
    class userController {

        /**
         * This is a no parameter constructor.
         * Here we create a new config object, which contains the database connection information
         * Also create an UserModel object, so we can reach the select query.
         */
        function __construct() {
            $this->objectConfig = new config();
            $this->objectUserModel =  new userModel($this->objectConfig);
        }


        /**
         * This function call the select query from the UserModell,
         * and send the data to the userList site.
         */
        public function listUsers(){
            $result=$this->objectUserModel->selectAllUsers();
            include "view/userList.php";
        }
    }


?>