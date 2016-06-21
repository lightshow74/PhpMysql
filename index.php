<!doctype html>                                                                                                                       
<html lang= "en" dir="ltr">
        <head>
                <meta charset= "UTF-8">
                <title>Olympic Medalists</title>
                <meta name= "keywords" content= "">
                <link rel= "stylesheet" type= "text/css" href= "css/styles.css"  media= "all" >
        </head>
        <body>
                                                                                                                                      
                <?php
				
				$servername = "localhost";
				$username = "josh";
				$password = "josh1234";
				$dbname = "webapp";

				// Create connection
				$con = mysqli_connect($servername, $username, $password, $dbname);
                                                                                                                                      
                $sql = "SELECT * FROM medalists";
                                                                                                                                      
                //run the query
                $medalist_query = mysqli_query($con,$sql);
                $medalist_rs = mysqli_fetch_array($medalist_query);
                                                                                                                                      
                //close the connection and the database
                //mysqli_close($con);
                ?>
                
				<article>
					<h1>Medalists</h1>
					
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
					
					<table>
							<tr>
									<th>First Name</th>
									<th>Last Name</th>
									<th>Medal</th>
									<th>Sport</th>
									<th>Event</th>
							</tr>
					<?php do {?>
							<tr>
									<td><?php echo $medalist_rs['FirstName'];?></td>
									<td><?php echo $medalist_rs['LastName'];?></td>
									<td><?php echo $medalist_rs['Medal'];?></td>
									<td><?php echo $medalist_rs['Sport'];?></td>
									<td><?php echo $medalist_rs['Event'];?></td>
																																		  
							</tr>
					 <?php } while ($medalist_rs=mysqli_fetch_array($medalist_query)); ?>
					</table>
				</article>
        </body>
</html>