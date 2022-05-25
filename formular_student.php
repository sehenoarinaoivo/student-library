<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap/dist/css/bootstrap.css" type="text/css">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/w3.css" type="text/css">
    <link rel="stylesheet" href="fontawesome/css/all.css" type="text/css">
    <title>Formulaires</title>
</head>
<body>
    <div class="create-formular">
        <form class="formular" action="insert_dataLibrary.php" method="post">
            <fieldset>
                <legend><center class="head-legend">New Sutend</center></legend>
                
                <label class="label-name label-input" for="">Name and First-Name:</label>
                <input type="text" placeholder="Name and Firs-Name" name="nameStudent" class="input-tall" id="name-first-name"><br>
                <label class="label-school label-input" for="">School-Name:</label>
                <input type="text" placeholder="School-Name" name="schoolName" class="input-tall" id="school-name"><br>
                <label class="label-level label-input" for="">Study-Level:</label>
                <input placeholder="Study-Level" name="studentLevel" class="input-tall" id="study-level">
                    <!-- <option value="" id="university">University</option>
                    <option value="" id="primary">Primary</option>
                    <option value="" id="college">College</option>
                    <option value="" id="high-school">High-scool</option> -->
                <!-- </select>--><br> 
                <label class="label-age label-input" for="">Age:</label>
                <input type="number" placeholder="Your Age" name="studentAge" class="input-tall" id="student-age"><br>
                <label class="label-adress label-input" for="">Adress:</label>
                <input type="text" placeholder="Adress" name="studentAdress" class="input-tall" id="student-adress"><br>
                <label class="label-email label-input" for="">Email:</label>
                <input type="email" placeholder="Email Adress" name="studentEmail" class="input-tall" id="student-email"><br>
                <button type="submit" class="btn btn-primary">enregistrer</button>
            </fieldset>
        </form>
    </div>
</body>
</html>