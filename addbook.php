<?php
header('C:\xampp\htdocs\CIT358MidtermExam1');
    require 'config.inc.php';
    if(isset($_POST['submit'])){

        $title= $_POST['title'];
        $pages= $_POST['pages'];
        $author= $_POST['author'];
        $year_published= $_POST['year'];
}
$sql= "INSERT INTO book(title,pages,author,year_published) values('$title','$pages','$author','$year_published')";    

    mysqli_query($con,$sql); 




?>
<html>

<head>
	<title>Book Information</title>
    <link href="style.css" rel="stylesheet">
</head>

<body>
	
	<h1>Library Database</h1>
    <div class="wrap">
	<form method="post" action="">
		<legend>Book Information</legend>
		<label id="field">Title:</label> <input type="text" name="title" required/><br />
		<label id="field">Pages:</label> <input type="number" min=1 name="pages" required/><br />
		<label id="field">Author:</label> <input type="text" name="author" required/><br />
		<label id="field">Published Year:</label> <input type="text" name="year" required/><br />
        <br /> 
        <br /> 
    <input id="btn" type="submit" name="submit" value="Add Book"/>
    </form>
    </div>
    <div id="wrap-2">
    <h3>List of Stored Books</h3>
    <table border="2" cellpadding=5>
            <thead>
                <tr><th>Title</th>
                    <th>Pages</th>
                    <th>Author</th>
                    <th>Published Year</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php  
                    $result = mysqli_query($con,"SELECT * FROM book") or die("Invalid");
                    $row= mysqli_fetch_array($result);

                         while($row = mysqli_fetch_array($result)){
                            echo "<tr>                              
                                     <td>".$row["title"]."</td>
                                     <td>".$row["pages"]."</td>
                                     <td>".$row["author"]."</td>
                                     <td>".$row["year_published"]."</td>                 

                                <tr> ";
                    
                }
    ?>
            </tbody>
        </table>
    </div>
    <script type="text/javascript" src="assets/js/jquery-1.10.2.js"></script>
	<script type="text/javascript">
		function submit_form(){
			alert("A new book has been successfully added!");
		}
	</script>

</body>
</html>