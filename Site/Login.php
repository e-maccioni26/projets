<!DOCTYPE html>
<html lang="en">
<head>
    <title>Page Login</title>
    <link rel="stylesheet" href="style2.css">
</head>
<body>
    <h1 class="jolie">Connectez-vous</h1>
      <form name="myForm" action="/file.php" onsubmit="return validateForm()" method="post">
         <table class="form-style">
            <tr>
               <td>
                  <label>
                     Votre adresse mail <span class="required">*</span>
                  </label>
               </td>
               <td>
                  <input type="text" name="name" class="long"/>
                  <span class="error" id="errorname"></span>
               </td>
            </tr>
            <tr>
               <td>
                  <label>
                     Votre mot de passe <span class="required">*</span>
                  </label>
               </td>
               <td>
                  <input type="email" name="email" class="long"/>
                  <span class="error" id="erroremail"></span>
               </td>
            </tr>
            <tr>
            <tr>
               <td></td>
               <td>
                  <input type="submit" value="Envoyer">      
                  <input type="reset" value="Réinitialiser"> 
               </td>
            </tr>
         </table>
      </form>
</body>
</html>