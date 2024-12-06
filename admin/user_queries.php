<?php
   require('inc/essentials.php');
   require('inc/db_config.php');
   adminLogin();

   
   if (isset($_GET['seen'])) {
    $frm_data = filteration($_GET);

    if ($frm_data['seen'] == 'all') {
     
     $seenValue = 1;
     $query = "CALL UpdateSeen($seenValue, 0)";
     $res = mysqli_query($GLOBALS['con'], $query);

     if ($res) {
         alert('success', 'Marked all as read!');
     } else {
         alert('error', 'Operation Failed');
     }
    } else {
     
     $seenValue = 1;
     $queryId = $frm_data['seen'];
     $query = "CALL UpdateSeen($seenValue, $queryId)";
     $res = mysqli_query($GLOBALS['con'], $query);

     if ($res) {
         alert('success', 'Marked as read!');
     } else {
         alert('error', 'Operation Failed');
     }
    }
}

   if(isset($_GET['del']))
   {
    $frm_data = filteration($_GET);

    if($frm_data['del']=='all'){
      $q = "CALL deleteAll_messages";
      if(mysqli_query($con,$q)){
        alert('success','All Message has been deleted!');
      }
      else{
        alert('error','Operation Failed');
      }
    }
    else{
      $q = "CALL delete_message(?)";
      $values = [$frm_data['del']];
      if(delete($q,$values,'i')){
        alert('success','Message Data Deleted!');
      }
      else{
        alert('error','Operation Failed');
      }
    }
   }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - User Queries</title>
    
    <!-- PHP REquirements for the links addons -->
    <?php require('inc/links.php'); ?>
    
</head>
<body class="bg-light">


<?php require('inc/header.php'); ?>

<!-- USER QUERIES SECTION -->

  <div class="container-fluid" id="main-content">
      <div class="row">
        <div class="col-lg-10 ms-auto p-4 overflow-hidden">
          <h3 class="mb-4">USER QUERIES</h3>

          <div class="card border-0 shadow mb-4">
           <div class="card-body">

            <div class="text-end mb-4">
             <a href="?seen=all" class="btn btn-dark rounded-pill shadow-none btn-sm">
               <i class="bi bi-check-all"></i> Mark All Read
             </a>
             <a href="?del=all" class="btn btn-danger rounded-pill shadow-none btn-sm">
               <i class="bi bi-trash"></i> Delete All Message
             </a>
            </div>
  
           <div class="table-responsive-md" style="height: 400px; overflow-y: scroll;">
            <table class="table table-hover border">
              <thead class="sticky-top">
                <tr class="bg-dark text-light">
                  <th scope="col">#</th>
                  <th scope="col">Name</th>
                  <th scope="col">Email</th>
                  <th scope="col" width="20%">Subject</th>
                  <th scope="col" width="30%">Message</th>
                  <th scope="col">Date</th>
                  <th scope="col">Action</th>
                </tr>
              </thead>
              <tbody>
                <?php
                  $q = "CALL GetUserQueries";
                  $data = mysqli_query($con,$q);
                  $i=1;

                  while($row = mysqli_fetch_assoc($data))
                  {
                    $seen='';
                    if($row['seen']!=1){
                      $seen = "<a href='?seen=$row[sr_no]' class='btn btn-sm rounded-pill btn-primary'>Mark as read</a> <br>";
                    }
                    $seen.= "<a href='?del=$row[sr_no]' class='btn btn-sm rounded-pill btn-danger mt-2'>Delete</a>";

                    echo<<<query
                      <tr class='align-middle'>
                        <td>$i</td>
                        <td>$row[name]</td>
                        <td>$row[email]</td>
                        <td>$row[subject]</td>
                        <td>$row[message]</td>
                        <td>$row[date]</td>
                        <td>$seen</td>
                    query;
                    $i++; 
                  }
                ?>
              </tbody>
            </table>
           </div>

           </div>
          </div>

       </div>
     </div>
   </div>

   <?php require('inc/scripts.php'); ?>

</body>
</html>