<?php 
session_start();
include "../connect/connection.php";
include "../function/class_product.php";
$user = new products;
$result = $user->viewcat();
$view = $user->viewsubcat();
global $connect;
 ?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Admin Area | Pages</title>
    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
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
          <a class="navbar-brand" href="#">AdminStrap</a>
        </div>
        <div id="navbar" class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li><a href="index.html">Dashboard</a></li>
            <li class="active"><a href="pages.html">Pages</a></li>
            <li><a href="posts.html">Posts</a></li>
            <li><a href="users.html">Users</a></li>
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Welcome, Brad</a></li>
            <li><a href="login.html">Logout</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>

    <header id="header">
      <div class="container">
        <div class="row">
          <div class="col-md-10">

          </div>
          <div class="col-md-2">
            <div class="dropdown create">
               
                <span class="caret"></span>
              </button>
              <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                <li><a type="button" data-toggle="modal" data-target="#addPage">Add Page</a></li>
                <li><a href="#">Add Post</a></li>
                <li><a href="#">Add User</a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </header>

    <section id="breadcrumb">
      <div class="container">
        <ol class="breadcrumb">
          <li><a href="index.html">Dashboard</a></li>
          <li class="active">Pages</li>
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
              <a href="create_product" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span>Add Product<span class="badge"></span></a>
            </div>


          </div>
          <div class="col-md-9">
            <!-- Website Overview -->
            <div class="panel panel-default">
              <div class="panel-heading main-color-bg">
                <h3 class="panel-title">Pages</h3 >
              </div>
              <div class="panel-body">
                <div class="row">
                      <div class="col-md-12">
                        <form  action="add_category.php" method="post" enctype="multipart/form-data">
                          <input class="form-control" type="text" placeholder="Inter product name" name="proname"><br>
                          <div class="form-row">
                            <div class="form-group col-md-6">
                          <label for="exampleFormControlSelect1">Select Category</label>
                          <select class="form-control" name="catid">
                            <?php foreach ($result as $d): ?>
                          <option value="<?php echo $d->cat_id; ?>"><?php echo $d->cat_name; ?></option>
                           <?php endforeach; ?>
                        </select>
                        </div>
                        <div class="form-group col-md-6">
                        <label for="exampleFormControlSelect1">Select Subcategory</label>
                          <select class="form-control" name="subcat">
                            <?php foreach ($view as $d): ?>
                          <option value="<?php echo $d->sub_cat_id; ?>"><?php echo $d->sub_cat_name; ?></option>
                           <?php endforeach; ?>
                        </select>
                        </div>
                        </div><br>
                          <input class="form-control" name="proimgone" type="file" placeholder="Select product image1"><br>
                          <input class="form-control" name="proimgtwo" type="file" placeholder="Select product image2"><br>
                          <input class="form-control" name="proimgtree" type="file" placeholder="Select product image3"><br>
                          <input class="form-control" name="proimgfour" type="file" placeholder="Select product image4"><br>
                          <input class="form-control" name="proimgfive" type="file" placeholder="Select product image5"><br>
                          <label class="mr-sm-2" for="inlineFormCustomSelect">Availability</label>
                          <select class="form-control mb-2 mr-sm-2" name="AvailaBility" id="dropdownMenu1" >
                          <option value="In Stock">In Stock</option>
                          <option value="To harvest">To Harvest</option>
                          </select>
                          <br>
                          <textarea class="form-control" type="text" placeholder="Write something About your product" name="profeaturefive"></textarea><br>
                          <input class="form-control" type="text" placeholder="Inter price" name="proprice"><br>
                        <br>
                          <button type="submit" name="add_product" class="btn btn-success">Submit</button>
                          </form>
                      </div>
                </div>
                <br>
               
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
