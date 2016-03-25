<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Edit Form</title>

</head>

<body>
	<div class="topbar"> <h1 style="color:#FFF"><center>Edit Form</center></h1></div>    
	<center>
    <div class="box">
    	<?php
		// Look for book id in the database table
		$id = $_GET['bookid'];
		include ("connect.php");
		$i ="select * from book_tbl where bookid=".$id;
		$h= mysql_query($i);
		if($tr=mysql_fetch_array($h))
		{
	?>
    <table border="1"><form method="post" action="">
    	<tr>
        	<th>Book ID:</th>
        	<td><input type="text" name="bookid" value="<?php echo $tr[0]; ?>"/></td>
        </tr>
        <tr>
        	<th>Name:</th>
        	<td><input type="text" name="txttitle" value="<?php echo $tr[1]; ?>" /></td>
        </tr>
        <tr>
        	<th>Author:</th>
        	<td>
            	<input type="text" name="txtauthor" value="<?php echo $tr[2]; ?>" /></td>
            </td>
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
        	<td colspan="2" align="center"><input type="submit" name="cmdedit" value="Save" />
            <a href="home.php">Home Page</a>
            </td>
        </tr>
	</form></table>
    </div>
    </center>
    <?php
        include ("connect.php");
        $i = mysql_query("update book_tbl set title='".$_POST['txttitle']."', author='".$_POST['txtauthor']."', isbn='".$_POST['txtisbn']."', publisher='".trim($_POST['txtpublisher'])."', year='".$_POST['txtyear']."' where bookid=".$_POST['bookid']);
        if($i==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=home.php">';
        }
        //header('Location::index.php');
        //exit;
        //mysql_close();
    ?>
</body>
</html>