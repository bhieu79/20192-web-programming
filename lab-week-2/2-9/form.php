<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Form received</title>
    </head>
    <body>
        <h1>Thank you for filling the form</h1>
        <?php
            $name = $_POST["name"];
            $email= $_POST["email"];
            $uni = $_POST["uni"];
            $gender = $_POST["gender"];
            $vehicle = $_POST["vehicle"];
            $opinion = $_POST["public"];
            $cmt = $_POST["cmt"];
            if ($gender=="male"){
                print("<br>Hello, Mr $name<br>");
            } else print("<br>Hello, Ms $name<br>");
            print("<br>You are studying at $uni with the email: $email<br>");
            print("<br>Transportation you use to go to school<br>");
            print("<ol>");
            foreach ($vehicle as $i){
                print("<br><li>$i</li>");
            }
            print("</ol>");
            if ($opinion=="Yes"){
                print("<br>You enjoy public transportation<br>");
            } else print("<br>You do not enjoy public transportation<br>");
            if (strlen($cmt) == 0){
                print("<br>You don't have any comment<br>");
            } else print("<br>Your comment is <br>$cmt<br>"); 
        ?>
    </body>
</html>
