<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Add Form</title>
</head>

<body >
<div </div>
<div id="topbar">
    	<center><h1 style="color:#939">Welcome to Add Form</h1>
    </div>
<center>
<div id="form">
		<table boder="1">
        	<form method="post" action="">
            	<tr>
                
                <?php
				//connect to database
					include ("connect.php");
					$g = mysql_query("select max(bookid) from book_tbl");
					while($id=mysql_fetch_array($g))
					{
				?>
                <!-- Display infomation table -->
                	<th>Book ID:</th>
                    <td><input type="text" name="bookid" value="<?php echo $id[0]+1; ?>" readonly="readonly" /></td>
                </tr>
				  <?php
					}
				?>
                
				<tr>
                	<th>Title:</th>
                    <td><input type="text" name="txttitle" placeholder="Type title"  /></td>
                </tr>
                <tr>
                	<th>Author:</th>
                    <td><input type="text" name="txtauthor" placeholder="Type author"  /></td>
                </tr>
                <tr>
                	<th>ISBN: </th>
                    <td>
                    	<input type="text" name="txtisbn" placeholder="Type isbn"  />
                    </td>
                </tr>
                <tr>
                	<th>Publisher</th>
                    <td><input type="text" name="txtpublisher" placeholder="Type publisher"  /></td>
                </tr>
                <tr>
                    <th>Year</th>
                    <td>
			<input type="text" name="txtyear" placeholder="Type year"  />

                    </td>
        		</tr>
                                <tr>
                    <td><input type="submit" name="cmdadd" value="Add" /></td>
                    <td><input type="reset" name="cmdreset" value="Clear"/></td>
			<a href="home.php"> Home Page </a>
                </tr>
        	</form>
        </table>
	</center>
    	</div>
        <?php   
		//Taking user input and submit it to database table
        $id = $_POST['bookid'];
        $title = trim($_POST['txttitle']);
        $author = trim($_POST['txtauthor']);
        $isbn = trim($_POST['txtisbn']);
        $publisher = trim($_POST['txtpublisher']);
        $year = trim($_POST['txtyear']);        
	if(isset($_POST['cmdadd'])){
        if(empty($title) || empty($author) || empty($isbn) || empty($publisher) || empty($year))
        {
            echo "<center><h3>Sorry please input data</h3></center>";
        }else{
        include "connect.php";
        $i = mysql_query("insert into book_tbl values('".$id."','".$title."','".$author."','".$isbn."','".$publisher."','".$year."')");        
	if($i==true){
        echo '<META HTTP-EQUIV="Refresh" Content="0; URL=home.php">';
        }
        //if($i==true){
        //header('Location:index.php');
        //exit;
        //mysql_close();
        //}
        }
    }
    ?>
</body>
</html>