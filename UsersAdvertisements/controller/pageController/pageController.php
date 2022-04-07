<?php
    require_once 'controller/modelController/userController.php';
    require_once 'controller/modelController/advertisementController.php';

    /**
     * This is a controller class which choose the right page and send the datas.
     * @author     Attila Szerencses
     */
    class pageController {

        /**
         * This function is handling the mvc. Call the correct list function.
         * Here a switch case get the act and choose the correct list function and redirect to there.
         * The default case redirect to the main page.
         */
        public function mvcHandler() {
            $act = isset($_GET['act']) ? $_GET['act'] : NULL;
            switch ($act) {
                case 'userList' :
                    (new userController())->listUsers();
                    break;
                case 'advertisementList':
                    (new advertisementController())->listAdvertisements();
                    break;
                default:
                    $this->redirectToMenu();
            }
        }

        /**
         * This function load the main page, where we can find the menu only.
         */
        public function redirectToMenu() {
            include "view/menu.php";
        }
    }

?>