<!DOCTYPE html>
<html>
	<head>
		<title>Fun time with friends</title>
	</head>
	<main>
		<div style="width: 1100px; text-align: center; margin: auto;">
			<?php
				if(isset($_POST['start'])){
					$x=1;
					while($x>0){
						echo 'Fun time with friends'.'<br>';
					}
				}
				
			?>
			<form method="post">
				<button style="color: white; background: tomato; border: none; outline: none; border-radius: 10px; width: 100px; height: 40px; font-size: 20px;" name="start">Start</button>
			</form>
		</div>
	</main>
</html>
