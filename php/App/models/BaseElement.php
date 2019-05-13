<?php
namespace App\models;
require_once('Printable.php');
class BaseElement implements Printable{
        protected $title;
        protected $description;
        protected $visible;
        protected $months;

        public function __construct(){
            $this->title = '';
            $this->description = '';
        }

        public function getTitle(){
            return $this->title;
        }
        public function setTitle($title){
            if($title == ''){
                $this->title = 'N/A';
            }else{
                $this->title = $title;
            }
        }

        public function setDescription($description){
            $this->description = $description;
        }
        public function getDescription(){
            return $this->description;
        }

        public function getVisible(){
            return $this->visible;
        }

        public function setVisible($visible){
            $this->visible = $visible;
        }
        public function getMonths(){
            return $this->months;
        }

        public function setMonths($months){
            $this->months = $months;
        }

        public function getDurationAsString(){
            $month = $this->months;
            $years = floor($month / 12);
            $extraMonths = $month % 12;
            if($years == 0 ){
                return "Months: $month";
            }else{
                return "Years: $years Months: $month";
            }
        }

    }