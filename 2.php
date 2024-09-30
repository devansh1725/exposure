<html>
<head>
<title>Registration</title>
<style>
body{
  font-family: Calibri, Helvetica, sans-serif;
  background-color: indigo;
  display: flex;
            align-items: center;
            justify-content: center;
            height: 100 vh;
            margin: 0;
	   
}
.container {
    padding: 20px;
    background-color: lavender;
}

input[type=text], input[type=password], textarea {
  width: 250px;
  padding: 15px;
  margin: 5px 0 22px 0;
  display: inline-block;
  border: none;
  background: seashell;
}
input[type=text]:focus, input[type=password]:focus {
  background-color: thistle;
  outline: black;
}
 div {
            padding: 10px 0;
         }
hr {
  border: 1px solid #f1f1f1;
  margin-bottom: 25px;
}
h1 {
    color:darkmagenta;
   }
.registerbtn {
  background-color: darkmagenta;
  color: seashell;
  padding: 16px 20px;
  margin: 8px 0;
  border: none;
  cursor: pointer;
  width: 100%;
  opacity: 0.9;
}
.registerbtn:hover {
  opacity: 1;
}
</style>
</head>
<body>
<form action = "3.php" method="POST">
  <div class="container">
  <center>  <h1> Student Registeration Form</h1> </center>
  <hr>
  <label>User ID (Auto-generated):</label>
	<input type="text" id="userId" name="userId" readonly size="15">
        <br><br>
  <label> Firstname </label> 
	<input type="text" name="Firstname" placeholder= "Firstname" 	size="15" 
	pattern="[A-Za-z]+" required /> 
<br>
  <label> Lastname: </label>  
	<input type="text" name="Lastname" placeholder="Lastname" size="15" 
	pattern="[A-Za-z]+"required /> 
<div>
<label> 
	Course :
</label> 

	<select name="Course">
	<option value="BCA">BCA</option>
	<option value="MCA">MCA</option>
	</select>

</div>
<div>
<label> 
	Event :
</label> 

	<select name="Event">
	<option value="quiz">Quiz</option>
	<option value="coding">Coding</option>
	<option value="sports">Sports</option>
	</select>

</div>
<div>
<label> 
	Gender :
</label><br>
	<input type="radio" value="Male" name="Gender" checked > Male 
	<input type="radio" value="Female" name="Gender"> Female 
	<input type="radio" value="Other" name="Gender"> Other

</div>
<label> 
<br>
	Phone :
</label> 
	<input type="tel" name="Phone" placeholder="phone no." size="10"/ 	pattern="[0-9]+" required> 
<br><br>
<label for="email"><b>Email</b></label>  
	<input type="email" placeholder="Enter Email" name="Email" 	autocomplete="@gmail.com" required>  
<br><br>
<button type="submit" value="submit" class="registerbtn">Register</button>  
</form>
<script>
function generateUserId() {
            // Generate a random number between 1 and 1000
            const userId = Math.floor(Math.random() * 1000) + 1;
            return userId;
        }
 window.onload = function() {
            document.getElementById('userId').value = generateUserId();
        }
</script>
</body>
</html>