<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Vaccines-Messages</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <?php
    include('connection.php');

    session_start();
    ?>
    <script src="http://code.jquery.com/jquery-1.9.1.min.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/css/toastr.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.0.1/js/toastr.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
</head>

<body>
    <?php
    if (isset($_SESSION['username'])) {
        include('navBar.php');
        $Id = $_GET['id'] ?? "";
        $Name = $_GET['name'] ?? "";
        $email = $_GET['email'] ?? "";
        $subject = $_GET['subject'] ?? "";
        $query = $_GET['query'] ?? "";
    } else {
        header('location:auth.php');
    }
    ?>
    <div class="content container">
        <div class="pt-3">
            <h3 class="h2 mb-0 text-capitalize d-flex align-items-center gap-2">
                View Message
            </h3>
        </div>
        <div class="row mt-5">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="d-flex justify-content-between">
                            <a class="btn btn-secondary" href="messages.php"><i class="bi bi-arrow-left"></i>Back</a>
                            <form action="" method="POST">
                                <input type="hidden" name="id" value="<?php echo $Id ?>">
                                <button type="submit" class="btn btn-success" name="markBtn">Mark as Read</button>
                            </form>
                        </div>

                        <?php
                            if (isset($_POST['markBtn'])) {
                                $id = $_POST['id'];
                                $markQuery = "UPDATE contactuser SET mark = 'read' WHERE id='$id'";
                                $markRes = mysqli_query($conn,$markQuery);
                                if ($markRes) {
                                    echo '
                                    <div class="toast-container position-fixed top-0 end-0 p-3 ">
                                        <div id="liveToast" class="toast show bg-success" role="alert" aria-live="assertive" aria-atomic="true">
                                            <div class="toast-header justify-content-between">
                                                <div>
                                                </div>
                                                <div>
                                                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                                </div>
                                            </div>
                                            <div class="toast-body text-white">
                                                Marked! Readed Message
                                            </div>
                                        </div>
                                    </div>
                                    ';
                                }else{
                                    echo '
                                    <div class="toast-container position-fixed top-0 end-0 p-3 ">
                                        <div id="liveToast" class="toast show bg-danger" role="alert" aria-live="assertive" aria-atomic="true">
                                            <div class="toast-header justify-content-between">
                                                <div>
                                                </div>
                                                <div>
                                                    <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
                                                </div>
                                            </div>
                                            <div class="toast-body text-white">
                                                Oops! Something went wrong
                                            </div>
                                        </div>
                                    </div>
                                    ';
                                }
                            }
                        ?>
                    </div>
                    <div class="card-body">
                        <div class="">
                            <div class="d-flex  my-2 mt-3">
                                <h4 class="fw-bold">Name:</h4>
                                <h4 class="mx-3">
                                    <?php
                                    echo $Name;
                                    ?>
                                </h4>
                            </div>
                            <div class="d-flex  my-2 mt-3">
                                <h4 class="fw-bold">Subject:</h4>
                                <h4 class="mx-3">
                                    <?php
                                    echo $subject;
                                    ?>
                                </h4>
                            </div>
                            <div class="d-flex  my-2 mt-3">
                                <h4 class="fw-bold">Email:</h4>
                                <h4 class="mx-3">
                                    <?php
                                    echo $email;
                                    ?>
                                </h4>
                            </div>
                            <!-- <div class="col-4 mx-auto my-2 mt-3">
                                <h3 class="fw-bold">Detail</h3>    
                            </div> -->
                            <p>
                                <?php
                                echo $query;
                                ?>
                            </p>

                        </div>
                    </div>

                </div>

            </div>

        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</body>

</html>