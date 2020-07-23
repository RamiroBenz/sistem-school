<?php 
  include 'conexion/cn.php';
  
  $sql = "SELECT * FROM datos";

  $resultado=$conexion->query($sql);

 ?>
 <!DOCTYPE html>
<html lang="es">
<head>
<?php 
include 'menu.php';
 ?>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles"><i class="zmdi zmdi-balance zmdi-hc-fw"></i> Configurar <small>Datos de la Escuela</small></h1>
			</div>
			<p class="lead">Estos son los datos de nuestro establecimiento!</p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="#newSchool" data-toggle="tab"><i class="zmdi zmdi-balance"></i> Datos de la Escuela</a></li>
					  	<li><a href="#newYear" data-toggle="tab"><i class="zmdi zmdi-calendar-check"></i> Años nuevo</a></li>
					  	<li><a href="#listYear" data-toggle="tab"><i class="zmdi zmdi-calendar-note"></i> Listado por año</a></li>
					  	<li><a href="#newPeriod" data-toggle="tab"><i class="zmdi zmdi-timer"></i> Nuevo Período</a></li>
					  	<li><a href="#listPeriod" data-toggle="tab"><i class="zmdi zmdi-time-restore"></i> Listado de Períodos</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane fade active in" id="newSchool">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									<?php while($row=$resultado->fetch_assoc()){ ?>
									    <form action="" method="post" enctype="multipart form-data">
									    	<div class="form-group label-floating">
											  <label class="control-label"> C.U.I.T.</label>
											  <input class="form-control" type="text" name="cuit" value="<?php echo $row['cuit']; ?>">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Nombre</label>
											  <input name="nombre" value="<?php echo $row['nombre']; ?>" class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Dirección</label>
											  <input type="text" name="direccion" value="<?php echo $row['direccion']; ?>" class="form-control">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Telefono</label>
											  <input name="telefono" value="<?php echo $row['telefono']; ?>" class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">FAX</label>
											  <input name="fax" value="<?php echo $row['fax']; ?>" class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Correo Electrónico</label>
											  <input name="email" value="<?php echo $row['email']; ?>" class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Pagina Web</label>
											  <input name="pagina" value="<?php echo $row['pagina']; ?>" class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Ciudad</label>
											  <input name="ciudad" value="<?php echo $row['ciudad']; ?>" class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Provincia</label>
											  <input name="provincia" value="<?php echo $row['provincia']; ?>" class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Moneda</label>
											  <input name="moneda" value="<?php echo $row['moneda']; ?>" class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Maximo puntaje</label>
											  <input name="pmax" value="<?php echo $row['pmax']; ?>" class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Minimo puntaje</label>
											  <input name="pmin" value="<?php echo $row['pmin']; ?>" class="form-control" type="text">
											</div>
											<div class="form-group">
										        <label class="control-label">Año</label>
										        <select name="año" value="" class="form-control">
										        <option>2024</option>
										        <option>2023</option>
										        <option>2022</option>
										        <option>2021</option>
										        <option selected>2020</option>
										        <option>2019</option>
										        <option>2018</option>
										          	<option>2017</option>
										          	<option>2016</option>
										          	<option>2015</option>
										        </select>
										    </div>
											<div class="form-group">
										      <label class="control-label">Logo de la Escuela</label>
										      <div>
										      <img name="logo" style="height: 70px; width: 50px;" src="<?php echo $row['logo']?>" alt="" readonly="" class="form-control">
										        <!-- <input name="logo" value="<?php echo $row['logo']; ?>" type="text" readonly="" class="form-control" placeholder="Examinar.."> -->
										        <input type="file" >
										      </div>
										    </div>
										    <p class="text-center">
										    	<button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar</button>
										    </p>
									    </form>
									    
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="newYear">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									    <form action="" method="post">
									    	<div class="form-group label-floating">
											  <label class="control-label">Año</label>
											  <input name="año" value="<?php echo $row['año']; ?>" class="form-control" type="text">
											</div>
											<div class="form-group">
											  <label class="control-label">Fecha de inicio</label>
											  <input value="<?php echo $row['inicio']?>" name="inicio" class="form-control" type="text">
											</div>
											<div class="form-group">
											  <label class="control-label">Fecha de Cierre</label>
											  <input value="<?php echo $row['cierre']?>" name="cierre"  class="form-control" type="date">
											</div>
										    <p class="text-center">
										    	<button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar</button>
										    </p>
									    </form>
									</div>
								</div>
							</div>
						</div>
					  	<div class="tab-pane fade" id="listYear">
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
											<th class="text-center">#</th>
											<th class="text-center">Año</th>
											<th class="text-center">Fecha de inicio</th>
											<th class="text-center">Fecha de Cierre</th>
											<th class="text-center">Modificar</th>
											<th class="text-center">Eliminar</th>
										</tr>
									</thead>
									<tbody>
										<tr>
											<td><?php echo $row['id']?> </td>
											<td><?php echo $row['año']?></td>
											<td><?php echo $row['inicio']?></td>
											<td><?php echo $row['cierre']?></td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
								<ul class="pagination pagination-sm">
								  	<li class="disabled"><a href="#!">«</a></li>
								  	<li class="active"><a href="#!">1</a></li>
								  	<!-- <li><a href="#!">2</a></li>
								  	<li><a href="#!">3</a></li>
								  	<li><a href="#!">4</a></li>
								  	<li><a href="#!">5</a></li> -->
								  	<li><a href="#!">»</a></li>
								</ul>
							</div>
					  	</div>

					  	<div class="tab-pane fade" id="newPeriod">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									    <form action="" method="post">
									    	<div class="form-group label-floating">
											  <label class="control-label">Nombre</label>
											  <input class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Estado</label>
											  <input class="form-control" type="text">
											</div>
											<div class="form-group">
											  <label class="control-label">Fecha de inicio</label>
											  <input class="form-control" type="date">
											</div>
											<div class="form-group">
											  <label class="control-label">Fecha de Cierre</label>
											  <input class="form-control" type="date">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Cantidad</label>
											  <input class="form-control" type="text">
											</div>
											<div class="form-group">
										        <label class="control-label">Año</label>
										        <select class="form-control">
										        	<option>2023</option>
										          	<option>2022</option>
										          	<option>2021</option>
										          	<option selected="">2020</option>
										          	<option>2019</option>
										          	<option>2018</option>
										          	<option>2017</option>
										        </select>
										    </div>
										    <p class="text-center">
										    	<button href="#!" class="btn btn-info btn-raised btn-sm"><i class="zmdi zmdi-floppy"></i> Guardar</button>
										    </p>
									    </form>
									</div>
								</div>
							</div>
						</div>
						<?php 
							$sql = "SELECT * FROM periodo";

					  		$resultado=$conexion->query($sql); ?>
					  	<div class="tab-pane fade" id="listPeriod">
							<div class="table-responsive">
							
								<table class="table table-hover text-center">
									<thead>
										<tr>
											<th class="text-center">#</th>
											<th class="text-center">Nombre</th>
											<th class="text-center">Estado</th>
											<th class="text-center">Fecha de Inicio</th>
											<th class="text-center">Fecha de Cierre</th>
											<th class="text-center">Cantidad</th>
											<th class="text-center">Año</th>
											<th class="text-center">Modificar</th>
											<th class="text-center">Eliminar</th>
										</tr>
									</thead>
									<tbody>

									<?php while($row=$resultado->fetch_assoc()){ ?>
										<tr>
											<td><?php echo $row['id']?></td>
											<td><?php echo $row['nombre']?></td>
											<td><?php echo $row['estado']?></td>
											<td><?php echo $row['f_inicio']?></td>
											<td><?php echo $row['f_cierre']?></td>
											<td><?php echo $row['monto']?></td>
											<td><?php echo $row['año']?></td>
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
										<?php } ?>
										
									</tbody>
								</table>
								<ul class="pagination pagination-sm">
								  	<li class="disabled"><a href="#!">«</a></li>
								  	<li class="active"><a href="#!">1</a></li>
								  	<!-- <li><a href="#!">2</a></li>
								  	<li><a href="#!">3</a></li>
								  	<li><a href="#!">4</a></li>
								  	<li><a href="#!">5</a></li> -->
								  	<li><a href="#!">»</a></li>
								</ul>
							</div>
					  	</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- Notifications area -->
	<section class="full-box Notifications-area">
		<div class="full-box Notifications-bg btn-Notifications-area"></div>
		<div class="full-box Notifications-body">
			<div class="Notifications-body-title text-titles text-center">
				Notifications <i class="zmdi zmdi-close btn-Notifications-area"></i>
			</div>
			<div class="list-group">
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-triangle"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">17m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-alert-octagon"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">15m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Donec id elit non mi porta gravida at eget metus.</p>
				    </div>
			  	</div>
			  	<div class="list-group-separator"></div>
				<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-help"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">10m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
				    </div>
				</div>
			  	<div class="list-group-separator"></div>
			  	<div class="list-group-item">
				    <div class="row-action-primary">
				      	<i class="zmdi zmdi-info"></i>
				    </div>
				    <div class="row-content">
				      	<div class="least-content">8m</div>
				      	<h4 class="list-group-item-heading">Tile with a label</h4>
				      	<p class="list-group-item-text">Maecenas sed diam eget risus varius blandit.</p>
				    </div>
			  	</div>
			</div>

		</div>
	</section>

	<!-- Dialog help -->
	<div class="modal fade" tabindex="-1" role="dialog" id="Dialog-Help">
	  	<div class="modal-dialog" role="document">
		    <div class="modal-content">
			    <div class="modal-header">
			        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
			    	<h4 class="modal-title">Help</h4>
			    </div>
			    <div class="modal-body">
			        <p>
			        	Lorem ipsum dolor sit amet, consectetur adipisicing elit. Nesciunt beatae esse velit ipsa sunt incidunt aut voluptas, nihil reiciendis maiores eaque hic vitae saepe voluptatibus. Ratione veritatis a unde autem!
			        </p>
			    </div>
		      	<div class="modal-footer">
		        	<button type="button" class="btn btn-primary btn-raised" data-dismiss="modal"><i class="zmdi zmdi-thumb-up"></i> Ok</button>
		      	</div>
		    </div>
	  	</div>
	</div>
	<!--====== Scripts -->
	<script src="./js/jquery-3.1.1.min.js"></script>
	<script src="./js/sweetalert2.min.js"></script>
	<script src="./js/bootstrap.min.js"></script>
	<script src="./js/material.min.js"></script>
	<script src="./js/ripples.min.js"></script>
	<script src="./js/jquery.mCustomScrollbar.concat.min.js"></script>
	<script src="./js/main.js"></script>
	<script>
		$.material.init();
	</script>
</body>
</html>