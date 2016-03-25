<!--Name: Ngu Hoang
	Class: CMPS 294
	Project 4 PHP
	Date: 03/24/2016
 -->

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Book Database</title>
</head>
<body>
<center><h1>Book Inventory Management</h1></center>
<a class="addnew" href="Add_Form.php" style="font-face:Khmer OS Battambang; font-size:24px;">Add a new book</a></font>
	<div class="search">
	<form method="post" action="search.php">
    <select name="searchop">
    	<option>Book ID</option>
    	<option>Title</option>
        <option>Author</option>
        <option>ISBN</option>
    </select>
	<input type="text" name="txtsearch" placeholder="Type to Search" /><input type="submit" name="cmdsearch" value="Search" />
    </form>
    </div>
	<table border="1">
    	<tr>
            <th>Book ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>ISBN</th>
            <th>Publisher</th>
            <th>Year</th>
            <th>Option</th>
    	</tr>
        <?php
			//Check for information in the table and display.
			include "connect.php";
			$i = "select * from book_tbl";
			$h = mysql_query($i);
			while($tr=mysql_fetch_array($h))
			{
		?>
        <tr>
            <td><?php echo $tr[0]; ?></td>
            <td><?php echo $tr[1]; ?></td>
            <td><?php echo $tr[2]; ?></td>
            <td><?php echo $tr[3]; ?></td>
            <td><?php echo $tr[4]; ?></td>
            <td><?php echo $tr[5]; ?></td>
            <td align="center"><a href="Delete_Form.php? bookid=<?php echo $tr[0];?>">Delete</a> / <a href="Edit_Form.php? bookid=<?php echo $tr[0];?>">Edit</a> </td>    
        </tr>
        <?php
			}
		?>
		
    </table>
</body>
</html>