<html>
    <head>
        <title>Results</title>
        <link rel="stylesheet" href="profirst.css">
    </head>
    <div id=headdiv><header> <img class="small-logo" src="https://lms.cbit.org.in/pluginfile.php/1/theme_more/smalllogo/1590642133/garland_logo.png" alt="Site logo" /><a href="https://www.cbit.ac.in/" target="_blank">CHAITHANYA BHARATHI INSTITUTE OF TECHNOLOGY(A)</a>
</header></div>
    <body>
        <script>
         var dt=new Date();
         document.write("<br/>");
         document.write("<center>");
         x=dt.getFullYear()+1;
         document.write("<h1>" + "RESULTS-"+dt.getFullYear()+-x);
         document.write("</h1>");
         document.write("</center>");
      </script>
<form Action="studenttbl.php" method="POST">
 <table id="tablog1"  width="350" height="80" cellspacing="10" background-color= "#ffffff"cellpadding = "5" border-radius= "25px">
    <caption>Student/Lecturer</caption>
            <tr><form>
                <th><img src="https://www.pngitem.com/pimgs/m/256-2560200_username-conversion-account-icon-png-transparent-png.png" height="20" width="35"></th>
<td><input type="text" id="input-1" class="input" placeholder="Your Username" aria-label="Your Username" aria-invalid="false" value="" name="username" aria-required="true" autofocus height="40"/></td>
            </form></tr><br/>
            <tr>
                <th><img src="https://img.icons8.com/doodle/2x/password.png" height="20" width="35"</th>
<td>
<input type="password" id="input-2" class="input" placeholder="Your Password" aria-label="Your Password" aria-invalid="false" size="20" name="password" aria-required="true"/></td>
            </tr><br/>
<tr>
                <th><img src="https://upload-icon.s3.us-east-2.amazonaws.com/uploads/icons/png/9772771411530273514-64.png" height="20" width="35"</th>
<td>
<select name="role" id="roledrop">
    <option value="student">Student</option>
    <option value="lecturer">Lecturer</option>
   
  </select>
  <br><br>
</td>
            </tr>
			<tr>
			<td><input align="centre" type="submit" name="submit" value="Login" colspan="2" width="100px"></td></td>
			</tr><br/>
        </table>

  <form>

<table id="tablog2"  width="350" height="80" cellspacing="10" background-color= "#ffffff"cellpadding = "5" border-radius= "25px">
    <caption>Administrator</caption>
            <form Action="Mp.php" method="post">
<tr>
                <th><img src="https://www.pngitem.com/pimgs/m/256-2560200_username-conversion-account-icon-png-transparent-png.png" height="20" width="35"></th>
<td><input type="text" id="input-1" class="input" placeholder="Username" aria-label="Your Username" aria-invalid="false" value="" name="username" aria-required="true" autofocus height="40"/></td>
            </tr><br/>
            <tr>
                <th><img src="https://img.icons8.com/doodle/2x/password.png" height="20" width="35"</th>
<td>
<input type="password" id="input-2" class="input" placeholder="Password" aria-label="Your Password" aria-invalid="false" size="20" name="password" aria-required="true"/></td>
            </tr>
<br/>
<tr>
<td>
<input align="centre" type="submit" name="submit" value="Login" colspan="2" width="100px"></td>
</tr>
</form>
</table>
</body>
</html>
