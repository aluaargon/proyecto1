<?php
  include __DIR__ . "/partials/inicio-doc.part.php";
  include __DIR__ . "/partials/nav.part.php";
?> 
<!-- Principal Content Start -->
   <div id="galeria">
   	  <div class="container">
   	    <div class="col-xs-12 col-sm-8 col-sm-push-2">
       	   <h1>ASOCIADOS</h1>
       	   <hr>
			  <?php 
			 	include __DIR__ . "/partials/show-messages.part.php" 
			  ?>
				<?php if (("POST" === $_SERVER["REQUEST_METHOD"]) && (empty($errores))) :?>
					<a href='<?=$urlImagen;?>' target='_blank'>Ver imagen</a>
				<?php endif;?>	
				<form class="form-horizontal" action="/asociados.php" method="POST" enctype="multipart/form-data">

                    <div class="form-group">
						<div class="col-xs-6">
							<label for="nombre" class="label-control">Nombre</label>
							<input class="form-control" type="text" name="nombre">
						</div>
					</div>

                    <div class="form-group">

				<form class="form-horizontal" action="/contact.php" method="POST">

				<div class="form-group">
					<div class="col-xs-6">
						<label for="firstName" class="label-control">First Name</label>
						<input class="form-control <?= ($firstNameError ? " has-error" : "");?>" type="text" name="firstName" id="firstName" value="<?=$firstName?>">
				</div>
				</div>
				<div class="form-group">

						<div class="col-xs-6">
							<label for="imagen" class="label-control">Imagen</label>
							<input class="form-control-file" type="file" name="imagen">
						</div>
					</div>

					<div class="form-group">
						<div class="col-xs-12">
							<label for="descripcion" class="label-control">Descripción</label>
							<textarea class="form-control" name="descripcion" id="description"><?=$description;?></textarea>
							<button class="pull-right btn btn-lg sr-button">SEND</button>
                        </div>
					</div>

				</form>
<?php 
    include __DIR__ . "/partials/fin-doc.part.php";
?>

							<label for="description" class="label-control">Descripción</label>
							<textarea class="form-control" name="description" id="description"><?=$description;?></textarea>
							<button class="pull-right btn btn-lg sr-button">SEND</button>
						</div>

					</div>

				</form>
				<?php 
					include __DIR__ . "/partials/fin-doc.part.php";
				?>

