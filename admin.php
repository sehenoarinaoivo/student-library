<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="bootstrap/dist/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <title>Admin</title>
</head>
<body>
    <div class="w3-padding w3-white notranslate">
        <div class="">
          <table class="table">
            <thead>
              <tr>
                <th>Suppr</th>
                <th>Edit</th>
                <!-- <th>#id</th> -->
                <th>Name of Student</th>
                <th>School Name</th>
                <th>School Level</th>
                <th> Age </th>
                <th>Adress</th>
                <th>Email</th>
              </tr>
            </thead>
            <?php
            //connect bdd
            include("data_library.php");
            $ins = $base->prepare("SELECT * FROM `control_library`");
            $ins->execute();
        
            while($result=$ins->fetch()) {
              
                // echo $result['nameStudent'];
        ?>
          <tbody>
            <tr class="table-active">
              <td><a href="delete_student.php?id=<?php echo $result['id'] ?>"><img src="img/road_field_.jpg" class="icon-editign" alt=""></a></td>
              <td><a href="admin.php?id_update=<?php  echo $result['id'] ?>"><img src="img/road_field_.jpg" class="icon-suppr" alt=""></a></td>
              <!-- <td><?php /*echo $result['id'] */?></td> -->
              <td><?php echo $result['nameStudent'] ?></td>
              <td><?php echo $result['schoolName'] ?></td>
              <td><?php echo $result['studentLevel'] ?></td>
              <td><?php echo $result['studentAge'] ?></td>
              <td><?php echo $result['studentAdress'] ?></td>
              <td><?php echo $result['studentEmail'] ?></td>
              <td><button class="btn btn-primary"><a>RAPPORT</a></button></td>

              <td action="control_Student.php" method="post">
                <input name="nameStudent" type="text" style="visiblity:hidden" value=<?php echo $result['nameStudent'] ?>>
                <button type="submit" class="btn btn-primary">
                  <a href="control_Student.php">CONTROL</a>
                </button>
              </td>
            </tr>
          </tbody>
              <?php } ?>
        </table>

              <!-- <tr class="table-primary">
                <td>2</td>
                <td>Harry Olivia</td>
                <td>INSCAM</td>
                <td>University</td>
                <td>16</td>
                <td>Sabotsy</td>
                <td>olivia@gmail.com</td>
              </tr>
              <tr class="table-success">
                <td>3</td>
                <td>Rafidiarisoa</td>
                <td>Ambohitsaina</td>
                <td>University</td>
                <td>17</td>
                <td>Ankatso 1</td>
                <td>charlie@gmail.com</td>
              </tr>
              <tr class="table-danger">
                <td>4</td>
                <td>Giovanne</td>
                <td>UNA</td>
                <td>University</td>
                <td>21</td>
                <td>Lazaret</td>
                <td>valencia@gmail.com</td>
              </tr>
              <tr class="table-info">
                <td>5</td>
                <td>Rakotomalala Fanaingo</td>
                <td>CNTEMAD</td>
                <td>University</td>
                <td>20</td>
                <td>Besarety</td>
                <td>naingo@gmail.com</td>
              </tr>
              <tr class="table-warning">
                <td>6</td>
                <td>Koloina Fahendrena</td>
                <td>IST</td>
                <td>University</td>
                <td>19</td>
                <td>Namehana</td>
                <td>koloina@gmail.com</td>
              </tr>
              <tr class="table-active">
                <td>7</td>
                <td>Raja Rakoto</td>
                <td>CNTEMAD</td>
                <td>University</td>
                <td>24</td>
                <td>Besarety</td>
                <td>raja@gmail.com</td>
              </tr>
              <tr class="table-secondary">
                <td>8</td>
                <td>Avotra Cirus</td>
                <td>Ankatso & CNTEMAD</td>
                <td>University</td>
                <td>21</td>
                <td>Ankatso 2</td>
                <td>masindahy@gmail.com</td>
              </tr>
              <tr class="table-light">
                <td>9</td>
                <td>Famonjena Norbert</td>
                <td>CNTENAD</td>
                <td>University</td>
                <td>20</td>
                <td>Ankatso 2</td>
                <td>terezy@gmail.com</td>
              </tr>
              <tr class="table-dark text-dark">
                <td>10</td>
                <td>Gracia</td>
                <td>Ambohitsaina</td>
                <td>University</td>
                <td>20</td>
                <td>Avaratr'Ankatso</td>
                <td>gracia@gmail.com</td>
              </tr>
            </tbody>
        </div>
        </div> -->

    
        
<?php 
    if(isset($_GET["id_update"])) {

        $ins = $base->prepare("SELECT * FROM `control_library` WHERE id=:id_upd");
        $ins->execute(array("id_upd"=>$_GET["id_update"]));
        $e=$ins->fetch();
?>
  <div class="create-formular">
      <form class="formular" action="update_student.php?id=<?php echo $e['id'] ?>" method="post">
          <fieldset>
              <legend><center class="head-legend">Editing</center></legend>

              <label class="label-name label-input" for="">Name and First-Name:</label>
              <textarea type="text" placeholder="Name and First-Name" name="nameStudent" class="input-tall" id="name-first-name" value=""><?php echo $e["nameStudent"] ?></textarea><br>
              <label class="label-school label-input" for="">School-Name:</label>
              <textarea type="text" placeholder="School-Name" name="schoolName" class="input-tall" id="school-name" value=""><?php echo $e["schoolName"] ?></textarea><br>
              <label class="label-level label-input" for="">Study-Level:</label>
              <input placeholder="Study-Level" name="studentLevel" class="input-tall" id="study-level" value=<?php echo $e["studentLevel"] ?>></input>
                  <!-- <option value="" id="university">University</option>
                  <option value="" id="primary">Primary</option>
                  <option value="" id="college">College</option>
                  <option value="" id="high-school">High-scool</option> -->
              <!-- </select>--><br>
              <label class="label-age label-input" for="">Age:</label>
              <input type="number" placeholder="Your Age" name="studentAge" class="input-tall" id="student-age" value=<?php echo $e["studentAge"] ?>></input> <br>
              <label class="label-adress label-input" for="">Adress:</label>
              <textarea type="text" placeholder="Adress" name="studentAdress" class="input-tall" id="student-adress" value=""><?php echo $e["studentAdress"] ?></textarea> <br>
              <label class="label-email label-input" for="">Email:</label>
              <input type="email" placeholder="Email Adress" name="studentEmail" class="input-tall" id="student-email" value=<?php echo $e["studentEmail"] ?>></input> <br>
              <div>
              <center><button type="submit" class="btn btn-primary">enregistrer</button></center>
              </div>
          </fieldset>

      </form>
    </div>
<?php } ?>
        

</body>
</html>