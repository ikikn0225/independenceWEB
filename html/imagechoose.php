<?php include 'imageprocessform.php'?>

<!DOCTYPE html>
<html lang="ko">
  <head>
    <meta charset="utf-8">
    <!--bootstrap-->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="imagestyle.css">
    <title>Image Preview and Upload PHP</title>
  </head>
  <body>
    <div class="container">
      <div class="row">
        <div class="col-4 offset-md-4 form-div">
          <form action="imagechoose.php" method="post" enctype="multipart/form-data">

            <h3 class="text-center">Create Image</h3>
            <div class="form-group">
              <label for="profileImage">Profile Image</label>
              <input type="file" name="profileImage" id="profileImage" class="form-control">
            </div>
            <div class="form-group">
              <label for="bio">Bio</label>
            </div>
            <div class="form-group">
              <button type="submit" name="save-user" class="btn btn-primary btn-block">Save Image</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </body>
</html>
