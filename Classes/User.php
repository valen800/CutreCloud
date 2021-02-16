<?php 

class User {

    private $password;
    private $email;

    public function __construct($password, $email) {
        $this->password = $password;
        $this->email = $email;
    }


    /**
     * Get the value of password
     */ 
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * Set the value of password
     *
     * @return  self
     */ 
    public function setPassword($password)
    {
        $this->password = $password;

        return $this;
    }
}

?>