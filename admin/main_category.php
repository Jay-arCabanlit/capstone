<?php 
session_start();
include "../connect/connection.php";
include "../function/class_product.php";
$maincat = new products;
$result = $maincat->viewmaincat();
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
            <h1><span class="glyphicon glyphicon-cog" aria-hidden="true"></span> Pages<small>Manage Site Pages</small></h1>
          </div>
          <div class="col-md-2">
            <div class="dropdown create">
              <button class="btn btn-default dropdown-toggle" type="button" id="dropdownMenu1" data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                Create Content
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
                        <form  action="add_category.php" method="post">
                          <br>
                          <input class="form-control"  type="text" name="catname" placeholder="Add Category"> <br>
                          <button type="submit" name="maincat" class="btn btn-success">Submit</button>
                           <table class="table table-striped table-hover">
                      <tr>
                        <th>Category ID</th>
                        <th>Category Name</th>
                        <th>Edit</th>
                        <th>Delete</th>
                      </tr>
                      <tr>
                         <?php foreach ($result as $d): ?>
                        <td><?php echo $d->cat_id; ?></td>
                        <td><?php echo $d->cat_name; ?></td>
                        <td><a href="main_cat_update.php?id=<?php echo $d->cat_id; ?>">Edit</a></td>
                        <td><a href="delete.php?id=<?php echo $d->cat_id;?>">Delete</a></td>
                      </tr>
                     <?php endforeach; ?>
                    </table>
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
