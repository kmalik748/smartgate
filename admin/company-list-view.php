<?php
 $query = "SELECT * FROM company";
//echo $query;
$result = mysqli_query($con, $query);

 ?>
 
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Histroy</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                      <th>ID</th>
                      <th>Company Name</th>
                      <th>Action</th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                      <th>ID</th>
                      <th>Company Name</th>
                      <th>Action</th>
                  </tr>
                </tfoot>
                <tbody>
                <?php
                        if (mysqli_num_rows($result) > 0) {
                            // output data of each row
                            while($row = mysqli_fetch_assoc($result)) {
 echo '

        <tr class="odd gradeX" id="device-view-font">
            <td>'.$row["id"].'</td>
            <td>'.$row["name"].'</td>
            <td><a class="btn btn-danger" href="company-details.php?id='.$row["id"].'">View Details</a></td>
       ';
                            }
                        } else {
                            echo "
            <td><center><b>No Members Found</b></center></td>";
                        }

                  ?> 
                </tbody>
              </table>
            </div>
          </div>
          <div class="card-footer small text-muted">Live View of Devices (<i>-Record From Database</i>)</div>
        </div>