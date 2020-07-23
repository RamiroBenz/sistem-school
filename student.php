<?php 
  include 'conexion/cn.php';
  
  $sql = "SELECT * FROM alumnos";

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
			  <h1 class="text-titles"><i class="zmdi zmdi-face zmdi-hc-fw"></i> Todos nuestros <small>Estudiantes</small></h1>
			</div>
			<p class="lead">Estos son todos nuestros estudiantes!</p>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<ul class="nav nav-tabs" style="margin-bottom: 15px;">
					  	<li class="active"><a href="#new" data-toggle="tab">Nuevo Estudiante</a></li>
					  	<li><a href="#list" data-toggle="tab">Listado de estudiantes</a></li>
					</ul>
					<div id="myTabContent" class="tab-content">
						<div class="tab-pane fade active in" id="new">
							<div class="container-fluid">
								<div class="row">
									<div class="col-xs-12 col-md-10 col-md-offset-1">
									    <form action="alumno.php" method="post" enctype="multipart/form-data">
									    	<fieldset>Datos del estudiante</fieldset>
									    	<div class="form-group label-floating">
											  <label class="control-label">Nombre</label>
											  <input name="nombre" class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Apellido</label>
											  <input name="apellido" class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Dirección</label>
											  <textarea name="direccion" class="form-control"></textarea>
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Correo Electrónico</label>
											  <input name="email" class="form-control" type="text">
											</div>
											<div class="form-group label-floating">
											  <label class="control-label">Telefono</label>
											  <input name="telefono" class="form-control" type="text">
											</div>
											<div class="form-group">
											  <label class="control-label">Fecha de Nacimiento</label>
											  <input name="f_nacimiento" class="form-control" type="date">
											</div>
											<div class="form-group">
										        <label class="control-label">Sexo</label>
										        <select name="genero" class="form-control">
										          <option>Masculino</option>
										          <option>Femenino</option>
										        </select>
										    </div>
											<div class="form-group">
										      <label class="control-label">Foto</label>
										      <div>
										        <input name="foto"  type="text" readonly="" class="form-control" placeholder="Examinar...">
										        <input name="" type="file" >
										      </div>
										    </div>
										    <div class="form-group">
										        <label class="control-label">Tipo de estudiante</label>
										        <select name="tipo" class="form-control">
										          <option>Viejo</option>
										          <option>Nuevo</option>
										        </select>
										    </div>
										    <div class="form-group">
										        <label class="control-label">Curso</label>
										        <select name="seccion" class="form-control">
										          <option>1 grado</option>
										          <option>2 grado</option>
										          <option>3 grado</option>
										          <option>4 grado</option>
										          <option>5 grado</option>
										        </select>
										    </div>
										    <br><br>
										    <fieldset>Datos del alumno</fieldset>
										    <div class="form-group label-floating">
											  <label class="control-label">DNI </label>
											  <input name="dni" class="form-control" type="number">
											</div>
											
										    <p class="text-center">
										    	<input name="" type="submit"  class="btn btn-info btn-raised btn-sm" value="Guardar"><i class="zmdi zmdi-floppy"></i> 
										    </p>
									    </form>
									</div>
								</div>
							</div>
						</div>
					  	<div class="tab-pane fade" id="list">
							<div class="table-responsive">
								<table class="table table-hover text-center">
									<thead>
										<tr>
											<th class="text-center">#</th>
											<th class="text-center">Nombre</th>
											<th class="text-center">Apellido</th>
											<th class="text-center">Dirección</th>
											<th class="text-center">Correo Electrónico</th>
											<th class="text-center">Telefono</th>
											<th class="text-center">Fecha de Nacimiento</th>
											<th class="text-center">Genero</th>
											<th class="text-center">Tipo</th>
											<th class="text-center">Sección</th>
											<th class="text-center">Foto</th>
											<th class="text-center">Modificar</th>
											<th class="text-center">Eliminar</th>
										</tr>
									</thead>
									<tbody>
									<?php while($row=$resultado->fetch_assoc()){ ?>
										<tr>
											<td><?php echo $row['id']?></td>
											<td><?php echo $row['nombre']?></td>
											<td><?php echo $row['apellido']?></td>
											<td><?php echo $row['email']?></td>
											<td><?php echo $row['telefono']?></td>
											<td><?php echo $row['f_nacimiento']?></td>
											<td><?php echo $row['genero']?></td>
											<td><?php echo $row['tipo']?></td>
											<td><?php echo $row['seccion']?></td>
											<td><img  src="<?php echo $file['foto']?>"></td>
											<td><?php echo $row['dni']?></td>
											
											<td><a href="#!" class="btn btn-success btn-raised btn-xs"><i class="zmdi zmdi-refresh"></i></a></td>
											<td><a href="#!" class="btn btn-danger btn-raised btn-xs"><i class="zmdi zmdi-delete"></i></a></td>
										</tr>
										<?php } ?>
									</tbody>
								</table>
								<ul class="pagination pagination-sm">
								  	<li class="disabled"><a href="#!">«</a></li>
								  	<li class="active"><a href="#!">1</a></li>
								  	<li><a href="#!">2</a></li>
								  	<li><a href="#!">3</a></li>
								  	<li><a href="#!">4</a></li>
								  	<li><a href="#!">5</a></li>
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