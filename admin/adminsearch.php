<!DOCTYPE HTML>
<html>

<head>
  <title>Display Content</title>
  <meta name="description" content="website description" />
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <link rel="stylesheet" type="text/css" href="../assets/css/main.css" />
</head>

<body>
  <div id="page-wrapper">
 <header id="header" >

<h1><a href="../index.html">Display Content</a></h1>
<nav id="nav">
<ul>
<li class="special">
<a href="#menu" class="menuToggle"><span>Menu</span></a>
<div id="menu">
<ul>
   <li><a href='adminhome.php'>Go Home Page</a></li>
   <li><a href='adminlogout.php'>Log out</a></li>
</ul>
</div>
</li>
</ul>
</nav>
</header>

      <div class="content">
        <form name="input" action="adminsearchdisplay.php" method="post">
            Search For Name: <input type="text" name="SearchString" placeholder="ALL">
			<br />
            <input type="submit" value="Show" >
        </form>
      </div>
		
		<form action="adminhome.php">
           <input type="submit" value="Back">
            </form>	
		
    <footer>
      <p>Copyright &copy; KangMin </p>
    </footer>
  </div>
  
<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="../assets/js/main.js"></script>

</body>
</html>
