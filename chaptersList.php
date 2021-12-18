<?php
    include 'functions.php';
    if(empty($_SESSION['suuser']))
    {
      echo "<script>location.href='index.php';</script>";
      exit;
    }
    getHeader();
    getSideBar();
    $allChapters = getAllChapters();
 ?>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script>
   function addTopic(row_id)
   {
     location.href="addTopic.php?row_id="+row_id;
   }

   function updateChapter(row_id)
   {
      location.href="updateChapter.php?row_id="+row_id;
   }

   function deleteChapter(row_id)
    {
      $.post(
        'ajax.php',
        'delete_chapter_id='+row_id,
        function(response)
        {
          if(response == 1)
          {
            alert("Chapter has been deleted successfully!");
            location.reload();
          }
        }
      );
    }
 </script>
 <!-- Content Wrapper. Contains page content -->
 <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Chapters List</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="dashboard.php">Home</a></li>
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
                <h3 class="card-title">Chapters List</h3>
              </div>
              <!-- /.card-header -->
              <!-- content start -->
              <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Sr. No.</th>
                        <th>Chapter Name</th|>
                        <th>Subject Name</th>
                        <th>Action</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    <?php
                        $i = 1;
                        while($row = mysqli_fetch_array($allChapters))
                        {
                          ?>
                          <tr>
                            <td><?php echo '('.$i.'.)'; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td>
                              <?php
                                $subjectData = getSubjectDataById($row['subject_id']);
                                $subjectData = mysqli_fetch_array($subjectData);
                                echo $subjectData['name'];
                              ?>
                            </td>
                            <td>
                              <button type="button" class="btn btn-primary" onclick="addTopic(<?php echo $row['id']; ?>)">Add Topic</button>
                              <button type="button" class="btn btn-primary" onclick="updateChapter(<?php echo $row['id']; ?>)">Update Chapter</button>
                              <button type="button" class="btn btn-primary" onclick="deleteChapter(<?php echo $row['id']; ?>)">Delete Chapter</button>
                            </td>
                          </tr>
                          <?php
                          $i++;
                        }
                       ?>
                    </tbody>
                </table>

              <!-- content end ---->
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