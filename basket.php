<?php

session_start();

if(!isset($_SESSION["useremail"]))
    header("location: ../web/login.php");

include 'header.php';


?>


    <section class="basketsection">
        <div class="leftside">

<?php

for($i=1; $i<7; $i++){

    if($i>1)
echo '<hr style="height:.5px">';

echo '<ul>';
echo '<li class="baslist">';
echo '<div class="baskall">';
echo '<div class = \'baskleft\'>';

    if($i<5){
        echo '<a class="baskadqir">' . $_SESSION["ad" .$i] . '</a>';
  } 
    else if($i>4 && $i <7){
        echo '<a class="baskadgoy">' . $_SESSION["ad" .$i] . '</a>';
  }
    else {
        echo '<a class="baskadben">' . $_SESSION["ad" .$i] . '</a>';
  }
  echo '</div><div class="baskinfo">';

echo '<a class="basks">' . $_SESSION["qiymet" . $i] . ' AZN</a>';

if($_SESSION["say" .$i] > 99)
echo '<a class="basks">' . $_SESSION["say" .$i] . ' test</a>';
else if($_SESSION["say" .$i] < 100)
echo '<a class="basks">&nbsp;&nbsp;' . $_SESSION["say" .$i] . ' test</a>';


echo '</div>';
echo '</div>';

echo '<div class="container_HX1zs">';

if(($_SESSION["miqdar" . $i] === $_SESSION["a" . $i])){
    echo '<input type="text" value="Alınıb" readonly>';
    echo '<input type="hidden" name="quantity" value="0" id="number' . $i . '" readonly>';

} else {
echo '<a onclick="decrementValue(' . $i . ')">-</a>';
echo '<input type="number" name="quantity" value="0" maxlength="4" max="' . ($_SESSION["miqdar" . $i] - $_SESSION["a" . $i]) . '" min="0" id="number' . $i . '" readonly>';
echo '<a onclick="incrementValue(' . $i . ', '  . ($_SESSION["miqdar" . $i] - $_SESSION["a" . $i]) . ')">+</a>';
}
echo '</div>';
echo '</li>';
echo '</ul>';
}
?>




        </div>

        <div class="rightside">
<h3>Səbət</h3>
<hr style="height:.5px">

</br>

<ul class="basketul">
    <li>Alınan Test Sayı:</li>
    <li><input id="sayy" value="0" readonly></input></li>
</ul>

<ul class="basketul">
    <li>Ümumi Qiymət:</li>
    <li><input id="umumi" value="0 AZN" readonly></input></li>
</ul>

<ul class="basketul">
    <li>Skitka:</li>
    <li><input id="endirim" value="0 AZN" readonly></input></li>
</ul>

<hr style="height:.5px">

<ul class="basketul">
    <li>Son Qiymət:</li>
    <li><input id="son" value="0 AZN" readonly></input></li>
</ul>


<input type=submit id="checkout-button" value="Ödənişə keç"></input>


</div>

<script type="text/javascript">
function incrementValue(a, max)
{
    var value = parseInt(document.getElementById('number' + a).value, 10);
    value = isNaN(value) ? 0 : value;
    if(value<max){
        value++;
            document.getElementById('number' + a).value = value;
    }

    setRightValues();
}
function decrementValue(a)
{
    var value = parseInt(document.getElementById('number' + a).value, 10);
    value = isNaN(value) ? 0 : value;
    if(value>0){
        value--;
            document.getElementById('number' + a).value = value;
    }

setRightValues();
}


function setRightValues(){

        var value7 =  parseInt(document.getElementById('number7').value, 10);
        var value6 =  parseInt(document.getElementById('number6').value, 10);
        var value1 =  parseInt(document.getElementById('number1').value, 10);
        var value2 =  parseInt(document.getElementById('number2').value, 10);
        var value3 =  parseInt(document.getElementById('number3').value, 10);
        var value4 =  parseInt(document.getElementById('number4').value, 10);
        var value5 =  parseInt(document.getElementById('number5').value, 10);
        var value8 =  parseInt(document.getElementById('number8').value, 10);

        var totalValue = value1 + value2 + value3 + value4 + value5 + value6 + value7 + value8;

    var umumi = value1 + value2 + value3 + value4 + value5*3 + value6*3 + value7*3 + value8*3;
    document.getElementById('umumi').value = umumi + " AZN";



var endirim = 0;

    if(totalValue > 29){
       endirim = umumi*0.35;
    document.getElementById('endirim').value = endirim.toFixed(2) + " AZN (35%)";

    } else if(totalValue > 14){

        endirim = umumi*0.25;
    document.getElementById('endirim').value = endirim.toFixed(2) + " AZN (25%)";

    } else if(totalValue > 4){
        endirim = umumi*0.15;
    document.getElementById('endirim').value = endirim.toFixed(2) + " AZN (15%)";
    }
    
    
    
    // var endirim = document.getElementById('endirim');
    // document.getElementById('son');
    document.getElementById('sayy').value = value1 + value2 + value3 + value4 + value5 + value6 + value7 + value8;
    
    document.getElementById('son').value = (umumi - endirim.toFixed(2)) + " AZN";


}



</script>
        
      
    </section>

    <hr style="height:2px">

        
<script>
    // Create an instance of the Stripe object with your publishable API key
    // var stripe = Stripe("pk_test_51J08GiB5j5THAnIc091TkqH0T9sizQl8nzKklHbCgjmjkP7WJKSPBi3i3P9msJBffWJf8SK4cfVFKRSZuFip15Wz00JZJW3seR");
    var checkoutButton = document.getElementById("checkout-button");

   

    checkoutButton.addEventListener("click", function () {

        
        var value1 =  document.getElementById('number1').value;
        var value2 =  document.getElementById('number2').value;
        var value3 =  document.getElementById('number3').value;
        var value4 =  document.getElementById('number4').value;
        var value5 =  document.getElementById('number5').value;
        var value6 =  document.getElementById('number6').value;
        var value7 =  document.getElementById('number7').value;
        var value8 =  document.getElementById('number8').value;

        if((value1+value2+value3+value4+value5+value6+value7+value8) != 0){

        var link = "success.php?number7=" + value7 + "&number6=" + value6 + "&number1=" + value1
        + "&number2=" + value2 + "&number3=" + value3 + "&number4=" + value4 + "&number5=" + value5
        + "&number8=" + value8;
console.log("I am near location href link");

        window.location.href = link;

<?php $_SESSION["buy"] = true;?>
        }
    });
  </script>



<?php

include 'footer.php';

?>