<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
<link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet" />
<script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>

<section class="content-header">
      <h1>
        Vehiculos
      </h1>

</section>

<section class="content">

      
      <div class="row">



        <div class="col-xs-12">
       

          <div class="box">

            

            <div class="box-header">
              <h3 class="box-title">Lista de clientes</h3>
                <div class="form-group">
<br>
                  <div class="col-xs-3">
                 <label onclick="document.getElementById('c1').submit();">
                      <input  name="c1" type="checkbox" checked data-toggle="toggle" data-on="Activos" data-off="Inactivos" data-onstyle="success" data-offstyle="danger" >
                  </label>
                </div>


                  <div class="col-sm-offset-2 col-sm-10">
                      <div class="checkbox">
                        <form action="listarclientes.php" method="post" id="c1">
                          <label onclick="document.getElementById('c1').submit();">
                              <input  name="c1" type="checkbox" checked data-toggle="toggle" data-on="PERSONAS" data-off="EMPRESAS" data-onstyle="success" data-offstyle="info" >
                          </label>
                           </form>
                      </div>
                  </div>
                </div>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              
                

                  <?php


                    include('listarclientes.php');


                  ?>


            
            </div>
            
        </div>


        

          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>


      

</section>





  <div class="control-sidebar-bg"></div>

<!-- ./wrapper -->

<!-- jQuery 3 -->
<script src="../../bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="../../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="../../bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="../../bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- SlimScroll -->
<script src="../../bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="../../bower_components/fastclick/lib/fastclick.js"></script>
<!-- AdminLTE App -->
<script src="../../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="../../dist/js/demo.js"></script>
<!-- page script -->
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': true,
      'searching'   : true,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : true
    })
  })
</script>

