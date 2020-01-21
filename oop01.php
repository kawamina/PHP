<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>


      <?php
        class Person {
          var $name;
          var $surname;
          var $age;
          var $profession;

          function __construct($Name,$Age,$Work){
            $this->name=$Name;
            $this->age=$Age;
            $this->profession=$Work;
          }
        }

          $person1 = new Person("Alexa ", 25, " high-school teacher");
          $person2 = new Person("Mia ", 44, " journalist");

          echo $person1->profession;
          echo $person2->age;


          //$person1->name, $person1->surname, $person1->age, $person1->profession;


      ?>

  </body>
</html>
