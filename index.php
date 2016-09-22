<?php

include ('header.php');
include ('conexion.php');
$query = "SELECT * FROM persons";
$result =mysqli_query($conexion,$query);
 ?>
 <div class="row ">
   <form class="col s9 offset-s1   m6 offset-m3 l4 offset-l4 card z-depth-1" action="insertar.php"  method="POST">
     <h4 class="center">Sign Up Form</h4>
     <div class="row">
         <div class="input-field col s12">
           <input  type="text"  name="FirstName">
         </div>
      </div>
      <div class="row">
          <div class="input-field col s12">
            <input  ID="first_name" type="text"  name="LastName">
          </div>
       </div>
       <div class="row">
           <div class="input-field col s12">
             <input  ID="first_name" type="text"  name="Address">
           </div>
        </div>
        <div class="row">
            <div class="input-field col s1 offset-s4">
              <input type="submit" class=" btn red validate " value="Guardar">
            </div>
         </div>
       </div>
      </div>

    </form>

    <table>
      <thead><tr><th>First</th><th>LastName</th><th>Address</th></tr></thead>
      <tbody>
        <?php
          while ($row = mysqli_fetch_assoc($result)) {
            ?>
            <tr>
              <td><?php echo $row['FirstName'];?></td>
              <td><?php echo $row['LastName'];?></td>
              <td><?php echo $row['Address'];?></td>
              <td>
                <a href="http://localhost/cruds/editform.php?ID=<?php echo $row['ID']; ?>">Edit</a>
                <a href="http://localhost/cruds/eliminar.php?ID=<?php echo $row['ID']; ?>">Delete</a>
              </td>
            </tr>
         <?php
           }
           mysqli_close($conexion);
          ?>
      </tbody>
    </table>

 <?php
 include 'footer.php';
  ?>
