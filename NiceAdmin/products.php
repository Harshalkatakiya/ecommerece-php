<?php
session_start();

if (!isset($_SESSION["user_id"])) {
    header("Location: login.php");
    exit();
}

$username = $_SESSION["username"];
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Admin</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <?php
    require ('config.php');
    include('includes/head.php');
    $query = "select * from products";
    $result = $conn->query($query);
   
  ?>
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top d-flex align-items-center">

    <div class="d-flex align-items-center justify-content-between">
      <a href="index.html" class="logo d-flex align-items-center">
        <img src="assets/img/logo.png" alt="">
        <span class="d-none d-lg-block">Admin</span>
      </a>
      <i class="bi bi-list toggle-sidebar-btn"></i>
    </div><!-- End Logo -->

   
    <?php
    include('includes/navbar.php');
  ?>
   

  </header><!-- End Header -->

  <!-- ======= Sidebar ======= -->
  <aside id="sidebar" class="sidebar">

    <ul class="sidebar-nav" id="sidebar-nav">

      <li class="nav-item">
        <a class="nav-link " href="index.html">
          <i class="bi bi-grid"></i>
          <span>Dashboard</span>
        </a>
      </li><!-- End Dashboard Nav -->

    
      <li class="nav-item">
        <a class="nav-link collapsed" href="users-profile.html">
          <i class="bi bi-person"></i>
          <span>Customers</span>
        </a>
      </li><!-- End Profile Page Nav -->

    
      <li class="nav-item">
        <a class="nav-link collapsed" href="pages-blank.html">
          <i class="bi bi-file-earmark"></i>
          <span>Blank</span>
        </a>
      </li><!-- End Blank Page Nav -->

    </ul>

  </aside><!-- End Sidebar-->

  <main id="main" class="main" style="min-height: 500px;">

    <div class="pagetitle">
      <h1>Dashboard</h1>
      <nav>
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="index.html">Home</a></li>
          <li class="breadcrumb-item active">Dashboard</li>
        </ol>
      </nav>
    </div><!-- End Page Title -->

    <section class="section dashboard">
      <div class="row">

      <div class="card">
            <div class="card-body">
              <a href="addProduct.php"><h5 class="card-title">Datatables <button class="btn btn-primary btn-sm float-end">Add</button></h5></a>
              <!-- Table with stripped rows -->
              <table class="table datatable">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Name</th>
                    <th scope="col">{Position}</th>
                    <th scope="col">Age</th>
                    <th scope="col">Start Date</th>
                    <th scope="col">Action</th>
                  </tr>
                </thead>
                <tbody>
                <?php
                    while ($product = $result->fetch_assoc()) {
                        ?>
                  <tr>
                    <th scope="row"><?php echo $product["id"]; ?></th>
                    <td><?php echo $product["name"]; ?></td>
                    <td><?php echo $product["price"]; ?></td>
                    <td><?php echo $product["qty"]; ?></td>
                    <td><img height="30px" src="<?php echo $product["image"]; ?>" alt="<?php echo $product["image"]; ?>"></td>
                    <td><a href="editProduct.php?id=<?php echo $product["id"]; ?>">Edit</a>
                    <a href="deleteProduct.php?id=<?php echo $product["id"]; ?>">Delete</a></td>
                    
                  </tr>
                  <?php
                    } ?>
                </tbody>
              </table>
              <!-- End Table with stripped rows -->

            </div>
          </div>
      
      </div>
    </section>

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <?php
    include('includes/footer.php');
  ?>
  

</body>

</html>