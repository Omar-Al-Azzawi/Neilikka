<?php

if (isset($_post["submit"])) {
    echo "it work";
}
else{
    header("location: ../singup.php")
}