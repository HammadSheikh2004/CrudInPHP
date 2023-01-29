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
    <title>Crud</title>
</head>

<body>
    
    <?php include 'Navbar.php'?>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-12">
                <h2 class="bg-white shadow mt-3 mb-4 text-center py-2 text-danger">Insert Student Data</h2>
            </div>
            <div class="col-md-12">
                <form action="AllQuery.php" method="POST">
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" class="form-control" name="name" id="exampleFormControlInput1" required placeholder="Enter your Name">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" name="email" id="exampleFormControlInput1" required placeholder="name@example.com">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Password</label>
                        <input type="password" class="form-control" id="exampleFormControlInput1" name="password" required>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Gender</label>
                        <div class="col-sm-10">
                            <input type="radio" id="colFormLabel" name="gender" value="Male">
                            <label for="colFormLabel" class="col-form-label col-form-label">Male</label>
                            <input type="radio" id="colFormLabel" name="gender" value="Female">
                            <label for="colFormLabel" class="col-form-label col-form-label">Female</label>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="colFormLabel" class="col-sm-2 col-form-label col-form-label">Country</label>
                        <div class="col-sm-10">
                            <select name="country" class="form-control">
                            <option disabled selected>Select your country</option>
                                <option value="Pakistan">Pakistan</option>
                                <option value="Uk">Uk</option>
                                <option value="Kenya">Kenya</option>
                            </select>
                        </div>
                    </div>
                    <input type="submit" value="Save Data" name="btnsave" class="btn btn-success">
                </form>
            </div>
        </div>
    </div>




    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>

</html>