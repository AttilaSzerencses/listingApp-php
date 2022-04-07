<?php

    /**
     * This is the advertisement model class, which represent the advertisement object.
     * @author     Attila Szerencses
     */
    class advertisement {
        private $id;
        private $userId;
        private $title;

        /**
         * @param $id
         * @param $userId
         * @param $title
         */
        public function __construct($id, $userId, $title) {
            $this->id = $id;
            $this->userId = $userId;
            $this->title = $title;
        }

        /**
         * @return mixed
         */
        public function getId() {
            return $this->id;
        }

        /**
         * @param mixed $id
         */
        public function setId($id) {
            $this->id = $id;
        }

        /**
         * @return mixed
         */
        public function getUserId() {
            return $this->userId;
        }

        /**
         * @param mixed $userId
         */
        public function setUserId($userId) {
            $this->userId = $userId;
        }

        /**
         * @return mixed
         */
        public function getTitle() {
            return $this->title;
        }

        /**
         * @param mixed $title
         */
        public function setTitle($title) {
            $this->title = $title;
        }

    }

?>