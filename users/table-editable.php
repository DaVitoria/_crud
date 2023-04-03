<?php include_once("../cabeca.php");  ?>
<?php include_once("conexao.php");  ?>

<html lang="pt">
   <head>
      <!-- Required meta tags -->
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <title>Da Vick Cland's</title>
      <!-- Favicon -->
      <link rel="shortcut icon" href="<?php echo $base_url ?>../assets/img/favicon.ico" />
      <!-- Bootstrap CSS -->
      <link rel="stylesheet" href="<?php echo $base_url ?>../assets/cssi/bootstrap.min.css">
      <!-- Typography CSS -->
      <link rel="stylesheet" href="<?php echo $base_url ?>../assets/cssi/typography.css">
      <!-- Style CSS -->
      <link rel="stylesheet" href="<?php echo $base_url ?>../assets/cssi/style.css">
      <!-- Responsive CSS -->
      <link rel="stylesheet" href="<?php echo $base_url ?>../assets/cssi/responsive.css">
   </head>
   
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
                              <h4 class="card-title">Tabela de Estudantes</h4>
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
                                       <th>id_user</th>
                                       <th>Nome</th>
                                       <th>Nivel</th>
                                       <th>Curso</th>
                                       <th>Idade</th>
                                       <th>Ano_ingresso</th>
                                       <th>Valor_inscr</th>
                                       <th>Sort</th>
                                       <th>Remove</th>
                                    </tr>
                                 </thead>
                              <?php 
                              $stmt=$pdo->prepare("SELECT *FROM users ORDER BY id_user ASC");
                              $stmt->execute();
                              $values = $stmt->fetchALL();
                              
                              foreach($values as $value) {

                              ?>

                                 <tbody>
                                    <tr>
                                       <td contenteditable="true"><?php echo $value['id_user'] ?></td>
                                       <td contenteditable="true"><?php echo $value['nome'] ?></td>
                                       <td contenteditable="true"><?php echo $value['nivel'] ?></td>
                                       <td contenteditable="true"><?php echo $value['curso'] ?></td>
                                       <td contenteditable="true"><?php echo $value['idade'] ?></td>
                                       <td contenteditable="true"><?php echo $value['ano_ingresso'] ?></td>
                                       <td contenteditable="true"><?php echo $value['valor_inscr'] ?></td>
                                       <td>
                                          <span class="table-up"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-up" aria-hidden="true"></i></a></span>
                                          <span class="table-down"><a href="#!" class="indigo-text"><i class="fa fa-long-arrow-down" aria-hidden="true"></i></a></span>
                                       </td>
                                       <td>
                                       <a class="btn btn-sm btn-info " href="edit.php?id=<?php echo $value['id_user']; ?>"> Editar </a> -
							                  <a class="btn btn-sm btn-danger " href="deleteQuery.php?id=<?php echo $value['id_user']; ?>">Apagar</a>
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
      <!-- Wrapper END -->
       <!-- Footer -->

<?php include_once("../footer.php");  ?>
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
               

            <?php if (!empty($_GET['msgSucesso'])){?>
                <div class="sucess" role="alert">
                  <?php echo $_GET['msgSucesso']; }?>
            </div>
         </div>
   </body>
</html>