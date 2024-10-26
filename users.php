<?php include "head.php";?>
     <div class="content">
     <div class="user_form">
        <form>
            <label class="ib">Full Name</label><br>
            <input class="field" type="text" placeholder="Full Name"><br>

            <label class="ib">Date Of Birth</label><br>
            <input class="field" type="date"><br>

            <label class="ib">Gender</label><br>
            <input class="rd" type="radio">Male<br>
            <input class="rd" type="radio">Female<br>

            <label class="ib">email</label><br>
            <input class="field" type="email" placeholder="Email Address"><br>

            <label class="ib">Username</label><br>
            <input class="field" type="text" placeholder="Username"><br>

            <label class="ib">Password</label><br>
            <input class="field" type="text" placeholder="Enter Password"><br>

            <label class="ib">Confirm Password</label><br>
            <input class="field" type="text" placeholder="Confirm Password"><br>

            <input class="button" type="submit" value="save"><br>
        </form>
</div>
     <div class="user_table"></div>
     </div>
  <?php include "footer.php";?>