<?php

session_start();

if(!isset($_SESSION["useremail"])){
    header("location: ../web/login.php");
    exit();
}

         if($_SESSION["a" . $_GET["type"]] < $_GET["say"]){
    header("location:javascript://history.go(-1)");
            exit();


}

?>



<!DOCTYPE html>

<html lang="en" xmlns="http://www.w3.org/1999/xhtml">

<head>
<link rel="shortcut icon" href="assets/s.svg" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title id="top">
        stomatoloq.org
    </title>
    <link rel="stylesheet" href=css/reset.css>
    <link rel="stylesheet" href=css/main.css>

    <script>
    var bleep = new Audio();
    var bleepend = new Audio();

    bleep.src = "audio/bip.mp3";
    bleepend.src = "audio/bipend.mp3";

    </script>
</head>

<body>

<!-- <embed src="audio/bip.wav" autostart="false" width="0" height="0" id="sound1" enablejavascript="true"/>

<script>
function PlaySound(soundObj) {
  var sound = document.getElementById(soundObj);
  sound.Play();
} -->
<!-- </script> -->

<script>
   if(localStorage.getItem("testsession") == "false")
    // window.history.back();
    window.history.go(-2);

            // window.onbeforeunload = function() { 
            //             return "Your work will be lost.";
    // };
</script>




<div class=navbarr>
        <div class=container>
            
            <nav>

            <div class="testnavul">
          

        <button class='chix' onclick="chix();" id='chix'>İmtahandan çıx</button>
        <p id="demo"></p>
        <!-- <button class='bitir' onclick="bitir();" id='bitir'> -->
        <input class='bitir' type="submit" name="result-submit" id="submit" value="İmtahanı bitir" form="myform">

    <!-- </button> -->
        



        <script>

                var url_string = window.location.href;
                var url = new URL(url_string);
                var c = url.searchParams.get("type");
                var d = url.searchParams.get("say");

                    var a = 0;
                    var b = 0;

              

        function chix(){
            a++;

            if(a == 1){

                document.getElementById("chix").innerHTML = 'Əminsinizmi?';


                // if(b == 1){
                // document.getElementById("bitir").innerHTML = 'İmtahanı bitir';
                // b--;
                // }

                setTimeout(function(){
             document.getElementById("chix").innerHTML = 'İmtahandan çıx';
             a--;
                }, 5000);


            } else if(a == 2){

                


                localStorage.removeItem("time" + c + d);
                localStorage.setItem("testsession", "false");
                
                window.location.href = 'search.php?type=' + c + "&say=" + d;
                // window.location.href = 'search.php';
            }
        }


        function bitir(){
            b++;

            if(b == 1){
                document.getElementById("bitir").innerHTML = 'Əminsinizmi?';

                // if(a ==1){
                //     document.getElementById("chix").innerHTML = 'İmtahandan çıx';
                // a--;
                // }

                setTimeout(function(){
             document.getElementById("bitir").innerHTML = 'İmtahanı bitir';
             b--;
                }, 5000);

               

            } else if(b == 2){
                
                // for($i=0; $i<3; $i++){
                //     if(!empty($_POST['group' . $i])) {
                //         echo '  ' . $_POST['group' . $i];
                //     } else {
                //         echo 'Please select the value.';
                //     }

                // }


                b--;
            }
        }







// Set the date we're counting down to
// var countDownDate = new Date("Jan 5, 2022 15:37:25").getTime();
var countDownDate = localStorage.getItem("time" + c + d);

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();

  // Find the distance between now and the count down date
  var distance = countDownDate - now;

  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);


  if(minutes<10){
      minutes = "0" + minutes;
  }

  if(seconds<10){
      seconds = "0" + seconds;
  }

  // Display the result in the element with id="demo"
  document.getElementById("demo").innerHTML = hours + ": "
  + minutes + ": " + seconds;

  document.getElementById("top").innerHTML = "Qalan vaxt: " + hours + ": "
  + minutes + ": " + seconds;

 

  // If the count down is finished, write some text
  if (distance < 0) {


    
    // bleepend.play();
    clearInterval(x);
    document.getElementById("demo").innerHTML = "Vaxt bitib";

    var bitirB = document.getElementById("submit");
    bitirB.click();
   
  } else if(distance > 179000 && distance < 180000){
    bleep.play();
    document.getElementById("demo").style["color"] = "#F1595E";

  } else if((distance < 4000 && distance >= 1000) || (distance > 14000 && distance < 15000)){
    bleep.play();
    document.getElementById("demo").style["color"] = "#F1595E";

  } else if(distance < 1000){
      bleepend.play();
      
  } else  if(distance < 180000){
    document.getElementById("demo").style["color"] = "#F1595E";
    
  } 

}, 1000);

            </script>

</div>
            </nav>


        </div>
    </div>





<section class="suallar">
<div class="radioclass">

<?php
echo '<form action="testresult.php?type=' . $_GET['type'] . '&say=' . (1+$_GET['say']) . '" method=\'post\' id=\'myform\'>';


$api_url = 'json/suallar' . $_GET['type'] . '.json';
$json_data = file_get_contents($api_url);
$response_data = json_decode($json_data);
$user_data = $response_data[0]->suallar;
$user_data = array_slice($user_data, 0, 5);

$i=0;

foreach ($user_data as $user) {

    echo '<div class=fieldset>';
	echo '<p class=fieldp>' . ($i+1) . '. ' . $user->sual . '<p>';
    echo "<br />";
    echo "<br />";

    echo '<fieldset id="group' . $i . '">';

    for($x = 0; $x < 5; $x++){

        switch($x){
            case 0: $val = 'a'; break;
            case 1: $val = 'b'; break;
            case 2: $val = 'c'; break;
            case 3: $val = 'd'; break;
            case 4: $val = 'e'; break;
        }

 
	echo '<input type="radio" name="group' .$i . '" value="' . $val . '" id="' . $val . $i . '"><label class="seslabel" for="' . $val . $i . '">' . $val . ') ' . $user-> $val . '</label></input><br>';
    echo "<br />";

}

    echo '</fieldset>';
    echo '</div>';


    $i++;
}

?>


</form>

</div>
</section>


</body>
</html>