<?php

include_once("../cabeca.php");  ?>
<?php include_once("../users/conexao.php");  ?>

   <body class="sidebar-main-active right-column-fixed">
      <!-- loader Start -->
      <div id="loading">
         <div id="loading-center">
         </div>
      </div>
      <!-- loader END -->
   
         <!-- TOP Nav Bar END -->
        
         <!-- Page Content  -->
         <div id="content-page" class="content-page">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-sm-12">
                     <div class="iq-card">
                        <div class="iq-card-header d-flex justify-content-between">
                           <div class="iq-header-title">
                              <h4 class="card-title">Produtos</h4>
                           </div>
                        </div>
                        <div class="iq-card-body">
                           <div id="table" class="table-editable">
                              <span class="table-add float-right mb-3 mr-2">
                              <button class="btn btn-sm iq-bg-success"><i
                                 class="ri-add-fill"><span class="pl-1">Adcionar novo</span></i>
                              </button>
                              </span>
                              <table class="table table-bordered table-responsive-md table-striped text-center">
                                 <thead>
                                    <tr>
                                       <th>Id</th>
                                       <th>Codigo</th>
                                       <th>Nome</th>
                                       <th>Price</th>
                                       <th>Sort</th>
                                       <th>Remove</th>
                                    </tr>
                                 </thead>
                              <?php 
                              $stmt=$pdo->prepare("SELECT *FROM produtos ORDER BY id ASC");
                              $stmt->execute();
                              $values = $stmt->fetchALL();
                              
                              foreach($values as $value) {

                              ?>

                                 <tbody>
                                    <tr>
                                       <td contenteditable="true"><?php echo $value['id'] ?></td>
                                       <td contenteditable="true"><?php echo $value['cod'] ?></td>
                                       <td contenteditable="true"><?php echo $value['name'] ?></td>
                                       <td contenteditable="true"><?php echo $value['price'] ?></td>
                                       <td>
                                          <span class="table-up"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></span>
                                          <span class="table-down"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-down" aria-hidden="true"></i></a></span>
                                       </td>
                                       <td>
                                       <a class="btn btn-sm btn-info " href="edit.php?id=<?php echo $value['id']; ?>"> Editar </a> -
							                  <a class="btn btn-sm btn-danger " href="product/deleteQuery.php?id=<?php echo $value['id']; ?>">Apagar</a>
                                       </td>
                                    </tr>
                                    <?php } ?>
                                    
                                 </tbody>
                              </table>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- Wrapper END 
   <td>
							<a class="btn btn-sm btn-info " href="edit.php?id=<?php echo $value['id']; ?>"> Editar </a> - 
							<a class="btn btn-sm btn-danger " href="product/deleteQuery.php?id=<?php echo $value['id']; ?>">Apagar</a>
						  </td> -->
       <!-- Footer -->
<div>
<?php include_once("../footer.php");  ?>
</div>

      <!-- Footer END -->
    
      <!-- Optional JavaScript -->
      <!-- jQuery first, then Popper.js, then Bootstrap JS -->
      <script src="../assets/jsi/jquery.min.js"></script>
      <script src="../assets/jsi/popper.min.js"></script>
      <script src="../assets/jsi/bootstrap.min.js"></script>
      <!-- Appear JavaScript -->
      <script src="../assets/jsi/jquery.appear.js"></script>
      <!-- Countdown JavaScript -->
      <script src="../assets/jsi/countdown.min.js"></script>
      <!-- Counterup JavaScript -->
      <script src="../assets/jsi/waypoints.min.js"></script>
      <script src="../assets/jsi/jquery.counterup.min.js"></script>
      <!-- Wow JavaScript -->
      <script src="../assets/jsi/wow.min.js"></script>
      <!-- Apexcharts JavaScript -->
      <script src="../assets/jsi/apexcharts.js"></script>
      <!-- Slick JavaScript -->
      <script src="../assets/jsi/slick.min.js"></script>
      <!-- Select2 JavaScript -->
      <script src="../assets/jsi/select2.min.js"></script>
      <!-- Owl Carousel JavaScript -->
      <script src="../assets/jsi/owl.carousel.min.js"></script>
      <!-- Magnific Popup JavaScript -->
      <script src="../assets/jsi/jquery.magnific-popup.min.js"></script>
      <!-- Smooth Scrollbar JavaScript -->
      <script src="../assets/jsi/smooth-scrollbar.js"></script>
      <!-- lottie JavaScript -->
      <script src="../assets/jsi/lottie.js"></script>
      <!-- am core JavaScript -->
      <script src="../assets/jsi/core.js"></script>
      <!-- am charts JavaScript -->
      <script src="../assets/jsi/charts.js"></script>
      <!-- am animated JavaScript -->
      <script src="../assets/jsi/animated.js"></script>
      <!-- am kelly JavaScript -->
      <script src="../assets/jsi/kelly.js"></script>
      <!-- am maps JavaScript -->
      <script src="../assets/jsi/maps.js"></script>
      <!-- am worldLow JavaScript -->
      <script src="../assets/jsi/worldLow.js"></script>
      <!-- Style Customizer -->
      <script src="../assets/jsi/style-customizer.js"></script>
      <!-- Chart Custom JavaScript -->
      <script src="../assets/jsi/chart-custom.js"></script>
      <!-- Custom JavaScript -->
      <script src="../assets/jsi/custom.js"></script>
      <div class="contentor">
            <?php if (!empty($_GET['msgErro'])){?>
               <div class="alerta" role="alert">
                  <?php echo $_GET['msgErro'];} ?>
               

      
            <!-- </div>
         </div>
   </body>
</html> -->