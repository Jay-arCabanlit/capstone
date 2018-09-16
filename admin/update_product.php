<?php 
session_start();
include "../connect/connection.php";
include "../function/class_product.php";
$user = new products;
$result = $user->viewcat();
$view = $user->viewsubcat();
$pro = $user->editproduct($_GET['proid']);
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
              <a href="pages.html" class="list-group-item"><span class="glyphicon glyphicon-list-alt" aria-hidden="true"></span> Pages <span class="badge">12</span></a>
              <a href="posts.html" class="list-group-item"><span class="glyphicon glyphicon-pencil" aria-hidden="true"></span> Posts <span class="badge">33</span></a>
              <a href="users.html" class="list-group-item"><span class="glyphicon glyphicon-user" aria-hidden="true"></span> Users <span class="badge">203</span></a>
            </div>

            <div class="well">
              <h4>Disk Space Used</h4>
              <div class="progress">
                  <div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%;">
                      60%
              </div>
            </div>
            <h4>Bandwidth Used </h4>
            <div class="progress">
                <div class="progress-bar" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%;">
                    40%
            </div>
          </div>
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
                        <form  action="update.php" method="post" enctype="multipart/form-data">
                          <input type="hidden" name="proid">
                          <input class="form-control" type="text" placeholder="Update product name" name="updatename" value="<?php echo $pro->pro_name;  ?>"><br>
                          <select class="custom-select" name="updatecatid">
                            <?php foreach ($result as $d): ?>
                          <option value="<?php echo $d->cat_id; ?>"><?php echo $d->cat_name; ?></option>
                           <?php endforeach; ?>
                        </select>
                          <select class="custom-select" name="updatesubcat">
                            <?php foreach ($view as $d): ?>
                          <option value="<?php echo $d->cat_id; ?>"><?php echo $d->sub_cat_name; ?></option>
                           <?php endforeach; ?>
                        </select><br>
                          <input class="form-control" name="updateimgone" type="file" placeholder="Update product image1"><br>
                          <img class="img-size" src="../img/<?php echo $pro->pro_img1;  ?>"><br>
                          <input class="form-control" name="updateimgtwo" type="file" placeholder="Update product image2"><br>
                          <img class="img-size" src="../img/<?php echo $pro->pro_img2;  ?>">
                          <input  class="form-control" name="updateimgtree" type="file" placeholder="Update product image3"><br>
                          <img class="img-size" src="../img/<?php echo $pro->pro_img3;  ?>">
                          <input class="form-control" name="updateimgfour" type="file" placeholder="Update product image4"><br>
                          <img class="img-size" src="../img/<?php echo $pro->pro_img4;  ?>">
                          <input class="form-control" type="text" placeholder="Update feature1" name="updatefeatureone" value="<?php echo $pro->pro_feature1; ?>"><br>
                          <input class="form-control" type="text" placeholder="Update feature2" name="updatefeaturetwo" value="<?php echo $pro->pro_feature2; ?>"><br>
                          <input class="form-control" type="text" placeholder="Update feature3" name="updatefeaturetree" value="<?php echo $pro->pro_feature3; ?>"><br>
                          <input class="form-control" type="text" placeholder="Update feature4" name="updatefeaturefour" value="<?php echo $pro->pro_feature4; ?>"><br>
                          <input class="form-control" type="text" placeholder="Update feature5" name="updatefeaturefive" value="<?php echo $pro->pro_feature5; ?>"><br>
                          <input class="form-control" type="text" placeholder="Update price" name="updateprice" value="<?php echo $pro->pro_price; ?>"><br>
                          <input class="form-control" type="text" placeholder="Update model" name="updatemodel" value="<?php echo $pro->pro_model; ?>"><br>
                           <input class="form-control" type="text" placeholder="Update keyword" name="updatekeyword" value="<?php echo $pro->pro_keyword; ?>"><br>
                           <input type="hidden" name="time">
                        <br>
                          <button type="submit" name="update_product" class="btn btn-success">Submit</button>
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
