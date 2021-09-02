<?php

session_start();

if(!isset($_SESSION["useremail"]))
    header("location: ../web/login.php");

include 'header.php';


?>



    <section class="features-section">
        <div class="typediv">
        
        <ul class="faa">


        <?php
        for($id=1; $id<7; $id++){
            echo '<li><div width=150px height=180px>';
            echo '<a href="inside.php?typee=' . $id . '">';
            echo '<img id="img' . $id . '" src="' . $_SESSION["fotores" . $id] . '">';
            echo '<h4>' . $_SESSION["ad" . $id] . '</h4></a>';
            echo '</div></li>';
        }

?>
       
       <script>
       for(var id=1; id<7; id++)
       document.getElementById("img" + id).addEventListener('contextmenu', event => event.preventDefault());
</script>

    </ul>
</div>
    </section>



   <?php
   include 'footer.php';
   ?>