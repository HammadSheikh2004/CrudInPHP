<?php include_once "Navbar.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="Description" content="Enter your description here" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link rel="stylesheet" href="assets/css/style.css">
    <title>Title</title>
</head>

<body>

    <div class="container mt-3">
        <div class="row">
            <div class="col-md-12">
                <h2 class="bg-white shadow mt-3 mb-4 text-center py-2 text-danger">Read Student Data</h2>
            </div>
            <div class="col-md-12">
                <table class="table">
                    <thead>
                        <tr class="text-center">
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Password</th>
                            <th scope="col">Gender</th>
                            <th scope="col">Country</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        include_once "Connect.php";
                        $query = "SELECT * FROM `data`";
                        $result = mysqli_query($conn, $query);
                        if (mysqli_num_rows($result) > 0) {
                            while ($row = mysqli_fetch_assoc($result)) {
                        ?>
                                <tr class="text-center">
                                    <td><?php echo $row['Id']; ?></td>
                                    <td><?php echo $row['Name']; ?></td>
                                    <td><?php echo $row['Email']; ?></td>
                                    <td><?php echo $row['Password']; ?></td>
                                    <td><?php echo $row['Gender']; ?></td>
                                    <td><?php echo $row['Country']; ?></td>
                                    <td>
                                        <a href="EditData.php?id=<?php echo $row['Id']; ?>" class="btn btn-primary">EditData</a>
                                        <a href="AllQuery.php?Deleteid=<?php echo $row['Id']; ?>" class="btn btn-success">DeleteData</a>
                                    </td>
                                </tr>

                        <?php }
                        } ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>