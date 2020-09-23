<?php

class User
{

  public $username;
  public $password;
  public $mail;
  public $age;
  public $country;

  public function __construct($username, $password, $mail, $age, $country)
  {

    $this->username = '<b>Username: </b>' . $username . ';';
    $this->password ='<b>Password: </b>' . $password. ';';
    $this->mail ='<b>Mail: </b>' . $mail. ';';
    $this->age ='<b>Age: </b>' . $age. ';';
    $this->country ='<b>Country: </b>' . $country. ';';
  }

  public function __toString()
  {
    return $this-> username . '<br>' .
      $this->password . '<br>' .
      $this->mail . '<br>' .
      $this->age . '<br>' .
      $this->country . '<br>';
  }
}

$user1 = new User('Marco', '123456', 'Marco@ciao', '32', 'Mantova');
$user2 = new User('Silvia', '1z8056', 'Silvia@ciao', '26', 'Mantova');


?>

<!-- Style -->


<style>
  body {
    display: flex;
    flex-direction: column;
    background-color: #ccc;
  }

  .user {
    width: 10%;
    border: 1px solid #000;
    padding: 10px;
    margin: 10px 0;
    background-color: #fff;
  }
</style>

<!-- Container -->
<h2>User 1</h2>
<div class="user">

  <?php
  echo $user1;
  ?>

</div>
<h2>User 2</h2>
<div class="user">

  <?php
  echo $user2;
  ?>
  
</div>
