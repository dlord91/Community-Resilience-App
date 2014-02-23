
<?php

 include_once'func.php';
 include_once'database_connect.php';


head('Emergency Information');


?>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
<script type="text/javascript" src="javascript.js"></script>
</head>
<body>


<?php

	nav('index.php');


?>



<div id="wrap">

	<h1>People in your area</h1>

		<div class="textBox">
			<p></p>
		</div><!--textBox-->
		



	<div id="content">
	
	
				<?php	emergency('cork');	?>
					
					
					
					
						
						
			</div><!--content-->
		
</div><!--wrap-->


</body>
</html>
