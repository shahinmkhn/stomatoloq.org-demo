<div class="footer-basic" id="elaqe">
        <footer>
            <div class="social">
            <a target="_blank" rel="noopener noreferrer" href="https://www.instagram.com/stomatoloq_org/"><i></i></a>
            <a target="_blank" rel="noopener noreferrer" href="https://mail.google.com/mail/u/0/#inbox?compose=CllgCJNxNzXpthNJfBCQMLDsPkjHtGbBwSdlFCtgHZxwjSWlNvvWnLcTlFMtJFJgQswnlcMfqsq"><i></i></a></div>
            
            <ul class="list-inline">

            <?php
            if(isset($_SESSION["useremail"])){
               echo '<li class="list-inline-item"><a href="account.php">Hesab</a></li>';
               echo '<li class="list-inline-item"><a href="about.php">Haqqımızda</a></li>';
               echo '<li class="list-inline-item"><a href="basket.php">Səbət</a></li>';

            } else {
                echo '<li class="list-inline-item"><a href="about.php">Haqqımızda</a></li>';
                echo '<li class="list-inline-item"><a href="login.php">Daxil ol</a></li>';
                echo '<li class="list-inline-item"><a href="register.php">Hesab aç</a></li>';
            }
            ?>
                
            </ul> 


            <p class="copyright">stomatoloq.org © 2021</p>
        </footer>

    
    <script>

localStorage.setItem("testsession", "false");
localStorage.setItem("testonly", "false");
</script>







</body>

</html>