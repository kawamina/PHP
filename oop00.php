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
        }

          $person1 = new Person;
          $person1->name = "Alexa ";
          $person1->surname = "XD43 ";
          $person1->age=25;
          $person1->profession=" high-school teacher";

          echo $person1->name, $person1->surname, $person1->age, $person1->profession;


      ?>

  </body>
</html>
