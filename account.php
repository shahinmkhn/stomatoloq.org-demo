<?php

session_start();

if(!isset($_SESSION["useremail"]))
    header("location: ../web/login.php");

include 'header.php';


?>


    <section class="hesabsect">
        <div class="hesabdiv">

        <div class="profileinfo">


        <div class="hesaberror">
<?php 

if(isset($_GET['error'])){


    if($_SESSION['infoch'] > 0){
        echo '<p><span>Məlumat yeniləndi.</span></p>';

} else if($_GET['error'] === 'mism'){
    echo '<p class="pwrong">Yeni şifrələr bir-biri ilə uyğunlaşmır.</p>';

} else if($_GET['error'] === 'sm'){
    echo '<p class="pwrong">Zəhmət olmasa, yeni şifrə daxil edin.</p>';

} else if($_GET['error'] === 'ins'){
    echo '<p class="pwrong">Şifrə ən az 8 simvoldan ibarət olmalıdır.</p>';

} else if($_GET['error'] === 'frshd'){
echo '<p class="pwrong">Şifrə uğurla yeniləndi.</p>';

} else if($_GET['error'] === 'ldwr'){
echo '<p class="pwrong">Köhnə şifrə doğru deyil.</p>';
}

}

?>
</div>

<ul class="hesablist">
<form method=post action='includes/hesab.inc.php'>

<li>
<ul class="hesablistinsideul">
<li>Ad</li>
<li><?php echo '<input type="text" name="ad" value=' . $_SESSION["name"] . '>'; ?></li>
    </ul>
</li>


<li>
<ul class="hesablistinsideul">
<li>Soyad</li>
<li><?php echo '<input type="text" name="soyad" value=' . $_SESSION["surname"] . '>'; ?></li>
    </ul>
</li>


<li>
<ul class="hesablistinsideul">
<li>E-poçt</li>
<li><?php echo '<input type="text" value=' . $_SESSION["useremail"] . ' readonly>'; ?></li>
    </ul>
</li>

<li>
<ul class="hesablistinsideul">
<li>Şifrəni dəyiş</li>
<li><ul class="pwdchange"><?php 

echo '<li><input type="password" id="pass1" name="oldpwd" placeholder="Köhnə şifrə"></input></li>';
echo '<li><input type="password" id="pass2" name="newpwd" placeholder="Yeni şifrə"></input></li>';
echo '<li><input type="password" id="pass3" name="newpwdre" placeholder="Yeni şifrə (təkrar)"></input></li>';


?></ul></li>
    </ul>
</li>



<li><input type=submit name=submit value='Dəyişdir'></li>
</form>
</ul>




</div>

     <ul class="hesablist">

        
<?php

for($i=1; $i<7; $i++){

       echo '<li><div width=150px height=180px>';
       
           
        echo '<ul class=\'hesabul\'>';
        echo '<li><a href="inside.php?typee=' .$i. '"><h4>' . $_SESSION["ad" . $i] . '</h4></a></li>';
        echo '<li><h4>' . $_SESSION["a" . $i] . '/' . $_SESSION["miqdar" . $i] . '</h4></li>';
        echo '</ul>';

        echo '</div></li>';

}


        ?>
      


    </ul>
</div>



  </section>







  <?php

include 'footer.php';

?>