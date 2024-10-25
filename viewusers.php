<?php include "head.php"; ?>
    <div class="content">
        <table>
            <tr>
                <td>Full Name</td>
                <td>Date of Birth</td>
                <td>Gender</td>
                <td>Email</td>
                <td>Username</td>
                <td>Edit</td>
                <td>Delete</td>
            </tr>
        <?php
        $conn = mysqli_connect("localhost","root","","mega");

        $query = "select * from users";
        $result = mysqli_query($conn,$query);

        foreach($result as $rslt){
        
        ?>
            <tr>
                <td><?= $rslt["fullname"]?></td>
                <td><?= $rslt["dob"]?></td>
                <td><?= $rslt["gender"]?></td>
                <td><?= $rslt["email"]?></td>
                <td><?= $rslt["username"]?></td>
                <td><a href="edituser.php?id=<?= $rslt['id']?>">Edit</a></td>
                <td><a href="deleteuser.php?id=<?= $rslt['id']?>">Delete</a></td>
            </tr>
        <?php }?>
        </table>

    </div>
<?php include "footer.php"; ?>