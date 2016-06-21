<!doctype html>                                                                                                                       
<html lang= "en" dir="ltr">
        <head>
                <meta charset= "UTF-8">
                <title>Olympic Medalists</title>
                <meta name= "keywords" content= "">
                <link rel= "stylesheet" type= "text/css" href= "css/styles.css"  media= "all" >
        </head>
        <body>
			<form action="insert.php" method="post">
				<p>
					<label for="firstName">First Name:</label>
					<input type="text" name="firstname" id="firstName">
				</p>
				<p>
					<label for="lastName">Last Name:</label>
					<input type="text" name="lastname" id="lastName">
				</p>
				<p>
					<label for="emailAddress">Medal:</label>
					<input type="text" name="medal" id="medal">
				</p>
				<p>
					<label for="emailAddress">Sport:</label>
					<input type="text" name="sport" id="sport">
				</p>
				<p>
					<label for="emailAddress">Event:</label>
					<input type="text" name="event" id="event">
				</p>
				<input type="submit" value="Submit">
			</form>
        </body>
</html>