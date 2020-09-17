<!DOCTYPE html>
<html lang="en">
  
   <head>
      <meta charset="UTF-8">
      <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
      <title>Download Histroy - IJBAP Journal | International Journal of Basic &amp; Applied Physiology - IJBAP</title>
      <!-- General CSS Files -->
      <link rel="stylesheet" href="assets/css/app.min.css">
      <link rel="stylesheet" href="assets/bundles/datatables/datatables.min.css">
      <link rel="stylesheet" href="assets/bundles/datatables/DataTables-1.10.16/css/dataTables.bootstrap4.min.css">
      <!-- Template CSS -->
      <link rel="stylesheet" href="assets/css/style.css">
      <link rel="stylesheet" href="assets/css/components.css">
      <!-- Custom style CSS -->
      <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
   </head>
   <body>
    <?php
        include('include/config.php');
    ?>
      <div class="loader"></div>
      <div id="app">
         <div class="main-wrapper main-wrapper-1">
            <!-- Main Content -->
            <div class="main-content" style="padding:20px ; margin:0px">
               <section class="section">
                  <div class="section-header">
                     <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                           <div class="section-header-breadcrumb-content">
                              <h1>DataTables</h1>
                           </div>
                        </div>
                        
                     </div>
                  </div>
                  <div class="section-body">
                     <div class="row">
                        <div class="col-12">
                           <div class="card">
                              <div class="card-header">
                                 <h4>Table With State Save</h4>
                              </div>
                              <div class="card-body">
                                 <div class="table-responsive">
                                    <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                                       <thead>
                                          <tr>
                                             <th>No</th>
                                             <th>File Name</th>
                                             <th>Download</th>
                                          </tr>
                                       </thead>
                                       <tbody>
                                        <?php
                                            $sql = "SELECT * FROM file";
                                            $result = $conn->query($sql);
                                                $i = 0;
                                                while($row = $result->fetch_assoc()) {
                                                    $i++;
                                                    echo "<tr>
                                                            <td>".$i."</td>
                                                            <td>".$row["filename"]."</td>
                                                            <td>".$row["download"]."</td>
                                                        </tr>";
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
               </section>
               
            </div>
            <footer class="main-footer">
               <div class="footer-left">
                  Copyright &copy; 2020 
                  <div class="bullet"></div>
                  Design By <a href="#">Snkthemes</a>
               </div>
               <div class="footer-right">
               </div>
            </footer>
         </div>
      </div>
      <!-- General JS Scripts -->
      <script src="assets/js/app.min.js"></script>
      <!-- JS Libraies -->
      <script src="assets/bundles/datatables/datatables.min.js"></script>
      <script src="assets/bundles/datatables/DataTables-1.10.16/js/dataTables.bootstrap4.min.js"></script>
      <script src="assets/bundles/jquery-ui/jquery-ui.min.js"></script>
      <!-- Page Specific JS File -->
      <script src="assets/js/page/datatables.js"></script>
      <!-- Template JS File -->
      <script src="assets/js/scripts.js"></script>
      <script src="assets/bundles/jquery.sparkline.min.js"></script>
   </body>
</html>