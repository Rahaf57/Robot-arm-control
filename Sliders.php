<!DOCTYPE html>
 
<html lang="en" dir="ltr">
<head>

  <meta charset="utf-8">
  <style>
   div{
  border: 1px solid black;
  margin-top: 100px;
  margin-bottom: 100px;
  margin-right: 150px;
  
  margin-left: 80px;
  background-color: #f2ffe6;
  text-align:right;
   padding-top: 30px;
  padding-right: 30px;
  padding-bottom: 30px;
  padding-left: 60px;
}
.slidecontainer {
  width: 35%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 25px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  background: #04AA6D;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  background: #04AA6D;
  cursor: pointer;
}
</style>
</head>
<body>
<span id="colorOutput"></span></h2>

<form action="sliders.php" method="post">
<div class="slidecontainer">
 <br> 

 <h1>لوحة التحكم بالروبوت </h1>
<br>
<label > المحرك الأول </label>
<input type="range" min="0" max="180" value="50" class="slider" id="rang1" name="M1">

<br>
<br>
<label > المحرك الثاني </label>
<input type="range" min="0" max="180" value="50" class="slider" id="rang2" name="M2">

<br>
<br>
<label > المحرك الثالث </label>
<input type="range" min="0" max="180" value="50" class="slider" id="rang3" name ="M3">

<br>
<br>
<label > المحرك الرابع </label>
<input type="range" min="0" max="180" value="50" class="slider" id="rang4" name="M4">

<br>
<br>
<label > المحرك الخامس </label>
<input type="range" min="0" max="180" value="50" class="slider" id="rang5" name="M5">

<br>
<br>
<label > المحرك السادس </label>
<input type="range" min="0" max="180" value="50" class="slider" id="rang6" name="M6">
<br>
<br>

 
 <button style="center-left: 10px;width: 80px; height: 30px;font-size:16px;
margin-left:180px;" name="save">حفظ</button>
 <br>
 <br>
 <button style="center-left: 10px;width: 80px; height: 30px;font-size:16px;
margin-left:180px;" name="run">تشغيل</button> 



</div>

<script>

var slider = document.getElementById("rang1");
var slider = document.getElementById("rang2");
var slider = document.getElementById("rang3");
var slider = document.getElementById("rang4");
var slider = document.getElementById("rang5");
var slider = document.getElementById("rang6");



output.innerHTML = slider.value; 
slider.oninput = function() {
  output.innerHTML = this.value;
}
 </script>
 

  <?php
 
 
// Create connection
$conn = mysqli_connect('localhost' ,'root','','db for control device');

if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

?>

 <?php
  
if (isset($_POST['save'])) {
 
 $sql= "INSERT INTO `control device` (  `M1`, `M2`, `M3`, `M4`, `M5`, `M6` ) VALUES ( '".$_POST['M1']."','".$_POST['M2']."','".$_POST['M3']."','".$_POST['M4']."','".$_POST['M5']."','".$_POST['M6']."' )";
 $result = $conn->query($sql);
     
}

 ?>

</body>
</html>