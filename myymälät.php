<?php
include 'header.php';
?>   
            <script>
            function myFunction() {
              var x = document.getElementById("myTopnav");
              if (x.className === "topnav") {
                x.className += " responsive";
              } else {
                x.className = "topnav";
              }
            }
            </script>
        <h1>Myymälät</h1>
        <div class="myym">
            <div class="myy1"></div>
            <h3>Puutarhaliike Neilikka, Helsinki</h3>
            <br>
            <p>Fabianinkatu 42
                00100 Helsinki<br>
                Puh. xx-xxxxxxx<br>
                Sähköposti: helsinki@puutarhaliikeneilikka.fi<br>
                Avoinna
                ma-ke 9-17
                la 12-18</p>
                <img src="https://balticguide.ee/wp-content/uploads/2018/04/DSC_4050-Pano-1024x621.jpg" width="300px" alt="">
                
            <div class="myy2"></div>
            <h3>Puutarhaliike Neilikka, Espoo</h3>
            <br>
            <p>Kivenlahdentie 10
                01234 Espoo<br>
                Puh. xx-xxxxxxx<br>
                Sähköposti: espoo@puutarhaliikeneilikka.fi<br>
                
                Avoinna
                ma-ke 9-17
                la 12-18</p>
                <img src="https://i1.wp.com/www.riikkapontynen.com/wp-content/uploads/2018/05/Puutarhat087.jpg?resize=960%2C720&ssl=1" width="300px" alt="">
            </div>
        </table>
        <?php
          include 'footer.php';
         ?>
</body>
</html>