<?php
require_once 'dbconfig.php';
// Get images form the database
$queryImages = "SELECT id, name, category, image FROM gallery ORDER BY id DESC";
$statement1 = $db->prepare($queryImages);
$statement1->execute();
$images = $statement1->fetchAll(PDO::FETCH_ASSOC);
$statement1->closeCursor();
?>
<!DOCTYPE html>
<html>
<head>
<title>Gallery</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
<link href="styles.css" rel="stylesheet" type="text/css"/>
</head>
<body>
<div class="container">
<div class="page-header">
<h1>Gallery list</h1>
<a class="btn btn-primary" href="addnew.php"> Add new </a>
<a class="btn btn-success" href="displayimages.php"> Gallery </a>
</div>
<br/>
<div class="row">  
<table class="table table-bordered table-responsive">
<tr>
<th>Image</th>
<th>Name</th>
<th>Category</th>
<th>Delete</th>
</tr>               
<?php foreach ($images as $image) : ?> 
<tr>
<td><img src="images/<?php echo $image['image']; ?>" class="img-rounded" height="150px" /></td>
<td><p><?php echo $image['name']; ?></p></td>
<td><p><?php echo $image['category']; ?></p></td>
<td><form action="delete_image.php" method="post"
      id="delete_image_form">
<input type="hidden" name="image_id"
       value="<?php echo $image['id']; ?>">
<input type="submit" class="btn btn-danger" value="Delete">
</form></td>
</tr>
<?php endforeach; ?>               
</table> 
</div>

</div>
<!-- Latest compiled and minified JavaScript -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>

<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
</body>
</html>