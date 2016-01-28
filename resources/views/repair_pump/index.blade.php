@extends('plantilla')

@section('contenido')
	
	<div class="row">
		<div class="col-md-8 col-md-offset-1">
			<br>
			<div class="panel panel-default">
          <div class="panel-heading">
                <h3 class="panel-title">Reparación de Bomba</h3>
          </div>
          <div class="panel-body">
                    <input type='hidden' id='id' name='id' value='0'/>
                    <div class='control-group'>
                        <label>Compañía</label>
                        <label class='form-control' id='txt_id_company'>...</label>
                        <p class='help-block'><a href='#modal_id_company' data-toggle='modal'><i class="fa fa-search-minus"></i> Seleccionar</a></p>
                        <input type='hidden' name='id_company' id='id_company' value=''/>
                    </div>
                    <div class='control-group'>
                        <label>Moneda</label>
                        <label class='form-control' id='txt_id_money'>...</label>
                        <p class='help-block'><a href='#modal_id_money' data-toggle='modal'><i class="fa fa-search-minus"></i> Seleccionar</a></p>
                        <input type='hidden' name='id_money' id='id_money' value=''/>
                    </div>
                    <div class='control-group'>
                        <label>Lote</label>
                        <label class='form-control' id='txt_id_lot'>...</label>
                        <p class='help-block'><a href='#modal_id_lot' data-toggle='modal'><i class="fa fa-search-minus"></i> Seleccionar</a></p>
                        <input type='hidden' name='id_lot' id='id_lot' value=''/>
                    </div>
                    <div class='control-group'>
                        <label>Causa de Falla de Bomba</label>
                        <label class='form-control' id='txt_id_failure_pump_cause'>...</label>
                        <p class='help-block'><a href='#modal_id_failure_pump_cause' data-toggle='modal'><i class="fa fa-search-minus"></i> Seleccionar</a></p>
                        <input type='hidden' name='id_failure_pump_cause' id='id_failure_pump_cause' value=''/>
                    </div>
                    <div class='control-group'>
                        <label>Bomba</label>
                        <label class='form-control' id='txt_id_pump'>...</label>
                        <p class='help-block'><a href='#modal_id_pump' data-toggle='modal'><i class="fa fa-search-minus"></i> Seleccionar</a></p>
                        <input type='hidden' name='id_pump' id='id_pump' value=''/>
                    </div>
                    <div class='control-group'>
                        <label>Fecha de Admisión</label>
                        <input type="date" class='form-control' placeholder='AAAA-MM-DD' id='date_of_admision' name='date_of_admision' />
                    </div>
                    <div class='control-group'>
                        <label>Fecha de Salida</label>
                        <input  type="date" class='form-control'  placeholder='AAAA-MM-DD' id='date_departure' name='date_departure' />
                    </div>
                    <div class='control-group'>
                        <label>Costo</label>
                        <input class='form-control' placeholder='0.00' id='cost' name='cost' />
                    </div>
                    <div class='control-group'>
                        <p></p>
                        <button type='button' class='btn btn-warning' onclick='save()'><span class="glyphicon glyphicon-floppy-saved"></span> Guardar</button>
                        <button type='reset' class='btn'><span class="glyphicon glyphicon-erase"></span> Limpiar</button>
                        </div>
                    </form>
          </div>
    </div>

		</div>
	</div>




	<!--Inicio Modal-->
                    <div class='modal fade' id='modal_id_company' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                    <div class='modal-dialog'>
                    <div class='modal-content'>
                    <div class='modal-header'>
                      <button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span><span class='sr-only'>Cerrar</span></button>
                      <h4 class='modal-title' id='myModalLabel'>Compañia</h4>
                    </div>
                    <div class='modal-body'>
                    <div class='contenedor-tabla'>
                        <table id='tbl_modal_id_company' class='display' cellspacing='0' width='100%'>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>RUC</th>
                                    <th>Email</th>
                                    <th>Teléfono</th>
                                    <th>Persona de Contacto</th>
                                </tr>
                            </thead>
                            <tbody id='data_tbl_modal_id_company'>

                            </tbody>
                        </table>
                        </div>
                        </div>
                        <div class='modal-footer'>
                          <button type='button' class='btn btn-danger' data-dismiss='modal'><i class="fa fa-ban"></i> Cancelar</button>
                        </div>
                        </div>
                        </div>
                        </div>
                    <!--Fin Modal-->    
                    <!--Inicio Modal-->
                    <div class='modal fade' id='modal_id_money' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                    <div class='modal-dialog'>
                    <div class='modal-content'>
                    <div class='modal-header'>
                      <button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span><span class='sr-only'>Cerrar</span></button>
                      <h4 class='modal-title' id='myModalLabel'>Moneda</h4>
                    </div>
                    <div class='modal-body'>
                    <div class='contenedor-tabla'>
                        <table id='tbl_modal_id_money' class='display' cellspacing='0' width='100%'>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Id</th>
                                    <th>Descripción</th>
                                    <th>Símbolo</th>
                                </tr>
                            </thead>
                            <tbody id='data_tbl_modal_id_money'>

                            </tbody>
                        </table>
                        </div>
                        </div>
                        <div class='modal-footer'>
                          <button type='button' class='btn btn-danger' data-dismiss='modal'><i class="fa fa-ban"></i> Cancelar</button>
                        </div>
                        </div>
                        </div>
                        </div>
                    <!--Fin Modal-->    
                    <!--Inicio Modal-->
                    <div class='modal fade' id='modal_id_lot' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                    <div class='modal-dialog'>
                    <div class='modal-content'>
                    <div class='modal-header'>
                      <button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span><span class='sr-only'>Cerrar</span></button>
                      <h4 class='modal-title' id='myModalLabel'>Lote</h4>
                    </div>
                    <div class='modal-body'>
                    <div class='contenedor-tabla'>
                        <table id='tbl_modal_id_lot' class='display' cellspacing='0' width='100%'>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Id</th>
                                    <th>Nombre</th>
                                    <th>Ciudad</th>
                                    <th>País</th>
                                    <th>Área</th>
                                </tr>
                            </thead>
                            <tbody id='data_tbl_modal_id_lot'>

                            </tbody>
                        </table>
                        </div>
                        </div>
                        <div class='modal-footer'>
                          <button type='button' class='btn btn-danger' data-dismiss='modal'><i class="fa fa-ban"></i> Cancelar</button>
                        </div>
                        </div>
                        </div>
                        </div>
                    <!--Fin Modal-->    
                    <!--Inicio Modal-->
                    <div class='modal fade' id='modal_id_failure_pump_cause' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                    <div class='modal-dialog'>
                    <div class='modal-content'>
                    <div class='modal-header'>
                      <button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span><span class='sr-only'>Cerrar</span></button>
                      <h4 class='modal-title' id='myModalLabel'>Causa de Falla de Bomba</h4>
                    </div>
                    <div class='modal-body'>
                    <div class='contenedor-tabla'>
                        <table id='tbl_modal_id_failure_pump_cause' class='display' cellspacing='0' width='100%'>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Id</th>
                                    <th>Descripción</th>
                                </tr>
                            </thead>
                            <tbody id='data_tbl_modal_id_failure_pump_cause'>

                            </tbody>
                        </table>
                        </div>
                        </div>
                        <div class='modal-footer'>
                          <button type='button' class='btn btn-danger' data-dismiss='modal'><i class="fa fa-ban"></i>Cancelar</button>
                        </div>
                        </div>
                        </div>
                        </div>
                    <!--Fin Modal-->    
                    <!--Inicio Modal-->
                    <div class='modal fade' id='modal_id_pump' tabindex='-1' role='dialog' aria-labelledby='myModalLabel' aria-hidden='true'>
                    <div class='modal-dialog'>
                    <div class='modal-content'>
                    <div class='modal-header'>
                      <button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>&times;</span><span class='sr-only'>Cerrar</span></button>
                      <h4 class='modal-title' id='myModalLabel'>Bomba</h4>
                    </div>
                    <div class='modal-body'>
                    <div class='contenedor-tabla'>
                        <table id='tbl_modal_id_pump' class='display' cellspacing='0' width='100%'>
                            <thead>
                                <tr>
                                    <th></th>
                                    <th>Id</th>
                                    <th>Descripción</th>
                                    <th>Estado</th>
                                    <th>Número Local</th>
                                    <th>Pozo</th>
                                    <th>Lote</th>
                                </tr>
                            </thead>
                            <tbody id='data_tbl_modal_id_pump'>

                            </tbody>
                        </table>
                        </div>
                        </div>
                        <div class='modal-footer'>
                          <button type='button' class='btn btn-danger' data-dismiss='modal'><i class="fa fa-ban"></i> Cancelar</button>
                        </div>
                        </div>
                        </div>
                        </div>
                    <!--Fin Modal-->

@stop