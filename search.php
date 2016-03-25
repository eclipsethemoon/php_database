<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Search by ID</title>
</head>

<body>
<center><h1>Search Result</h1></center>
<a class="addnew" href="home.php" style="font-face:Khmer OS Battambang; font-size:16px;">Home Page</a></font>
	<table border="1">
    	<tr>
            <th>Book ID</th>
            <th>Title</th>
            <th>Author</th>
            <th>ISBN</th>
            <th>Publisher</th>
            <th>Year</th>
            <th>Option</th>        </tr>
    <?php
		$text = $_POST['txtsearch'];
		if($text==""){
			echo "No Data....Please Try Again!!!"."<br>";
			
		}
	?>
    <?php
		$cbo = $_POST['searchop'];
		$search = $_POST['txtsearch'];
		include('connect.php');
	?>
    <?php
		if($cbo=="Book ID")
		{
		$id = mysql_query("SELECT * FROM book_tbl WHERE bookid='$search'");
	?>

    <?php
	// Checking for book id and display in a table
		while($myid=mysql_fetch_array($id))
		{
	?>
		<tr>
		<td><?php echo $myid[0]; ?></td>
		<td><?php echo $myid[1]; ?></td>
        <td><?php echo $myid[2]; ?></td>
         <td><?php echo $myid[3]; ?></td>
         <td><?php echo $myid[4]; ?></td>
         <td><?php echo $myid[5]; ?></td>
		<td align="center"><a href="Delete_Form.php? bookid=<?php echo $myid[0];?>">Delete</a> / <a href="Edit_Form.php? bookid=<?php echo $myid[0];?>">Edit</a></td>
		</tr>
            <?php
		}
		}else if($cbo=="Title")
		{
		$ti = mysql_query("SELECT * FROM book_tbl WHERE title like '".$search."%'");
	?>
    <?php
		//check for title
		while($an=mysql_fetch_array($ti))
		{
	?>
			<tr>
		<td><?php echo $an[0]; ?></td>
		<td><?php echo $an[1]; ?></td>
                <td><?php echo $an[2]; ?></td>
                <td><?php echo $an[3]; ?></td>
                <td><?php echo $an[4]; ?></td>
                <td><?php echo $an[5]; ?></td>
                <td align="center"><a href="Delete_Form.php? bookid=<?php echo $an[0];?>">Delete</a> / <a href="Edit_Form.php? bookid=<?php echo $an[0];?>">Edit</a></td>
		</tr>
            <?php
				}
			?>  
     <?php
		}else if($cbo=="Author")
				{
        $au = mysql_query("SELECT * FROM book_tbl WHERE author like '".$search."%'");
     ?>
		<?php
		//check for author then display
		while($myau=mysql_fetch_array($au))
		{
		?>
		<tr>
		<td><?php echo $myau[0]; ?></td>
		<td><?php echo $myau[1]; ?></td>
                <td><?php echo $myau[2]; ?></td>
                <td><?php echo $myau[3]; ?></td>
                <td><?php echo $myau[4]; ?></td>
                <td><?php echo $myau[5]; ?></td>
		<td align="center"><a href="Delete_Form.php? bookid=<?php echo $myau[0];?>">Delete</a> / <a href="Edit_Form.php? bookid=<?php echo $myau[0];?>">Edit</a></td>
			</tr>
            <?php
				}
			}else if($cbo=="ISBN")
			{
			$g = mysql_query("SELECT * FROM book_tbl WHERE isbn like '".$search."%'");
			?>  
			<?php
			while($ge=mysql_fetch_array($g))
			{			
			?>
            <tr>
		<td><?php echo $ge[0]; ?></td>
		<td><?php echo $ge[1]; ?></td>
                <td><?php echo $ge[2]; ?></td>
                <td><?php echo $ge[3]; ?></td>
                <td><?php echo $ge[4]; ?></td>
                <td><?php echo $ge[5]; ?></td>
		<td align="center"><a href="Delete_Form.php? bookid=<?php echo $ge[0];?>">Delete</a> / <a href="Edit_Form.php? bookid=<?php echo $ge[0];?>">Edit</a></td>
			</tr>
            
            <?php
				}
			}
			?>
</table>
</body>
</html>