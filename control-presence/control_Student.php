<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/bootstrap/dist/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="../css/style.css" type="text/css">
    <link rel="stylesheet" href="../css/w3.css" type="text/css">
    <title>Fiche de Presence</title>
</head>
<body>
    <div class="w3-padding w3-white notranslate">
        <div class="table-responsive">
          <h2></h2>
          <table class="table" border="1">
            <thead>
              <tr>
                <th>Edit</th>
                <th>Suppr</th>
                <th>Name</th>
                <th>Presence</th>
                <th>Today Date</th>
              </tr>
            </thead>
            <?php 
            
            include("data_library.php");
            if(isset($_GET["id_insetion"])) {

                $ins = $base->prepare("SELECT * FROM `control_library` WHERE id=:id_insert");
                $ins->execute(array("id_insert"=>$_GET["id_insetion"]));
                $e=$ins->fetch();
              
            
            ?>
            <tbody>
                <tr action="" class="table-danger" method="post">
                    <td></td>
                    <td></td>
                    <td><label for="" name="studentName"><?php echo $result["studentName"]?></label></td>
                    <td><input type="checkbox" class="presence-radio-input" name="presenceStudent" id="presence"></td>
                    <td><center><input type="date" class="date-style-input table-danger" name="dateStudent" id="date"></center></td>
                    <td><button type="submit" onclick="control_presence()" class="btn btn-primary">CONFIRM</button></td>
                </tr> 
              <?php }?>
            <!--
                <tr class="table-primary">
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
            -->



              <script src="app.js"></script>
            </tbody>
          </table>
        </div>
    </div>
</body>
</html>