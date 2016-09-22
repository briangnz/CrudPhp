<?php
  include 'header.php';
  include 'conexion.php';
  $ID=$_GET['ID'];
  $query = "SELECT * FROM persons WHERE ID='$ID'";
  $result=mysqli_query($conexion,$query);

 ?>
 <div class="row">
   <form class="col s9 offset-s1   m6 offset-m3 l4 offset-l4 card z-depth-1" action="editar.php"  method="GET">
      <?php
      while($row =mysqli_fetch_assoc($result)){
       ?>
      <input type="hidden" name="ID" value="<?php echo $row['ID']; ?>">
     <h4 class="center">Edit Form</h4>
     <div class="row">
         <div class="input-field col s12">
           <input  type="text"  name="FirstName" placeholder="FirstName" value="<?php echo $row['FirstName']; ?>">
         </div>
      </div>
      <div class="row">
          <div class="input-field col s12">
            <input  id="first_name" type="text"  name="LastName" placeholder="LastName" value="<?php echo $row['LastName']; ?>">
          </div>
       </div>
       <div class="row">
           <div class="input-field col s12">
             <input  id="first_name" type="text"  name="Address" placeholder="Address" value="<?php echo $row['Address']; ?>">
           </div>
        </div>
        <div class="row">
            <div class="input-field col s1 offset-s4">
              <input type="submit" class=" btn red validate " value="Editar">
            </div>
         </div>
       </div>
      </div>
      <?php
    }
       ?>
    </form>
 </div>

 <?php
  include 'footer.php';
  ?>
