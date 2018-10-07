<?php
include "../connect/connection.php";
include "function.php";
session_start();
$CRUD_user = new CRUD;
global $connect;

if(isset($_POST["update"])){

    $output = '';
    $res = $CRUD_user->get_user_profile($_POST['update']);


    $output .= '
    <div class="table-responsive">
         <table class="table table-striped">';


         $output .= '
         <tr>
              <td width="70%"><input type="hidden" name="id" value="'.$res->users_id.'"></td>
         </tr>
         <tr>
              <td width="30%"><label>STUDENT ID#</label></td>
              <td width="70%">'.$res->id_number.'</td>
         </tr>
         <tr>
              <td width="30%"><label>First Name</label></td>
              <td width="70%"><input type="text" class="form-control" name="firstname" value="'.$res->Fname.'" /></td>
         </tr>
         <tr>
              <td width="30%"><label>Last Name</label></td>
              <td width="70%"><input type="text" class="form-control" name="lastname" value="'.$res->Lname.'" /></td>
         </tr>
         <tr>
              <td width="30%"><label>Username</label></td>
              <td width="70%"><input type="text" class="form-control" name="username" value="'.$res->username.'" /></td>
         </tr>
         <tr>
              <td width="30%"><label>Password</label></td>
              <td width="70%"><input type="text" class="form-control" name="password" value="'.$res->password.'" /></td>
         </tr>
         <tr>
              <td width="30%"><label>Birthday</label></td>
              <td width="70%"><input type="date" class="form-control" name="bday" value="'.$res->Bday.'" /></td>
         </tr>
         <tr>
              <td><label>Address</label></td>
              <td><input type="text" class="form-control" name="address" value="'.$res->Address.'" /></td>
         </tr>
         <tr>
              <td><label>ID Type</label></td>
              <td><select type="text" name="id_type" id="password" class="form-control input-md" placeholder="">
              <option value="'.$res->id_type.'">'.$res->id_type.'</option>
              <option value="Passport">Passport</option>
              <option value="Drivers License">Drivers License</option>
              <option value="SSS ID">SSS ID</option>
              <option value="Phil Health">Phil Health</option>
              <option value="Tin ID">Tin ID</option>
              <option value="Voters ID">Voters ID</option>
              <option value="Senior Citizen ID">Senior Citizen ID</option>
              <option value="Business Permit">Business Permit</option>
            </select></td>
               
         </tr>';

         $output .= '</table></div>';
      echo $output;
}

 ?>
