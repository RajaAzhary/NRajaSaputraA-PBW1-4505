<html>
    <head>
        <body>

            <h2>Student Union Form</h2>
            <form method="post" action = "proses.php">
                name: <input type ="text" name = "name">
                <br><br>
                E-mail: <input type ="text" name = "email">
                <br><br>
                website: <input type ="text" name = "website">
                <br><br>
                comment: <textarea name="comment" rows="5" cols="40" ></textarea>
                <br><br>
                gender: 
                <input type ="radio" name = "gender" value="female">Female
                <input type ="radio" name = "gender" value="male"> male
                <input type ="radio" name = "gender" value="other">other
                <br><br>  
                <input type="submit" name="submit" value="submit"   >    
            </form>
        </body>
    </head>
</html>