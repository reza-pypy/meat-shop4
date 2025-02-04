<?php
include("header.html")

?>
<style>
    .d{direction: rtl;
        text-align: center;
        border-radius: 5px;
        border-style: solid;
        

    }
    .a{background-color:rgb(167, 42, 42);

    }

</style>
<div class="a">
<div class="d">
    <form action="rigest-act.php" method="post">
        <input type="text" name="name" placeholder="نام">
        <input type="text" name="username" placeholder="نام کاربری">
        <input type="password" name="password" placeholder="رمز">
        <input type="submit" value="ثبت نام">


    </form>
</div>
</div>