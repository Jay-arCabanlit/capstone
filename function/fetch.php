<?php
include "../connect/connection.php";
include "function.php";
session_start();
$CRUD_user = new CRUD;
global $connect;

if(isset($_POST["update"])){

    $output = '';
    $res = $CRUD_user->getproduct_by_id($_POST['update']);


    $output .= '
    <div class="table-responsive">
         <table class="table table-striped">';


         $output .= '
         <tr>
              <td width="30%"><label>STUDENT ID#</label></td>
              <td width="70%">'.$res->pro_id.'<input type="hidden" name="id" value="'.$res->pro_id.'"></td>
         </tr>
         <tr>
              <td width="30%"><label>Product Name</label></td>
              <td width="70%"><input type="text" class="form-control" name="pro_name" value="'.$res->pro_name.'" /></td>
         </tr>
         <tr>
              <td width="30%"><label>Description</label></td>
              <td width="70%"><input type="text" class="form-control" name="description" value="'.$res->description.'" /></td>
         </tr>
         <tr>
              <td width="30%"><label>Availability</label></td>
              <td width="70%"><input type="text" class="form-control" name="availability" value="'.$res->availability.'" /></td>
         </tr>
         <tr>
              <td width="30%"><label>Price</label></td>
              <td width="70%"><input type="text" class="form-control" name="pro_price" value="'.$res->pro_price.'" /></td>
         </tr>';

         $output .= '</table></div>';
      echo $output;
}

 ?>
