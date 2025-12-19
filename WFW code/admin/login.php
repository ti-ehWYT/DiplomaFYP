<html>  
<head>  
    <title>PHP login system</title>  
    <link rel = "stylesheet" type = "text/css" href = "../CSS/login.css">   
</head>  
<body>  
    <div id = "frm">  
        <h1>Staff Login</h1>  
        <form name="f1" action = "../php/loginbackend.php" onsubmit = "return validation()" method = "POST">  
        <div id="fill">

            <p>  
                <label> Staff ID: </label>  <br>
                <input type = "text" id ="sid" name  = "sid" />  
            </p>  
            <p>  
                <label> Password: </label>  <br>
                <input type = "password" id ="pwd" name  = "pwd" />  
            </p>  
</div>
            <p>     
                <input type =  "submit" id = "btn" value = "Login" />  
            </p>  
        </form>  
    </div>  
    <script src="../JavaScript/loginerror.js"></script>
    </body>     
</html>  