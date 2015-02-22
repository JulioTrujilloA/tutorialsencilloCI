<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
	<div class="page-content">
		<!-- BEGIN PAGE HEADER-->
		<h3 class="page-title">
			Catálago de noticias <small>Día a día</small>
		</h3>
		<!-- END PAGE HEADER-->
		<!-- BEGIN PAGE CONTENT-->
		<div class="row">
			<div class="col-md-12">
				 <!-- BEGIN EXAMPLE TABLE PORTLET-->
				<div class="portlet box grey-cascade">
					<div class="portlet-title">
						<div class="caption">
							<i class="fa fa-globe"></i>Tabla de Noticias
						</div>
						<div class="tools">
							<a href="javascript:;" class="reload" id="recarga_pagina"></a>
						</div>
					</div>
					<div class="portlet-body">
						<div class="table-toolbar">
							<div class="row">
								<div class="col-md-6">
									<div class="btn-group">
										<a id="boton_nueva_noticia" data-toggle="modal" class="btn green circle" href="#modal_nueva_noticia">
											Nueva noticia <i class="fa fa-plus"></i>
										</a>
									</div>
								</div>
							</div>
						</div>
						<table class="table table-striped table-bordered table-hover" id="sample_1">
							<thead>
								<tr>
									<th>ID</th>
									<th>Título</th>
									<th>Descripción</th>
									<th>Fecha</th>
								</tr>
							</thead>
							<tbody>
								<?php foreach ($noticias as $noticia): ?>
									<tr class="odd gradeX">
										<td><?php echo $noticia['id']; ?></td>
										<td><a href="<?php echo site_url('/noticias/ver').'/'.$noticia['id'] ?>"><?php echo $noticia['titulo']; ?></a></td>
										<td><?php echo $noticia['contenido']; ?></td>
										<td><?php echo $noticia['fecha']; ?></td>
									</tr>
								<?php endforeach ?>
							</tbody>
						</table>
					</div>
				</div>
				<!-- END EXAMPLE TABLE PORTLET-->
			</div>
		</div>
		<!-- END PAGE CONTENT-->
	</div>
</div>
<!-- END CONTENT -->


<!-- BEGIN VENTANAS MODALES -->
<div class="modal fade" id="modal_nueva_noticia" tabindex="-1" role="basic" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true"></button>
				<h3><strong>Formulario para nueva noticia</strong></h>
			</div>
			<!-- BEGIN FORM-->
			<form action="<?php echo site_url('/noticias/crear/insertar') ?>" class="form-horizontal" id="form_nueva_noticia" method="post">
				<div class="modal-body">
					<div class="form-body">
						<label class="control-label col-md-4">Título de noticia:</label>
							<div class="col-md-6">
								<div class="input-icon right">
									<input type="text" class="form-control" name="titulo" placeholder="Aquí va el título"/>
								</div>
							</div>
						<label class="control-label col-md-4">Contenido:</label>
							<div class="col-md-6">
								<div class="input-icon right">
									<textarea type="text" class="form-control"rows="10" name="contenido" placeholder="Contenido"></textarea>
								</div>
							</div>
						<label class="control-label col-md-4">Fecha:</label>
							<div class="col-md-6">
								<div class="input-icon right">
									<input type="text" class="form-control" name="fecha" placeholder="Fecha de hoy"/>
								</div>
							</div>
						<div class="clearfix"></div>
					</div>
				</div>
				<div class="modal-footer">
					<button type="button" class="btn default" data-dismiss="modal">Cerrar</button>
					<button type="submit" class="btn red"><i class="fa fa-save"></i> Guardar noticia</button>
				</div>
			</form>
			<!-- END FORM-->
		</div>
		<!-- /.modal-content -->
	</div>
	<!-- /.modal-dialog -->
</div>
<!-- END VENTANAS MODALES -->
