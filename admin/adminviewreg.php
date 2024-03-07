<?php 
include_once 'adminindexreg.php';
?>
<html>
<head>
<link rel="stylesheet" href="../assets/css/main.css" />
 </head>
<body>
<div id="page-wrapper">

<header id="header" class="alt">

<h1><a href="index.html">SG's 50th Birthday</a></h1>
<nav id="nav">
<ul>
<li class="special">
<a href="#menu" class="menuToggle"><span>Menu</span></a>
<div id="menu">
<ul>
   <li><a href='adminsearch.php'>Search for Registrants</a></li>
   <li><a href='adminhome.php'>Go Home Page</a></li>
   <li><a href='adminlogout.php'>Log out</a></li>
</ul>
</div>
</li>
</ul>
</nav>
</header>
       
       	<h2 class="reg">View the Registrants</h2> 
        
        <table border ="2" table width="826" class="regtable">
	<thead>
	<tr>
	<th width="185">
		Name
	</th>
	<th width="89">
		Age
	</th>
	<th width="89">
		Contact
	</th>
	<th width="152">
		Email
	</th>
	<th width="89">
		Gender
	</th>
	<th width="105">
		Address
	</th>
	<th width="109">
		 Occupation
	</th>
    <th width="97">
        Event Knowledge
    </th>
	<th></th>
	</tr>
	</thead>
     <tbody>
     <?php foreach($reg_list as $registrants) : ?>
         <tr>
         <td>
		<?php echo $registrants["name"]; ?>
		</td>
		<td>
		<?php echo $registrants["age"]?>
		</td>
		<td>
		<?php echo $registrants["contact"]?>
		</td>
		<td>
		<?php echo $registrants["email"]?>
		</td>
		<td>
		<?php echo $registrants["gender"]?>
		</td>
		<td>
		<?php echo $registrants["address"]?>
		</td>
		<td>
		<?php echo $registrants["occupation"]?>
		</td>
		<td>
        <?php echo $registrants["eventknowledge"]?>
        </td>
        <td>
                        	<form method="post" action="adminindexreg.php">
		<input type="hidden" name="ci" value="<?php echo $registrants["id"]; ?>" />
		<input type="hidden" name="action" value="edit" />
		<input type="submit" value="Edit" />
		</form> 
                        </td>
                        <td>
                        	<form method="POST" action="admindeletereg.php" 
		onSubmit="return ConfirmDelete();">
		<input type="hidden" name="ci" value="<?php echo $registrants["id"]; ?>" />
		<input type="hidden" name="action" value="delete" />
		<input type="submit" value="Delete" />
		</form>
                        </td>
                </tr>	
                <?php endforeach; ?>
                </tbody>
          </table>
    <form action="adminhome.php">
        <input type="submit" value="Back">
    </form>

        </div>  
    </div>  
	
	<!-- Scripts -->
			<script src="../assets/js/jquery.min.js"></script>
			<script src="../assets/js/jquery.scrollex.min.js"></script>
			<script src="../assets/js/jquery.scrolly.min.js"></script>
			<script src="../assets/js/skel.min.js"></script>
			<script src="../assets/js/util.js"></script>
			<!--[if lte IE 8]><script src="../assets/js/ie/respond.min.js"></script><![endif]-->
			<script src="../assets/js/main.js"></script>
</body>
</html>