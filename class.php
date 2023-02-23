
<!-- we use class that why we use this -->
<!-- this page is design pattern -->

<?php
class rectangle{
public $width = 4;
public $length = 6;

/*below if i want to change value of width and height--
-set function we change value length and width*/

function setLength($len){
    $this->length = $len;
}
    function setwidth($wid){
        $this->width = $wid;
}

// below we create get length to return value width and length--
//get function just show--we not put anyhting inside()

function getLength(){
  return $this-> length;
}

function getWidth(){
    return $this-> width;
  }


  //below return the area of rectangle and do calculation

function findArea(){
    return $this-> length * $this-> width ;

}


}


?>