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