<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "szkola";
$conn = mysqli_connect($servername, $username, $password, $dbname);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="witam.css">
</head>



<body>
    <div id="box">
        <h1> klasa <br>
            <form action="index2.php" method="post">
                name <input type="text" id="text" name="name_klasa"><br>
                <input type="submit" id="button" name="a1"><br><br><br>
                <?php
            if(isset($_POST['a1']) && isset($_POST['name_klasa'])!='')
            {
                $klasa = $_POST['name_klasa'];
                $sql = "INSERT INTO klasa (name) VALUES ('$klasa');";
                mysqli_query($conn, $sql);
            }


            ?>
            </form>
            <h1> student <br>
                <form action="index2.php" method="post">
                    name <input type="text" id="text" name="name_student"><br>
                    surname <input type="text" id="text" name="surname_student"><br>
                    class_id <input type="text" id="text" name="id_student"><br>
                    <input type="submit" id="button" name="b2"><br><br><br>
                    <?php
            if(isset($_POST['b2']) && isset($_POST['name_student'])!='' && isset($_POST['surname_student'])!='' && isset($_POST['id_student']) !='')
            {
                $student = $_POST['name_student'];
                $student1 = $_POST['surname_student'];
                $student2 = $_POST['id_student'];
                $sql = "INSERT INTO student (name, Surname, class_id) VALUES ('$student', '$student1', '$student2');";
                mysqli_query($conn, $sql);
            }


            ?>

                </form>
                <h1> subject <br>
                    <form action="index2.php" method="post">
                        name <input type="text" id="text" name="name_subject"><br>
                        class_id <input type="text" id="text" name="class_id"><br>
                        <input type="submit" id="button" name="c3"><br><br><br>
                        <?php
            if(isset($_POST['c3']) && isset($_POST['name_subject'])!='' && isset($_POST['class_id'])!='')
            {
                $subject = $_POST['name_subject'];
                $subject1 = $_POST['class_id'];
                $sql = "INSERT INTO subject (name, class_id) VALUES ('$subject', '$subject1');";
                mysqli_query($conn, $sql);
            }


            ?>
                    </form>

                    <h1> teacher <br>
                        <form action="index2.php" method="post">
                            name <input type="text" id="text" name="name_teacher"><br>
                            surname <input type="text" id="text" name="surname_teacher"><br>
                            age <input type="text" id="text" name="age"><br>
                            <input type="submit" id="button" name="d4"><br><br><br>
                            <?php
            if(isset($_POST['d4']) && isset($_POST['name_teacher'])!='' && isset($_POST['surname_teacher'])!='' && isset($_POST['age']) !='')
            {
                $teacher = $_POST['name_teacher'];
                $teacher1 = $_POST['surname_teacher'];
                $teacher2 = $_POST['age'];
                $sql = "INSERT INTO teacher (id, name, surname, age) VALUES (NULL, '$teacher', '$teacher1', '$teacher2');";
                mysqli_query($conn, $sql);
            }
            ?>

    </div>
    </form>
    <h1>Wyświetlanie tablic</h1>
    <form method="post">
        <input class="button" type="submit" name="button1" value="klasa" />
        <input class="button" type="submit" name="button2" value="uczniowie" />
        <input class="button" type="submit" name="button3" value="przedmioty" />
        <input class="button" type="submit" name="button4" value="nauczyciele" />
        <input class="button" type="submit" name="button5" value="uzytkownicy" />
    </form>

</body>

</html>