<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="./dom-CSS.css">
	<title>PMVSS</title>
</head>
<body>
	<div class="part-1">
		<div class="head">
			<h1 align="center" class="h">Welcome to PMVSS World</h1>
			<h2 align="center" class="h">We have a Solution..!!</h2>
			
			<form action="index.php" method="post">
				<h4 align="center" class="h">Domain Name</h2><input type="text" name="domain" placeholder="Type a Domain">
				<input type="submit" value="Submit">Scan Now..--></input>
			</form>

				 <?php echo $_POST["domain"]; ?> goes to scanning process 
			
		</div>
	</div>


	<div class="middle">
		<h3 align="center">Our work is to Find Vulnerable Domains...</h3>
	</div>

	<h1 class="msg">We provide us following Solutions..!!!</h1>
	<div class="Mothaa">
		<div class="chota-1">
			<div class="im-1">
				<h5 align="center" class="ngu">Solution-1</h5>
			</div>
			<div class="h1">
			<h6 class="t1">CVE</h6>				
			</div>
			<div class="para-1">
				Common Vulnerabilities and Exposures, is a list of publicly disclosed computer security flaws. When someone refers to a CVE, they mean a security flaw that's been assigned a CVE ID number.
			</div>
		</div>

		
		<div class="chota-2">
			<div class="im-2">
				<h5 align="center" class="ngu">Solution-2</h5>
			</div>
			<div class="h1-2">
				<h6 class="t1-2">Patches</h6>
			</div>
			<div class="para-2">
				Security patch management is the ongoing process of applying updates that help resolve code vulnerabilities or errors for applications 	across your system.
			</div>
		</div>
		
		
		<div class="chota-3">
				<div class="im-3">
					<h5 align="center" class="ngu">Solution-3</h5>
				</div>
				<div class="h1-3">
				<h6 class="t1-2">OWASP</h6>
				</div>
				<div class="para-3">
					The Open Web Application Security Project (OWASP) is a nonprofit foundation dedicated to improving software security.
				</div>
		</div>
	</div>


</body>
</html>
