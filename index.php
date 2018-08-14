<!DOCTYPE html>
<html>
<head>
	<title>SendVentures</title>
</head>
<body>

<h1>SendVentures, Inc.</h1>

<h2>Copyright 2018</h2>
	
	
	

	
	
	
	<?php
      if(isset($_POST['submit']))
      {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $file = fopen("text.txt","w+") or die("file not open"); //create and open text file
        $s = $name.",".$email."\n";
        fputs($file,$s) or die("Data is ghey"); //write single line to file
        fclose($file); //close file
      }


//echo file_put_contents("formdata.txt","Hello World. Testing!");

      ?>



    <main>

        <p>store email</p>
        <form action="#" method="POST">
            <input type="text" name="name" placeholder="full name">
            <input type="text" name="email" placeholder="your email">
            <button type="submit" name="submit">Subscribe</button>
        </form>

    </main>
	
	
	
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script async src="https://www.googletagmanager.com/gtag/js?id=UA-120542984-1"></script>
	<script>
	  window.dataLayer = window.dataLayer || [];
	  function gtag(){dataLayer.push(arguments);}
	  gtag('js', new Date());

	  gtag('config', 'UA-120542984-1');
	</script>

</body>
</html>
