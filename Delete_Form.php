<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Delete Form</title>
</head>

<body>
	<div class="topbar"><center><h1 >Delete Form</h1></center></div>
	<div id="box"><center>
    
    	<?php
		// Get book id from database 
			$id = $_GET['bookid'];
			include ("connect.php");
			$i = "select * from book_tbl where bookid=".$id;
			$h = mysql_query($i);
			if($tr=mysql_fetch_array($h))
			{
		?>
    
	<!-- Display information table -->
	<table>
    		<form method="post" action="">
    	<tr>
        	<th>Book ID:</th>
            <td><input type="text" name="bookid" value="<?php echo $tr[0]; ?>" /></td>
        </tr>
        <tr>
        	<th>Title:</th>
            <td><input type="text" name="txttitle" value="<?php echo $tr[1]; ?>"/></td>
        </tr>
        <tr>
        	<th>Author:</th>
            <td><input type="text" name="txtauthor" value="<?php echo $tr[2]; ?>" /></td>
        </tr>
        <tr>
        	<th>ISBN:</th>
            <td><input type="text" name="txtisbn" value="<?php echo $tr[3]; ?>" /></td>
        </tr>
        <tr>
        	<th>Publisher:</th>
            <td><input type="text" name="txtpublisher" value="<?php echo $tr[4]; ?>" /></td>
        </tr>
        <tr>
        	<th>Year:</th>
            <td><input type="text" name="txtyear" value="<?php echo $tr[5]; ?>" /></td>
        </tr>
		   <?php
			}
		?>
        <tr>
            <td colspan="2" align="center">
            <input type="submit" name="cmddelete" value="Delete"/>
            <a href="home.php"> Home Page </a>
            </td>
        </tr>
        	</form>
    </table></center>
	</div>
        <?php
		//Submit the changes back to database base on book id
        $id=$_POST['bookid'];        
        include("connect.php");
        $i = mysql_query("delete from book_tbl where bookid=".$id);
        if($i==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=home.php">';
        }
        //header('Location::index.php');
        //exit;
        //mysql_close();
    ?>
</body>
</html>