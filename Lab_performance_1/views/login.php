<?php
    session_start();
    
?>

<html>
<head>
    <title>login</title>
</head>
<body>
    <table border="1" width=100%>
        <tr height="100px">
        <th></th>
            <th width=30% >
               <h3> PRD Management System </h3>
            </th>
           
            <th width=20%>

                <a href="signup.php">Registration</a>
            </th>
        </tr>

        <tr height="200px">
            <td width=20%></td>
            <td>
                <form method="post" action="../controllers/loginCheck.php">
                    <fieldset>
                        <legend>Login</legend>
                        <table align="center" >
                            
                            <tr height=40px>
                                <td>
                                    Username : 
                                </td>
                                <td>
                                    <input type="text" name="username" value="">
                                </td>
                            </tr>
                            <tr height=40px>
                                <td width=90px>
                                    Password : 
                                </td>
                                <td>
                                    <input type="password" name="password" value="">
                                </td>
                            </tr>
                

                            <tr>
                                <td colspan="2">
                                <input type="submit" name="submit" value="Login"> 
                                
                                   
                                </td>              
                            </tr>
                            <tr>
                                        
                            </tr>
                        </table>
                    </fieldset>

                </form>

            </td>
            <td width=20%></td>
        </tr>
    </table>
</body>
</html>