
 <?php
include('security-lec.php');
include('include/header.php'); 
include('include/navbar.php'); 
?>
  <main id="main" class="main">
    <?php 
          $connection =mysqli_connect("localhost","root","","studentportal"); 
          if (isset($_SESSION['Fullname'])) {
              
               $FullName=$_SESSION['Fullname'];
          $query="SELECT Course.CourseName
FROM Course
JOIN course_lecturer ON Course.Course_ID = course_lecturer.Course_ID
JOIN Lecturer ON course_lecturer.Lecturer_ID = Lecturer.Lecturer_ID
WHERE Lecturer.FullName = '$FullName';
";
          $query_run=$connection->query($query);
      ?>
    <section class="section">
      <div class="row">
        <div class="col-lg-10">

          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Assigned Courses</h5>

              <!-- Default Table -->
              <table class="table">
                <thead>
                  <tr>
                    <th>Courses</th>
                  </tr>
                </thead>
                <tbody>
                          <?php
          if (mysqli_num_rows($query_run) > 0) {
            while($row=$query_run->fetch_assoc())
            { 
              ?>
          <tr>
            <td> <?php echo "$row[CourseName]" ?> </td>
                       
            
          </tr>

          <?php 
            }
          }
            else{
              echo "No Record Found";
            }
              }

            ?>
                  
                
               
                </tbody>
              </table>
              <!-- End Default Table Example -->
            </div>
          </div>

        </div>

      </div>
    </section>

  </main>


 <?php
include('include/scripts.php');
?> 