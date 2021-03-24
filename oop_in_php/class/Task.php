<?php

class Task {
    
    public $id;
    public $taskName;
    public $status;
    public $expirationDate;

    public function isExpired():bool
    {
        // istanza della classe DateTime
        $today = new DateTime();
        $today->setDate(
            explode(" ",date("Y m d"))[0],
            explode(" ",date("Y m d"))[1],
            explode(" ",date("Y m d"))[2]
        );
        $task = new DateTime($this->expirationDate); 
        
        return $task < $today; 
    }

    public function getExpirationDate()
    {
        return $this->expirationDate;
    }

}