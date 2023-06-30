<?php include('admin/includes/dbconnection.php'); ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> Subject Allocation System</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        <!-- Responsive navbar-->
        <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
            <div class="container">
                <a class="navbar-brand" href="#!"> Subject Allocation System (SAS)</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
                        <li class="nav-item"><a class="nav-link" href="index.php">Home</a></li>
                        <li class="nav-item"><a class="nav-link" href="admin/login.php">Admin</a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page header with logo and tagline-->
        <header class="py-5 bg-light border-bottom mb-4">
            <div class="container">
                <div class="text-center my-5">
                    <h1 class="fw-bolder"> Subject Allocation System</h1>
                    <!-- <p class="lead mb-0">A Bootstrap 5 starter layout for your next blog homepage</p> -->
                </div>
            </div>
        </header>
        <!-- Page content-->
        <div class="container">
            <div class="row">
                <!-- Blog entries-->
                
                <!-- Side widgets-->
                <div class="col-lg-12">
                    <!-- Search widget-->
                    <div class="card mb-4">
                        <div class="card-header">Search</div>
                        <form method="post">
                        <div class="card-body">
                            <div class="input-group">
                                <input class="form-control" type="text" placeholder="Search teacher by name or emp id" aria-label="Enter search term..." aria-describedby="button-search" name="searchdata" />
                                <button class="btn btn-primary" id="button-search" name="search" type="submit" type="button">Go!</button>
                            </div>
                        </div></form>
                    </div>
                    <!-- Categories widget-->
                    
                    <div class="card mb-4">
                        <div class="card-header">Categories</div>
                        <div class="card-body">



                                        <table  class="table table-striped table-bordered" border="1">
                                            <thead>
                                               <tr>
                                                    <th>S.No</th>
                                                    <th>Faculty Name</th>
                                                    <th>Course Name</th>
                                                    <th>Subject Name</th>
                                                    <th>Allocation Date</th>
                                                    
                                                </tr>
                                            </thead>
                                            <tbody>
                                              
                                                <tr>
                                                   
                                                </tr>
                                            
                                            </tbody>
                                            
 
                                        </table>
                                        
              
                        </div>
                    </div>
                    <!-- Side widget-->
       
                </div>
            </div>
        </div>
        <!-- Footer-->

        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
