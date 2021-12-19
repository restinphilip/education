<?php
    include 'functions.php';
    if(empty($_SESSION['suuser']))
    {
      echo "<script>location.href='index.php';</script>";
      exit;
    }
    getHeader();
    getSideBar();
    $topicId = $_GET['row_id'];
    $topicData = getTopicDataById($topicId);
    $topicData = mysqli_fetch_array($topicData);
?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
  $(document).ready(function(){
    $("#content").summernote();
  });
</script>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Update Topic</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard">Home</a></li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <!-- left column -->
          <div class="col-md-12">
            <!-- general form elements -->
            <div class="card card-primary">
              <div class="card-header">
                <h3 class="card-title">Update Topic</h3>
              </div>
              <!-- /.card-header -->
              <!-- form start -->
              <form action="" method="post" enctype="multipart/form-data">
                <div class="card-body">
                  <div class="form-group">
                    <label>Name</label>
                    <input type="text" class="form-control" name="name" placeholder="Enter name" value="<?php echo $topicData['name']; ?>" required>
                  </div>
                  <div class="form-group">
                    <label>Content</label>
                    <textarea id="content" class="form-control" name="content"><?php echo $topicData['content']; ?></textarea>
                  </div>
                </div>
                <!-- /.card-body -->

                <div class="card-footer">
                  <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                </div>
              </form>
            </div>
            <!-- /.card -->
          </div>
          <!--/.col (left) -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php getFooter(); ?>
  <?php
    if(isset($_POST['submit']))
    {
      $name = $_POST['name'];
      $content = $_POST['content'];
      updateTopic($name, $content, $topicId);
    }
  ?>