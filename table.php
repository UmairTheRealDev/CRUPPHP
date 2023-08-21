<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
</head>

<body>
<button class="btn btn-info"><a href="index.php">Add Record</a></button>
    <table class="table">
        <?php
        $con = mysqli_connect("localhost", "root", "", "crud_db") or die("connection failed");

        $sql = "SELECT * FROM `users_tbl`";
        $res = mysqli_query($con, $sql);
        if (mysqli_num_rows($res) > 0) {
        ?>
            <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Email</th>
                    <th scope="col">Password</th>
                    <th scope="col">Image</th>
                    <th scope="col">Time</th>
                </tr>
            </thead>
            <tbody>
                <?php
                while ($data =  mysqli_fetch_assoc($res)) {
                    // print_r($data);
                ?>
                    <tr>
                        <th><?php echo $data['id']  ?></th>
                        <th><?php echo $data['email']  ?></th>
                        <th><?php echo $data['password']  ?></th>
                        <th><img src="<?php echo $data['image']  ?>" alt="" height="100px" width="100px"></th>
                        <th><?php echo $data['time']  ?></th>
                        <th>
                            <button class="btn btn-info"><a href="#">Edit</a></button>
                            <button class="btn btn-danger"><a href="./delete.php?delid=<?php echo $data['id']  ?>">Delete</a></button>
                        </th>

                    </tr>
                <?php

                }
                ?>

            </tbody>
        <?php
        } else {
            echo "No record found";
        }
        ?>
    </table>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>