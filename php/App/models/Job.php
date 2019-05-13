<?php
namespace App\models;
require_once('BaseElement.php');
    class Job extends BaseElement {

        public function __construct(){
            parent::__construct();
        }

        public function getDurationAsString(){
            $month = $this->months;
            $years = floor($month / 12);
            $extraMonths = $month % 12;
            if($years == 0 ){
                return "Months: $month";
            }else{
                return "Job duration: Years: $years Months: $month";
            }
        }
    }