<html>
    <body>
        <?php
        if (isset($_POST["submit"])){
            $name=$_POST["name"];
            $email=$_POST["email"];
            $website=$_POST["website"];
            $comment=$_POST["comment"];
            //$gender=$_POST["gender];
        }else{
            die ("sorry, you cannot access this page!");
        }
        if (!empty($name)) {
            echo "Thanks, <b>". $_POST["name"]. "</b><br>";
        }else{
            echo ("name is requiere <br>");
        }
        if (!empty($email)){
            echo "your email is:, ". $_POST["email"]. "<br>";
        }else{
            echo ("email is requiere <br>");
        }
        if (!empty($website)) {
            echo "your website is:, ". $_POST["website"]. "<br>";
        }else{
            echo ("website is requiere <br>");
        }
        if (!empty($comment)) {
            echo "comment ". $_POST["comment"]. "<br>";
        }else{
            echo ("comment is requiere <br>");
        }
        if (!empty($gender)) {
            echo "you are ". $_POST["gender"];
        }else{
            echo ("gender is requiere <br>");
        }
        ?>
        </body>
        </html>