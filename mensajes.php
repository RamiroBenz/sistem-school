<?php 

include 'conexion/cn.php';

 ?>
<!DOCTYPE html>
<html lang="es">
<head>
<link href='https://netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css' rel='stylesheet' type='text/css'>
  
<link href='https://fonts.googleapis.com/css?family=Euphoria+Script' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css">

<!--           Mensajes Anteriores - -->
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
<link rel="stylesheet" type="text/css" href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">




<style>
	
	html, body {
  background: #f5f5f5 !important;
}

.content {
  margin: 50px auto 0;
}

h1#head {
  font-family: 'Euphoria Script';
  text-align: center;
  margin: 0 0 30px;  
  
  line-height: 90px;
  text-shadow: 1px 1px 1px #343434;
  font-weight: normal;
}

#editor {
  resize:vertical;
  overflow:auto;
  border:1px solid silver;
  border-radius:5px;
  min-height:300px;
  box-shadow: inset 0 0 10px silver;
  padding:1em;
  background: white;
  margin: 0 auto;
  width: 90%;
}



/*    Mensajes anteriores   */





</style>
</head>
<?php	
include ('menu.php');


?>
<?php 

include "conexion/cn.php";
 $sql = "SELECT * FROM alumnos";

  $resultado=$conexion->query($sql);
 ?>
		<!-- Content page -->
		<div class="container-fluid">
			<div class="page-header">
			  <h1 class="text-titles">R&B <small>Escuelas</small></h1>
			</div>
		</div>
	<section>
	<!-- Main content -->
    <section class="content">
      <div class="row">
        <!-- /.col-->
 <div class="">

 <div class="form-group">
    <label class="control-label">Alumno</label>
    <input class="form-control" type="text" name="alumno">
											
</div>

     <h1 style="font-size: 45px;" id="head">Mensaje para las familias</h1>
        <div id="editparent">
          <div id='editControls' style='text-align:center; padding:5px;'>
            <div class='btn-group'>
              <a class='btn' data-role='undo' href='#'><i class='icon-undo'></i></a>
              <a class='btn' data-role='redo' href='#'><i class='icon-repeat'></i></a>
            </div>
            <div class='btn-group'>
              <a class='btn' data-role='bold' href='#'><b>Bold</b></a>
              <a class='btn' data-role='italic' href='#'><em>Italic</em></a>
              <a class='btn' data-role='underline' href='#'><u><b>U</b></u></a>
              <a class='btn' data-role='strikeThrough' href='#'><strike>abc</strike></a>
            </div>
            <div class='btn-group'>
              <a class='btn' data-role='justifyLeft' href='#'><i class='icon-align-left'></i></a>
              <a class='btn' data-role='justifyCenter' href='#'><i class='icon-align-center'></i></a>
              <a class='btn' data-role='justifyRight' href='#'><i class='icon-align-right'></i></a>
              <a class='btn' data-role='justifyFull' href='#'><i class='icon-align-justify'></i></a>
            </div>
            <div class='btn-group'>
              <a class='btn' data-role='indent' href='#'><i class='icon-indent-right'></i></a>
              <a class='btn' data-role='outdent' href='#'><i class='icon-indent-left'></i></a>
            </div>
            <div class='btn-group'>
              <a class='btn' data-role='insertUnorderedList' href='#'><i class='icon-list-ul'></i></a>
              <a class='btn' data-role='insertOrderedList' href='#'><i class='icon-list-ol'></i></a>
            </div>
            <div class='btn-group'>
              <a class='btn' data-role='h1' href='#'>h<sup>1</sup></a>
              <a class='btn' data-role='h2' href='#'>h<sup>2</sup></a>
              <a class='btn' data-role='p' href='#'>p</a>
            </div>
            <div class='btn-group'>
              <a class='btn' data-role='subscript' href='#'><i class='icon-subscript'></i></a>
              <a class='btn' data-role='superscript' href='#'><i class='icon-superscript'></i></a>
            </div>
          </div>
          <div id='editor' style='' contenteditable>
			<p style="font-size: 16px;"></p>
          </div>
    </div>
  </div>
  <br>
  <br>
  <br>
  <?php 
 include 'conexion/cn.php'; 

$sql= "SELECT * FROM mensajes";

$resultado=$conexion->query($sql);

?>
 
  <!--           Mensajes Anteriores - -->
  <h1 id="head">Mensajes anteriores</h1>
<div class="container">
    <table class="table table-hover table-bordered table-condensed">
        <thead>
            <tr>
                <th style="width: 20px">
                    <input class="checkall" type="checkbox">
                </th>
                <th>Mensajes</th>
            </tr>
        </thead>
        <tbody>
        <?php 
 		while($row=$resultado->fetch_assoc()){ ?>
            <tr id="IFGVMORSGI" class="info">
                <td>
                    <input type="checkbox" name="delete">
                </td>
                <td>
                    <div class="media">	<a class="delete-message" href="#" onclick="return false;">
				<i class="fa fa-trash-o  pull-right"></i>
			</a>
	<a class="mark-read" href="#" onclick="return false;">
				<i class="fa fa-asterisk pull-right"></i>
			</a>
	<a class="pull-left" href="#">
		<img class="media-object" src="http://www.gravatar.com/avatar/fd876f8cd6a58277fc664d47ea10ad19?s=48&d=mm&r=g" alt="">
	</a>
	<div class="media-body">
        <a href="#" style="color: #000;"><p><b><?php echo $row['nombre']?></b></p></a>
        	<h4 class="media-heading">
				<small><?php echo $row['fecha-hora']?></small></h4>

	<a class="media-player" href="#" onclick="document.getElementById('IFGVMORSGI-audio').load();document.getElementById('IFGVMORSGI-audio').play();return false">
					 <p><?php echo $row['mensaje']?></p>
				</a>

                           
                        </div>
                    </div>
                </td>
            </tr>
            
          <?php } ?>  
        </tbody>
    </table>
</div>

<br>

      </div>
      <!-- ./row -->
    </section>

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

	<script>
		
			$(function() {
  $('#editControls a').click(function(e) {
    switch($(this).data('role')) {
      case 'h1':
      case 'h2':
      case 'p':
        document.execCommand('formatBlock', false, $(this).data('role'));
        break;
      default:
        document.execCommand($(this).data('role'), false, null);
        break;
    }
    
  });
});



$.fn.highlight = function () {
    return $(this).each(function () {
        var el = $(this);
        $("<div/>")
            .width(el.outerWidth())
            .height(el.outerHeight())
            .css({
            "position": "absolute",
                "left": el.offset().left,
                "top": el.offset().top,
                "background-color": "#ffff99",
                "opacity": ".7",
                "z-index": "9999999"
        })
            .appendTo('body')
            .fadeOut(1000)
            .queue(function () {
            $(this).remove();
        });
    });
};

$('.delete-message').click(function () {
    var message_tr = $(this).closest('tr');
    var message_id = message_tr.attr('id');
    message_tr.highlight();
    // $(this).find('i').removeClass('fa-trash-o').addClass('fa-refresh fa-spin');
});

$('.checkall').on('click', function () {
    $(this).closest('table').find(':checkbox').prop('checked', this.checked);
});

	</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>	
</body>
</html>