<?php
    include 'functions.php';
    if(empty($_SESSION['suuser']))
    {
      echo "<script>location.href='index.php';</script>";
      exit;
    }
    getHeader();
    getSideBar();
    $allSubjects = getAllSubjects();

 ?>
 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <script>
   function addChapter(row_id)
   {
     location.href="addChapter.php?row_id="+row_id;
   }

   function updateSubject(row_id)
   {
      location.href="updateSubject.php?row_id="+row_id;
   }

   function deleteSubject(row_id)
    {
      $.post(
        'ajax.php',
        'delete_subject_id='+row_id,
        function(response)
        {
          if(response == 1)
          {
            alert("Subject has been deleted successfully!");
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
            <h1>Subjects List</h1>
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
                <h3 class="card-title">Subjects List</h3>
              </div>
              <!-- /.card-header -->
              <!-- content start -->
              <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th>Sr. No.</th>
                        <th>Subject Name</th>
                        <th>Action</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                       <?php
                        $i = 1;
                        while($row = mysqli_fetch_array($allSubjects))
                        {
                          ?>
                          <tr>
                            <td><?php echo '('.$i.'.)'; ?></td>
                            <td><?php echo $row['name']; ?></td>
                            <td>
                              <button type="button" class="btn btn-primary" onclick="addChapter(<?php echo $row['id']; ?>)">Add Chapter</button>
                              <button type="button" class="btn btn-primary" onclick="updateSubject(<?php echo $row['id']; ?>)">Update Subject</button>
                              <button type="button" class="btn btn-primary" onclick="deleteSubject(<?php echo $row['id']; ?>)">Delete Subject</button>
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