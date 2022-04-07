<?php
    require_once 'model/userModel.php';
    require_once 'model/advertisement.php';
    require_once 'model/advertisementModel.php';
    require_once 'config/config.php';

    session_status() === PHP_SESSION_ACTIVE ? TRUE : session_start();

    /**
     * This class is a controller for the advertisements.
     * @author     Attila Szerencses
     */
    class advertisementController {

        /**
         * This is a no parameter constructor.
         * Here we create a new config object, which contains the database connection information
         * Also create a AdvertisementModel object, so we can reach the select query.
         */
        function __construct(){
            $this->objectConfig = new config();
            $this->objectAdvertisementModel =  new advertisementModel($this->objectConfig);
        }

        /**
         * This function call the select query from the advertisementModell,
         * and send the data to the advertisementlist site.
         */
        public function listAdvertisements(){
            $result=$this->objectAdvertisementModel->selectAllAdvertisements();
            include "view/advertisement.php";
        }


    }


?>