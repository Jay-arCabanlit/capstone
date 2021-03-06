<?php 
session_start();
// if (!isset($_SESSION['login'])) {
//   header('location:../404.php');
// }
include "../connect/connection.php";
include "../function/class_product.php";
$product =  new products;
$result = $product->viewallproduct();
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Dashboard</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="css/moded.css">
    <script src="http://cdn.ckeditor.com/4.6.1/standard/ckeditor.js"></script>
  </head>
  <body>

    <nav class="navbar navbar-default">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Admin</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="admin.php">Users Table</a></li>
            <li class="active"><a href="product_list.php">Product List</a></li>
            <li><a href="main_category.php">Main Categor</a></li>
            <li><a href="sub_category.php">Subcategory</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Admin</a></li>
            <li><a href="../function/logout.php">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard</h1>

        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li class="active">Dashboard</li>
        </ol>
      </div>
    </section>

    <section id="main">
      <div class="container">
        <div class="row">
          <div class="col-md-3">
            <div class="list-group">
              <a href="index.html" class="list-group-item active main-color-bg">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Dashboard
              </a>
              <a href="admin.php" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Users Table <span class="badge"></span></a>
              <a href="product_list.php" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>product list<span class="badge"></span></a>
              <a href="main_category.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Add Category <span class="badge"></span></a>
              <a href="sub_category.php" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Add Subcategory<span class="badge"></span></a>
            </div>
          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Website Overview</h3>
              </div>
              <div class="panel-body" tyle="overflow-x:auto;">
                  <div class="table-responsive">
                  <table class="table table-bordered table-condense">
                      <tr>
                        <th>Product Id</th>
                        <th>Users ID</th>
                        <th>Product Name</th>
                        <th>Product Image</th>
                        <th>Availability</th>

                        <th>Price</th>
                        <th>Added date</th>
                        <th>DELETE</th>
                      </tr>
                      <tr>
                        <?php foreach ($result as $d):?>
                        <td><?php echo $d->pro_id; ?></td>
                        <td><?php echo $d->users_id; ?></td>
                        <td><?php echo $d->pro_name; ?></td>
                        <td><img class="img-size" src="../img/<?php echo $d->pro_img1;  ?>">
                            <img class="img-size" src="../img/<?php echo $d->pro_img2;  ?>">
                            <img class="img-size" src="../img/<?php echo $d->pro_img3;  ?>">
                            <img class="img-size" src="../img/<?php echo $d->pro_img4;  ?>">
                        </td>
                        <td><?php echo $d->availability; ?></td>
                        <td><?php echo $d->pro_price; ?></td>
                        <td><?php echo $d->pro_added_date; ?></td>
                        <td><a href="delete.php?productid=<?php echo $d->pro_id; ?>">Delete</a></td>
                      </tr>
                      <?php endforeach; ?>
                    </table>
                    </div>

 
                </div>
              </div>
              </div>

              <!-- Latest Users -->
              <div class="panel panel-default">
                <div class="panel-heading">
                  <h3 class="panel-title">Latest Users</h3>
                </div>
              </div>
          </div>
        </div>
      </div>
    </section>

    <footer id="footer">
      <p>Copyright AdminStrap, &copy; 2017</p>
    </footer>

    <!-- Modals -->

    <!-- Add Page -->
    <div class="modal fade" id="addPage" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <form>
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title" id="myModalLabel">Add Page</h4>
      </div>
      <div class="modal-body">
        <div class="form-group">
          <label>Page Title</label>
          <input type="text" class="form-control" placeholder="Page Title">
        </div>
        <div class="form-group">
          <label>Page Body</label>
          <textarea name="editor1" class="form-control" placeholder="Page Body"></textarea>
        </div>
        <div class="checkbox">
          <label>
            <input type="checkbox"> Published
          </label>
        </div>
        <div class="form-group">
          <label>Meta Tags</label>
          <input type="text" class="form-control" placeholder="Add Some Tags...">
        </div>
        <div class="form-group">
          <label>Meta Description</label>
          <input type="text" class="form-control" placeholder="Add Meta Description...">
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary">Save changes</button>
      </div>
    </form>
    </div>
  </div>
</div>

  <script>
     CKEDITOR.replace( 'editor1' );
 </script>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>
