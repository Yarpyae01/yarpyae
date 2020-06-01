<?php

  //You can even add more Dollar Signs

  $Bar = "a";
  $Foo = "Bar";
  $World = "Foo";
  $Hello = "World";
  $a = "Hello";

  echo $a, $$a; //Returns Hello
  $$a; //Returns World
  $$$a; //Returns Foo
  $$$$a; //Returns Bar
  $$$$$a; //Returns a

  $$$$$$a; //Returns Hello
  $$$$$$$a; //Returns World

  //... and so on ...//

?>