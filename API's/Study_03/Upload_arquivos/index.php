<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Image and Video Uploader</title>
    <link rel="stylesheet" type="text/css" href="style.css">
  </head>
  <body>
    <div  class="header">
      <h2>Upload File</h2>
    </div>
    <form method="post" action="upload.php" enctype="multipart/form-data">
      <div class="input-group">
        <label>Choose your file: </label>
        <input type="file" name="file" id="file">
      </div>
      <div class="input-group">
        <label>File description: </label>
        <input type="text" name="description">
      </div>
      <div class="input-group">
        <button type="submit" class="btn" name="submit">Submit</button>
      </div>
      <p><strong>Note: </strong>Only .png, .jpg, .mp4, .mov formats allowed.</p>
      <br>
      <p>Wanna see other uploads?<a href= "upload_page">Click here</a></p>
      <br>
      <p><strong>&reg All rights reserved</strong></p>
  </body>
</html>
