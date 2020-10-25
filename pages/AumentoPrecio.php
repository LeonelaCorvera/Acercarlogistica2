
<section class="content">

      <!-- SELECT2 EXAMPLE -->
      <div class="box box-default">
        <div class="box-header with-border">
          <h3 class="box-title">Precio</h3>

          <div class="box-tools pull-right">
            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
          </div>
        </div>
        <!-- /.box-header -->

     <div class="box-body">


              <div class="row">
                <div class="col-xs-3">
                  <div class="form-group">
                  <label>Lista de precios:</label><small> (obligatorio)</small>
                  <select class="form-control" name="tipo" required>
                    <option>Seleccionar</option>
                    <option>Recepcionista</option>
                    <option>Cliente</option>
                  </select>
                </div>
                </div>
                <div class="col-xs-3">
                  <div class="form-group">
                  <label>Servicio:</label>
                  <select class="form-control" name="tipo">
                    <option>Seleccionar</option>
                    <option>Recepcionista</option>
                    <option>Cliente</option>
                  </select>
                </div>
                </div>
                <div class="col-xs-2">
                  <label>Operacion:</label><small> (obligatorio)</small>
                  <select class="form-control" name="tipo">
                    <option>+</option>
                    <option>-</option>
                  </select>
                </div>
                <div class="col-xs-2">
                  <label>Unidad:</label><small> (obligatorio)</small>
                  <select class="form-control" name="tipo">
                    <option>$</option>
                    <option>%</option>
                  </select>
                </div>
              </div>

<br>
             <div class="row">
                <div class="col-xs-2">
                  <label>Valor fijo:</label>
                  <input type="number" class="form-control" name="nombre">
                </div>

                <div class="col-xs-2">
                   <label>Valor por hora:</label>
                  <input type="number" class="form-control" name="nombre">
                </div>

                <div class="col-xs-2">
                  <label>Valor por km:</label>
                  <input type="number" class="form-control" name="nombre">
                </div>
                
              </div>
<br><br>
              <div class="box-footer">
                <button type="submit" class="btn btn-info pull-right">Guardar</button>
              </div>

        <!-- /.box-body -->
       
      </div>