
<!DOCTYPE html>
<html>
<head>
	<title>PHP</title>
	<style> 
       phpcoding {width:900px;margin: auto;background: #ddd}
       .headeroption,.footeroption{background: #444;color: #fff;text-align:center;padding: 20px; }
       .headeroption h2,.footeroption h2{margin: 0}
       .maincontent{min-height: 400px;padding:20px;}
    </style>
</head>
<body>
	<div class="phpcoding">
	<section class="headeroption">
		<h2><?php echo "PHP Fundamental";?></h2>
	</section>
	<section class="maincontent">

		<?php 
		//error class
		class student{
			function Department(){
				return "Computer Science";
			}
			function Details(){
				echo $this-> Department();
			}
		}
		$tr=new student();
		$tr->Details();


		?>
	</section> 
	
	></div>
  <section class="footeroption">
  	<h2><?php echo "Pronob Kumar Roy";?></h2>
  </section>
</body>
</html>
