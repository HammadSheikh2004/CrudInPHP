<?php
include_once "Navbar.php";
include_once "Connect.php";
?>
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


    <div class="container my-4">
        <div class="row">
            <div class="col-md-12">
                <h2 class="bg-white shadow mt-3 mb-4 text-center py-2 text-danger">Search Student Data</h2>
            </div>
            <div class="col-md-12">
                <form action="<?php $_SERVER['PHP_SELF'] ?>" method="POST" class="form-inline my-2 my-lg-0 shadow d-flex justify-content-center py-2">
                    <input class="form-control mr-sm-2" type="search" name="sid" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline-success my-2 my-sm-0" type="submit" name="searchSubmit">Search</button>
                </form>
            </div>
            <div class="col-md-12">
                <?php
                if (isset($_REQUEST['searchSubmit']) == true) {
                    $id = $_POST['sid'];
                    $sqlquery = "SELECT * FROM `data` where `Id` = $id";
                    $result = mysqli_query($conn, $sqlquery);
                    if (mysqli_num_rows($result) > 0) {
                        while ($row = mysqli_fetch_assoc($result)) {

                ?>
                            <form action="AllQuery.php" method="POST">
                                <div class="form-group mt-4">
                                    <input type="hidden" class="form-control" name="id" value="<?php echo $row['Id']; ?>">
                                    <label for="exampleFormControlInput1">Name</label>

                                    <input type="text" class="form-control" name="name" id="exampleFormControlInput1" value="<?php echo $row['Name']; ?>" required placeholder="Enter your Name">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Email address</label>
                                    <input type="email" value="<?php echo $row['Email']; ?>" class="form-control" name="email" id="exampleFormControlInput1" required placeholder="name@example.com">
                                </div>
                                <div class="form-group">
                                    <label for="exampleFormControlInput1">Password</label>
                                    <input type="password" class="form-control" value="<?php echo $row['Password']; ?>" id="exampleFormControlInput1" name="password" required>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Gender</label>
                                    <div class="col-sm-10">
                                        <?php if ($row['Gender'] == "Male") { ?>
                                            <input type="radio" id="colFormLabel" name="gender" value="Male" checked>
                                            <label for="colFormLabel" class="col-form-label col-form-label">Male</label>
                                            <input type="radio" id="colFormLabel" name="gender" value="Female">
                                            <label for="colFormLabel" class="col-form-label col-form-label">Female</label>
                                        <?php } elseif ($row['Gender'] == "Female") { ?>
                                            <input type="radio" id="colFormLabel" name="gender" value="Male">
                                            <label for="colFormLabel" class="col-form-label col-form-label">Male</label>
                                            <input type="radio" id="colFormLabel" name="gender" value="Female" checked>
                                            <label for="colFormLabel" class="col-form-label col-form-label">Female</label>
                                        <?php } ?>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Country</label>
                                    <div class="col-sm-10">
                                        <select name="country" class="form-control">
                                            <?php if ($row['Country'] == "Pakistan") { ?>
                                                <option value="Pakistan" selected>Pakistan</option>
                                                <option value="Uk">Uk</option>
                                                <option value="Kenya">Kenya</option>
                                            <?php }
                                            if ($row['Country'] == "Uk") { ?>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Uk" selected>Uk</option>
                                                <option value="Kenya">Kenya</option>
                                            <?php }
                                            if ($row['Country'] == "Kenya") { ?>
                                                <option value="Pakistan">Pakistan</option>
                                                <option value="Uk">Uk</option>
                                                <option value="Kenya" selected>Kenya</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                    <input type="submit" value="Update Data" name="btnedit" class="btn btn-success mt-4">
                                </div>
                            </form>
                <?php }
                    }
                } ?>
            </div>
        </div>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>