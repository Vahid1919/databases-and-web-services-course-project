<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link rel="stylesheet" type="text/css" href="../impct.css" />
</head>
<style>
    body{
        background-color: #1893f8;
    }
</style>
<body>
    
   <h1>Bank Details </h1>

   <a href="../MainHeader/AdminMaintenance/Maintenance.php">Maintenance Page</a>

    <!--Horizontal row-->
    <hr>

    <h2> Bank Details Page for Organizations </h2>
    <form>
        <table>
            <tr>
                <td>
                    Email Address:
                </td>
    
                <td>
                    <input type="email"  placeholder= "Your Email" name=””>
                </td>
            </tr>
    <tr>
        <td>
            Password:
        </td>

        <td>
            <input type="Password" placeholder = "Your Password" name="pwd" minlength="8">
        </td>
            </tr>

            <tr>
                <td>
                    Organization:
                </td>
    
                <td>
                    <input type="text"  placeholder= "Your Organization" name=””>
                </td>
            </tr>

            <tr>
                <td>
                    Bank name:
                </td>
    
                <td>
                    <input type="text"  placeholder= "Your bank name" name=””>
                </td>
            </tr>

            <tr>
                <td>
                    BIC:
                </td>
    
                <td>
                    <input type="text"  placeholder= "Your BIC" name=””>
                </td>
            </tr>

            
            <tr>
                <td>
                    IBAN:
                </td>
    
                <td>
                    <input type="text"  placeholder= "Your IBAN" name=””>
                </td>
            </tr>

            <tr>
                <td>
                    <input type="button" value="Submit">
                </td>
            </tr>

        </table>
    </form> 

    <a href="#">Top</a>
</body>
</html>