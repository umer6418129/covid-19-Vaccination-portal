<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hospital</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <?php
    include('connection.php');
    session_start();
    ?>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
</head>
<style>
    h2{
        color: #073b74;
    }
</style>

<body>
    <?php
    if (isset($_SESSION['username'])) {
        // echo $_SESSION['username'];
        // echo '<script type="text/javascript">toastr.success("Have Fun")</script>';
        include('navBar.php');
    } else {
        header('location:auth.php');
    }
    ?>
    <div class="content container">
        <div class="pt-3">
            <h3 class="h2 mb-0 text-capitalize d-flex align-items-center gap-2">
                Dashboard
            </h3>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">

                    </div>
                    <div class="card-body">
                        <div class="container">
                            <div class="row justify-content-between">
                                <div class="card bg-success shadow mb-3 col-4 border-0" style="max-width: 18rem;">
                                    <div class="card-body">
                                        <h4 class="text-white">Current Hospitals:
                                            <span>
                                                <?php
                                                $query = "SELECT * FROM hospital WHERE isapprove = 'Accepted'";
                                                $res = mysqli_query($conn, $query);
                                                echo mysqli_num_rows($res);
                                                ?>
                                            </span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="card bg-info shadow mb-3 col-4 border-0" style="max-width: 18rem;">
                                    <div class="card-body">
                                        <h4 class="text-white">Pending Hospitals:
                                            <span>
                                                <?php
                                                $query = "SELECT * FROM hospital WHERE isapprove = 'Pending'";
                                                $res = mysqli_query($conn, $query);
                                                echo mysqli_num_rows($res);
                                                ?>
                                            </span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="card bg-danger shadow mb-3 col-4 border-0" style="max-width: 18rem;">
                                    <div class="card-body">
                                        <h4 class="text-white">Rejected Hospitals:
                                            <span>
                                                <?php
                                                $query = "SELECT * FROM hospital WHERE isapprove = 'Rejected'";
                                                $res = mysqli_query($conn, $query);
                                                echo mysqli_num_rows($res);
                                                ?>
                                            </span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-between mt-4">
                                <div class="card bg-success shadow mb-3 col-4 border-0" style="max-width: 18rem;">
                                    <div class="card-body">
                                        <h4 class="text-white">Available Vaccines:
                                            <span>
                                                <?php
                                                $query = "SELECT * FROM vaccines WHERE availability = 'Available'";
                                                $res = mysqli_query($conn, $query);
                                                echo mysqli_num_rows($res);
                                                ?>
                                            </span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="card bg-info shadow mb-3 col-4 border-0" style="max-width: 18rem;">
                                    <div class="card-body">
                                        <h4 class="text-white">Total Vaccines:
                                            <span>
                                                <?php
                                                $query = "SELECT * FROM vaccines";
                                                $res = mysqli_query($conn, $query);
                                                echo mysqli_num_rows($res);
                                                ?>
                                            </span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="card bg-danger shadow mb-3 col-4 border-0" style="max-width: 18rem;">
                                    <div class="card-body">
                                        <h4 class="text-white">Unavailable Vaccines:
                                            <span>
                                                <?php
                                                $query = "SELECT * FROM vaccines WHERE availability = 'Unavailable'";
                                                $res = mysqli_query($conn, $query);
                                                echo mysqli_num_rows($res);
                                                ?>
                                            </span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-between mt-4">
                                <div class="card bg-success shadow mb-3 col-4 border-0" style="max-width: 18rem;">
                                    <div class="card-body">
                                        <h4 class="text-white">Current Users:
                                            <span>
                                                <?php
                                                $query = "SELECT * FROM users WHERE isapprove = 'Accepted'";
                                                $res = mysqli_query($conn, $query);
                                                echo mysqli_num_rows($res);
                                                ?>
                                            </span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="card bg-info shadow mb-3 col-4 border-0" style="max-width: 18rem;">
                                    <div class="card-body">
                                        <h4 class="text-white">User Requests:
                                            <span>
                                                <?php
                                                $query = "SELECT * FROM users WHERE isapprove = 'Pending'";
                                                $res = mysqli_query($conn, $query);
                                                echo mysqli_num_rows($res);
                                                ?>
                                            </span>
                                        </h4>
                                    </div>
                                </div>
                                <div class="card bg-danger shadow mb-3 col-4 border-0" style="max-width: 18rem;">
                                    <div class="card-body">
                                        <h4 class="text-white">Rejected Users:
                                            <span>
                                                <?php
                                                $query = "SELECT * FROM users WHERE isapprove = 'Rejected'";
                                                $res = mysqli_query($conn, $query);
                                                echo mysqli_num_rows($res);
                                                ?>
                                            </span>
                                        </h4>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>