<!DOCTYPE html>
<html>
    <head>

    <title>Page Title</title>

    </head>
    <body>
        <form action="addusers.php">
            First name:<input type="text" name= "forename"><br>
            Last name:<input type= "text" name= "surename"><br>
            Password:<input type= "password" name= "passwd"><br>
            House:<input type="text" name="house"><br>
            Year:<input type="text" name="year"><br>
            <!--Creates a drop down list-->
            Gender:<select name="gender">
                <option value="M">Male</option>
                <option value ="F">Femvale</option>
            </select>
        <br>
        <!-- Next 3 lines creat a radio button which we can use to select the user role--->
        <input type="radio" name="role" value="Pupil" checked> Pupil<br>
        <input type="radio" name="role" value="Teacher" checked> Teacher<br>
        <input type="radio" name="role" value="Admin" checked> Admin<br>
        <input type="submit" value="Add User">
        </form>
    </body>
</html>