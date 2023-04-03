<?php 
	session_start();
	include_once("conexao.php");
	include_once("../cabeca.php");
?>	
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">

<!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h3 class="m-0">Eliminar os Usuario</h3>
          </div><!-- /.col -->

        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->


 <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        
		 <!-- INICIO -->

    
     <div class="alert alert-danger alert-dismissible">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                            Usuario eliminado com sucessso!
                        </div>
                        <div class="text-center">
                            <a href="table-editable.php">
                                <button type="button" class="btn btn-sm btn-primary"><i class="fa fa-arrow-left"></i>
                                    Voltar
                                </button>
                            </a>
        </div>
		 <!-- FIM -->
        
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  
 <div>
 <?php include_once("../footer.php");  ?> 
 </div>
                
 
