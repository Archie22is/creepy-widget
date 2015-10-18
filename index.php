<?php

	// declare widget height and width
	$height = "";
	$width = "";

?>

<!DOCTYPE HTML>
<html>
<head>
	<title>The Widget</title>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />	
	<meta name="viewport" content="width=device-width,initial-scale=1">
	<link rel="stylesheet" href="styles.css">
</head>

<body>

	<header>
		<h1>Embedded Code Example: </h1>
		<h3>Mess by: <a href="https://github.com/Archie22is" target="_blank">Archie22is</a>
	</header>
	
	<!-- Fancy things here -->
	<section>

		<div class="code">
			<!-- The code generator -->
			<h2>Generate Code</h2>
			<p>Enter your desired widget height &amp; width below: </p>
			<form class="theform "action="<?php echo $_SERVER['REQUEST_URI'];?>" method="post" >
				<div class="">
	                <p class="bigerror"><?php echo $big_error; ?></p>
	            </div>
	           	<div class="field">
				    <label for="height">Height: <span>*</span></label>
				</div>
				<div class="input">
				     <input type="text" name="height" value="<?php if(isset($_POST['height'])) echo $_POST['height'];?>" required="" minlength="2" name="height" aria-required="true">
				</div>
	           	<div class="field">
				    <label for="width">Width: <span>*</span></label>
				</div>
				<div class="input">
				     <input type="text" name="width" value="<?php if(isset($_POST['width'])) echo $_POST['width'];?>" required="" minlength="2" name="width" aria-required="true">
				</div>
				<div class="submit">
	                <input type="submit" name="submit" value="Gimme my widget">
	            </div>
			</form>

		</div>
		

		<?php 

			if(isset($_POST['submit'])) {
				$height = (int)$_POST['height'];
				$width = (int)$_POST['width'];

				// validate fields
				if( (empty($height)) && (empty($width)) ) {
	                $auto_output =  '<object data=http://www.drivesouthafrica.co.za/child-visa-checklist/ width="100%" height="100%"> 
								<embed src=http://www.drivesouthafrica.co.za/child-visa-checklist/ width="100%" height="100%"> </embed>
								<a href="http://www.drivesouthafrica.co.za" target="_blank">Powered by Drive South Africa</a>
							</object>
						</pre>
					</div>';
					?>
					<div class="widget-container">
						<h2>Widget Snipped</h2>
						<div class="source-code"> 
							<pre>
								<?php echo htmlspecialchars($auto_output); ?>
							</pre>
						</div>
					</div> 
					<?php
	            }
	            else {
	            	$fixed_output = '<object data=http://www.drivesouthafrica.co.za/child-visa-checklist/ width="' . $width . '" height="' . $height . '"> 
							<embed src=http://www.drivesouthafrica.co.za/child-visa-checklist/ width="' . $width . '" height="' . $height . '"> </embed>
							<a href="http://www.drivesouthafrica.co.za" target="_blank">Powered by Drive South Africa</a>
						</object>';
					?>
					<div class="widget-container">
						<h2>Widget Snipped</h2>
						<div class="source-code"> 
							<pre>
								<?php echo htmlspecialchars($fixed_output); ?>
							</pre>
						</div> 
					</div>
					<?php
	            }

			}

		?>


		<!-- The widget -->	
		<div class="embedded">
			<h2>Embedded Code Example </h2>	
			<object data=http://www.drivesouthafrica.co.za/child-visa-checklist/ width="650" height="500"> 
				<embed src=http://www.drivesouthafrica.co.za/child-visa-checklist/ width="650" height="500"> </embed>
				<a href="http://www.drivesouthafrica.co.za" target="_blank">Powered by Drive South Africa</a>
			</object>
		</div>


	</section>

	<footer>
		<p>Copyright <?php echo date('Y'); ?> 
			<a href="https://github.com/Archie22is" target="_blank">https://github.com/Archie22is</a>
		</p>
	</footer>

</body>

</html>