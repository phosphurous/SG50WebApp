<?php require_once("database.php"); ?>

<!DOCTYPE html>
<html>

<head>
    <title>Display Content</title>
    <meta name="description" content="website description" />
    <meta name="keywords" content="website keywords, website keywords" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <link rel="stylesheet" type="text/css" href="../assets/css/main.css" />
</head>

<body>
    <div id="page-wrapper">

<header id="header">

<h1><a href="index.html">Display Content</a></h1>
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

        <div id="site_content">
            <div class="content">
                    <?php					
                    $Search = $_POST['SearchString'];
                    if ($Search == "ALL")
                    {
                    $result = mysqli_query ($link,"SELECT * FROM tbregister" );
                    }
                    else
                    {
                    $result = mysqli_query($link,"SELECT * FROM tbregister WHERE name LIKE'".$Search."%'");
                    }

                    echo "<table border='1'>
                        <tr>
                            <th>Name</th>
                            <th>Age</th>
                            <th>Contact</th>
                            <th>Email</th>
                            <th>Gender</th>
                            <th>Address</th>
							<th>Occupation</th>
							<th>Event Knowledge</th>

                        </tr>";

                        while ($rows = mysqli_fetch_array($result))
                        {
                        echo "
                        <tr>
                            ";
                            echo "
                            <td>" . $rows['name'] . "</td>";
                            echo "
                            <td>" . $rows['age']  . "</td>";
                            echo "
                            <td>" . $rows['contact']  . "</td>";
                            echo "
                            <td>" . $rows['email']  . "</td>";
                            echo "
                            <td>" . $rows['gender']  . "</td>";
                            echo "
                            <td>" . $rows['address']  . "</td>";
                            echo "
							<td>" . $rows['occupation']  . "</td>";
                            echo "
							<td>" . $rows['eventknowledge']  . "</td>";
                            echo "
                        </tr>";
                        }
                        echo "
                    </table>";

                    mysqli_close($link);

                    ?>


                </form>
            </div>
			
			
		<form action="adminsearch.php">
           <input type="submit" value="Back">
            </form>	
			
        <footer>
            <p>Copyright &copy; KangMin </p>
        </footer>
		</div>
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
