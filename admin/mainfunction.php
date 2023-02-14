<?php
@require_once 'includes/config.php';
include("includes/header.php");
?>
<?php
error_reporting(0);
if (isset($_POST['upload'])) {
  $breaking = 0;
  $tops = 0;
  $video = '';
  $file = $_FILES['file']['name'];
  $heading = $_POST['headings'];
  $video = $_POST['video'];
  $cartegory = $_POST['cartegory'];
  $breaking = $_POST['brak'];
  $tops = $_POST['tops'];
  $story = $_POST['story'];
  $usernamez = $_SESSION['Username'];
  $date = date("Y-m-d");
  $extension = pathinfo($_FILES["file"]["name"], PATHINFO_EXTENSION);
  if (!empty($usernamez)) {
    if ($extension == 'png' || $extension == 'jpeg' || $extension == 'jpg') {
      $sql = "INSERT INTO uploads (UPLOAD_DATE,IMAGES,CATEGORIES,BREAKING,TOP,HEADING, STORY, VIDEO, ST_by) VALUES ('$date', '$file', '$cartegory', '$breaking', '$tops', '$heading', '$story', '$video', '$usernamez')";
      $action = mysqli_query($con, $sql);
      if ($action) {
        move_uploaded_file($_FILES['file']['tmp_name'], "../assets/img/post/$file");
        echo '<script>alert("Success! Posted successfully")</script>';
      } else {
        echo '<script>alert("Error! Something has gone wrong post not posted")</script>';
      }
    } else {
      echo '<script>alert("Sorry! That is not an image")</script>';
    }
  } else {
    echo '<script>alert("Error! Please logout and login to solve this error else your are not authoriezed to upload any thing here!")</script>';
  }
}
?>
<div class="container">
  <br>
  <div class="card mb-4">
    <h5 class="card-header"><i class="bx bx-upload"></i> Upload News</h5>
    <div class="card-body">
      <form action="mainfunction" method="POST" enctype="multipart/form-data">
        <div class="mb-3">
          <label for="defaultSelect" class="form-label">Cartegory</label>
          <select id="defaultSelect" name="cartegory" class="form-select">
            <option>Select Upload Cartegory</option>
            <option value="Business">Business</option>
            <option value="Sports">Sports</option>
            <option value="Agriculture">Agriculture</option>
            <option value="Technology">Technology</option>
            <option value="Entrepreneurship">Entrepreneurship</option>
          </select>
        </div>
        <div class="mb-3">
          <label for="formFile" class="form-label">Upload Images</label>
          <input class="form-control" type="file" id="formFile" name="file" />
        </div>
        <div class="mb-3">
          <label for="formFile" class="form-label">Video Link</label>
          <input class="form-control" type="text" id="formFile" name="video" placeholder="News Title" />
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="form-check form-switch mb-2">
              <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="brak" value="1" />
              <label class="form-check-label" for="flexSwitchCheckChecked">Breaking News</label>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="form-check form-switch mb-2">
              <input class="form-check-input" type="checkbox" id="flexSwitchCheckChecked" name="tops" value="1" />
              <label class="form-check-label" for="flexSwitchCheckChecked">Top Story / Trending </label>
            </div>
          </div>
        </div>
        <div class="mb-3">
          <label for="formFile" class="form-label">Title</label>
          <input class="form-control" type="text" id="formFile" name="headings" placeholder="News Title" />
        </div>
        <div class="mb-3">
          <label for="formFile" class="form-label">Body/Story</label>
          <textarea name="story"></textarea>
        </div>
        <button type="submit" name="upload" class="btn btn-primary"><i class="bx bx-upload"></i>Upload</button>
      </form>
    </div>
  </div>
</div>
<script src="ckeditor\ckeditor.js"></script>
<script>
  CKEDITOR.replace('story');
</script>
<?php
include('includes/footer.php');
?>