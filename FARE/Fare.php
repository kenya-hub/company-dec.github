<?php

    class fare{
        #iside class

        #properties
        private $age;
        private $km;
        // private $discount;
        private $fare;

        #methods
        public function CulFare()
        {
            $x=8;
            // $this->discount = $discount;

            if($this->age < 60){
                if($this->km <= 4){
                    $fare = $x;
                } else {
                    $fare = $x + 1;
                }    
                return $fare;
            } else {
                if($this->km <= 4){
                    $fare = $x * 0.8;
                } else {
                    $fare = ($x + 1) * 0.8;
                }    
                return $fare;
            }
        }


        # setter - set the value of
        public function setAge($age)
        {
            $this->age = $age;
        }

        public function setKm($km)
        {
            $this->km = $km;
        }

        // public function setDiscount($discount)
        // {
        //     $this->discount = $discount;
        // }

        public function setFare()
        {
            $this->fare = $this->CulFare();
        }


        

        # getter - retrieve the value
        public function getAge()
        {
           return  $this->age;
        }
        
        public function getKm()
        {
           return  $this->km;
        }

        // public function getDiscount()
        // {
        //    return  $this->discount;
        // }

        public function getFare()
        {
           return  $this->fare;
        }

    }


    // #create an object
    // $fare = new fare;
    
    // // # use setter
    // $fare->setAge("59");
    // $fare->setKm("10");
    // $fare->setFare(8);

    // // # use getter
    // echo "Age:" . $fare->getAge() . "<br>";
    // echo "Km:" . $fare->getKm() . "<br>";
    // echo "Fare:" . $fare->getFare() . "<br>";
    // echo "<hr>";

?>