      <div class="container">
        <div class="text-center well" style="opacity:0.6">
            <h1>Empleados</h1>
        </div>
        <div class="row">
            <div class="col-sm-1 col-md-2">
              <div class="pull-right">
                <a href="#RegistroProve" data-toggle="modal" class="btn btn-success" title="Añadir un nuevo Proveedor"><i class="fa fa-plus fa-3x"></i></a>
              </div><br><br><br>
            </div>
            <div class="col-sm-10 col-md-8">

                <div class="panel panel-warning">
        					<div class="panel-heading">
        						<h2 class="panel-title">Lista de Empleados</h2>
        						<div class="pull-right">
        							<span class="clickable filter btn btn-danger" data-toggle="tooltip" title="Click aqui para buscar un Proveedor" data-container="body">
        								<i class="fa fa-search"></i>
        							</span>
        						</div><br><br>
                    <div class="table-responsive">
                      <table class="table">
                        <thead class="desk">
                          <tr>
                            <th class="text-center">#</th>
                            <th class="text-center">Nombre y Apellido</th>
                            <th class="text-center">Ciudad</th>
                            <th class="text-center">Num Telefono</th>
                            <th class="text-center">Ver</th>
                            <th class="text-center">Editar</th>
                            <th class="text-center">Estado</th>
                          </tr>
                        </thead>
                      </table>
                    </div>

        					</div>
        					<div class="panel-body">
        						<input type="text" class="form-control" id="dev-table-filter" data-action="filter" data-filters="#dev-table" placeholder="Buscar Proveedores" />
        					</div>
                  <div class="table-responsive" style="height:350px;overflow-y:scroll;;">
                    <table class="table table-hover" id="dev-table" >

                      <tbody class="text-center">
                        <tr>
                          <td>Carlos Soliz</td>
                          <td>Ecuador</td>
                          <td>54555454</td>
                          <td><a href="#ver" class="btn btn-danger" data-toggle="modal"><i class="fa fa-eye"></i></a></td>
                                <td><a href="#editar" class="btn btn-primary" data-toggle="modal"><i class="fa fa-pencil"></i></a></td>
                                <td>
                                  <form action="menuAdmin.php?modo=daBja" method="post">
                                    <input type="hidden" name="id" value="">
                                    <button type="submit" name="dabaja" class="btn btn-success"><i class="fa fa-toggle-on"></i></button>
                                  </form>
                                </td>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                  </div>

              </div>
              <div class="col-sm-1 col-md-2"></div>
            </div>
    	  </div>
      </div>
  </div>

</div>

<div class="modal fade" id="RegistroProve">
  <div class="modal-dialog">
    <div class="modal-content">

        <form action="menuAdmin.php?modo=rProv" method="post">

          <div class="modal-header">
            <button type="button" name="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            <h3 class="modal-title">Agregar Nuevo <i class="fa fa-arrow-right"></i> Empleado</h3>
          </div>
          <div class="modal-body">
            <div class="panel-heading">
              <center><img src="libs/multimedia/img/boy-1.png" alt="avatar" class="img-responsive img-circle" height="100" width="100"></center>
            </div>
            <p style="color:red"> * Los campos con iconos de color ROJO son OBLIGATORIOS</p>
            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2" style="background:red; color:white"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" placeholder="Nombre: " aria-describedby="sizing-addon2" name="nombre" required>
              </div>
            </div>

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-user"></i></span>
                <input type="text" class="form-control" placeholder="Apellido: " aria-describedby="sizing-addon2" name="apellido">
              </div>
            </div>

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2" style="background:red; color:white"><i class="fa fa-id-card"></i></span>
                <input type="text" class="form-control" placeholder="CI / NIT: " aria-describedby="sizing-addon2" name="ciNit" required>
              </div>
            </div>

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2" style="background:red; color:white"><i class="fa fa-building"></i></span>
                <select class="selectpicker form-control" name="ciudad" data-live-search="true">
                  <option data-tokens="Oruro" value="Oruro">Oruro</option>
                  <option data-tokens="La Paz"  value="La Paz">La Paz</option>
                  <option data-tokens="Santa Cruz"  value="Santa Cruz">Santa Cruz</option>
                  <option data-tokens="Cochabamba"  value="Cochabamba">Cochabamba</option>
                  <option data-tokens="Beni"  value="Beni">Beni</option>
                  <option data-tokens="Pando"  value="Pando">Pando</option>
                  <option data-tokens="Tarija"  value="Tarija">Tarija</option>
                  <option data-tokens="Sucre"  value="Sucre">Sucre</option>
                  <option data-tokens="Potosi"  value="Potosi">Potosi</option>
                </select>
              </div>
            </div>

            <div class="form-group" data-toggle="buttons">
              <label class="btn btn-danger"> <i class="fa fa-venus-mars"></i> Sexo: </label>
              <label class="btn btn-default">
                  <input type="radio" name="sexo" value="F"><i class="fa fa-female">  Femenino</i>
              </label>
              <label class="btn btn-default">
                  <input type="radio" name="sexo" value="M"><i class="fa fa-male">  Masculino</i>
              </label>
          </div>

            <div class="form-group">
              <div class="input-group">
                <span class="input-group-addon" id="sizing-addon2"><i class="fa fa-phone"></i></span>
                <input type="number" class="form-control" id="telefono" placeholder="Telefono: " aria-describedby="sizing-addon2" name="telefono">
              </div>
            </div>

            <input type="hidden" name="datos" value="1">

          </div>
          <div class="modal-footer">
            <button class="btn btn-danger" data-dismiss="modal" aria-hidden="true">Cancelar <i class="fa fa-times-circle"></i></button>
            <button type="reset" value="Reset" name="reset" class="btn btn-default">Limpiar <span class="fa fa-refresh"></span></button>
            <button type="submit" class="btn btn-success">Guardar <i class="fa fa-check-circle"></i></button>
          </div>

        </form>

    </div>
  </div>
</div>
