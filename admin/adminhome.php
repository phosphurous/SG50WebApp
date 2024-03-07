<html>
<style>
#cssmenu {
  background: #B0C4DE;
  text-align:center;
  width: auto;
}
#cssmenu ul {
  list-style: none;
  margin: 0;
  padding: 0;
  line-height: 1;
  display: block;
  zoom: 1;
}
#cssmenu ul:after {
  content: " ";
  display: block;
  font-size: 0;
  height: 0;
  clear: both;
  visibility: hidden;
}
#cssmenu ul li {
  display: inline-block;
  padding: 0;
  margin: 0;
}
#cssmenu.align-right ul li {
  float: right;
}
#cssmenu.align-center ul {
  text-align: center;
}
#cssmenu ul li a {
  color: #ffffff;
  text-decoration: none;
  display: block;
  padding: 15px 25px;
  font-family: 'Open Sans', sans-serif;
  font-weight: 700;
  text-transform: uppercase;
  font-size: 14px;
  position: relative;
  -webkit-transition: color .25s;
  -moz-transition: color .25s;
  -ms-transition: color .25s;
  -o-transition: color .25s;
  transition: color .25s;
}
#cssmenu ul li a:hover {
  color: #333333;
}
#cssmenu ul li a:hover:before {
  width: 100%;
}
#cssmenu ul li a:after {
  content: "";
  display: block;
  position: absolute;
  right: -3px;
  top: 19px;
  height: 6px;
  width: 6px;
  background: #ffffff;
  opacity: .5;
}
#cssmenu ul li a:before {
  content: "";
  display: block;
  position: absolute;
  left: 0;
  bottom: 0;
  height: 3px;
  width: 0;
  background: #333333;
  -webkit-transition: width .25s;
  -moz-transition: width .25s;
  -ms-transition: width .25s;
  -o-transition: width .25s;
  transition: width .25s;
}
#cssmenu ul li.last > a:after,
#cssmenu ul li:last-child > a:after {
  display: none;
}

#cssmenu.align-right li.last > a:after,
#cssmenu.align-right li:last-child > a:after {
  display: block;
}
#cssmenu.align-right li:first-child a:after {
  display: none;
}
@media screen and (max-width: 768px) {
  #cssmenu ul li {
    float: none;
    display: block;
  }
  #cssmenu ul li a {
    width: 100%;
    -moz-box-sizing: border-box;
    -webkit-box-sizing: border-box;
    box-sizing: border-box;
    border-bottom: 1px solid #fb998c;
  }
  #cssmenu ul li.last > a,
  #cssmenu ul li:last-child > a {
    border: 0;
  }
  #cssmenu ul li a:after {
    display: none;
  }
  #cssmenu ul li a:before {
    display: none;
  }
}

</style>
</html>

<?php
include "database.php";

$sql = "select * from tbregister";

$result= mysqli_query($link, $sql);

if(!$result)
{
	echo mysqli_error($link);
	exit();
}
while($rows = mysqli_fetch_array($result))
{
	$reg_list[] = array('name' => $rows['name'], 
							'age' => $rows['age'],
							'contact' => $rows['contact'],
							'email' => $rows['email'],
							'gender' => $rows['gender'],
							'address' => $rows['address'],
							'occupation' => $rows['occupation'],
							'eventknowledge' => $rows['eventknowledge']);
}
?>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="../assets/css/main.css">
</head>
<body>
<div id='cssmenu'>
<ul>
   <li class='active'><a href='adminlogout.php'>Log Out</a></li>
</ul>
</div>

<div id="wrap"> <!--wrap start-->
    	<div id="wrap2">  <!--wrap2 start-->
           
       	<h2 class="Reg">View the Registrants</h2> 
        
        <table border ="2" table width="100%" class="regtable2">
	<thead>
	<tr>
	<th width="185">
		Name
	</th>
	<th width="89">
		Age
	</th>
	<th width="152">
		Contact
	</th>
	<th width="152">
		Email
	</th>
	<th width="109">
		 Gender
	</th>
	<th width="109">
		 Address
	</th>
	<th width="109">
		 Occupation
	</th>
    <th width="97">
        Event Knowledge
    </th>
	</tr>
	</thead>
      <tbody>
        <?php foreach($reg_list as $registrants) : ?>
                	<tr>
                	<td>
		<?php echo $registrants["name"];?>
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
        </tr>
         <?php endforeach; ?>
         </tbody>
          </table>
          <br />
          
          <form action="adminindexreg.php">
           <input type="submit" value="edit">
		   </form>
		   
		   <form action="adminsearch.php">
           <input type="submit" value="search">
            </form>	
			
            </div>
     
    </div>  
    <footer>
	<p>Copyright @ 2015 <a href="#"> KangMin</a></p>
    </footer>
 </body>
    
