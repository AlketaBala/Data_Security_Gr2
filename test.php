<html lang="en">
<head>
  
<style> 

input[type=text] {
  width: 30%;
  padding: 12px 20px;
  margin: 8px 0;
  box-sizing: border-box;
  border: none;
  background-color: lightblue;
  color: white;

}
  .myDiv {
  border: 5px outset blue;
  background-color: lightblue;    
  text-align: center;
  width: 40%;


 
}
  #button {
  background-color: lightblue;
  border-radius: 12px;
  width: 15%;
  height: 30px;
  margin-bottom:15px;
  margin-top:15px;
}


body {
    color:white;
    background-repeat: no-repeat;
    background-position: center center;
  background-image: url('enkrypto.png');
}
</style>
</head>
<body>
    <center>
    <h1>CRYPTOOL A -- BOOK CIPHER</h1>

<form action="test.php" method="GET" >
  
  <label for="fname">Zgjedhe file të cilin dëshiron ta përdorni si çelës:</label><br>
  <input type="text" id="flibri" name="flibri" value="libri.txt"><br>
  <label for="fname">Shkruje Plaintext:</label><br>
  <input type="text" id="fname" name="fname" ><br>
 
  <input type="submit" value="Submit" id="button">

</form>
<?php

$fname=$_GET['fname'];
$arrfname = str_word_count($fname, 1);


$libri = $_GET['flibri'];
$teksti = file($libri);

foreach ($teksti as $element) {
// echo str_word_count($element)."\n";
$arr = str_word_count($element, 1);

$key = array_search($fname, $arr);
 

}

for ( $i=0;$i<str_word_count($fname);$i++)
{
   
    $key = array_search($arrfname[$i], $arr);
    
    $arryakey[$i]=$key;
    $arrdekodim[$i]= $arr[$arryakey[$i]];
    



}


?>


<br>

<div class="myDiv">

  <h3>Teksti juaj i enkriptuar: </h3>

  <p> 

      <?php 

     for($y=0;$y<str_word_count($fname);$y++)

     {

        echo $arryakey[$y]." ";

     }

     ?>

    </p>

</div>

<br>


