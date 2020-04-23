<section>
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<h2 class="text-center">Funcionários</h2>
				<table id="datatablepai" class="table table-striped table-bordered" cellspacing="0" width="100%">
					<thead>
						<tr>
							<th>Nome</th>
							<th>Data de nascimento</th>
							<th>Número de filhos</th>
							<th>Editar</th>
							<th>Deletar</th>
						</tr>
					</thead>
					<tbody>
						<?php foreach ($employees as $registro) : ?>
						<tr>
							<td><?=$registro->Nome?></td>
							<td><?=$registro->DataNascimento?></td>
							<td><?=$registro->qtd?></td>
							<td>
								<a href="<?=base_url('edit-funcionario/').$registro->CodFuncionario?>" class="btn btn-primary btn-xs editEmployee">
									<i class="far fa-edit"></i>
								</a>
							</td>
							<td>
								<button type="button" class="btn btn-danger btn-xs idEmployee" data-title="Delete" data-toggle="modal" data-target="#delete" id="<?=$registro->CodFuncionario?>">
									<i class="far fa-trash-alt"></i>
								</button>
							</td>
						</tr>
						<?php endforeach ?>
					</tbody>
				</table>
				<a name="cadastrar" id="cadastrar" class="btn btn-primary mt-5" href="<?=base_url('cadastrar')?>" role="button">Novo Funcionário</a>
			</div>
		</div>
	</div>
</section>
<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title custom_align" id="Heading">Excluir 
					registro</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body">
		
				<div class="alert alert-danger">
				<i class="fas fa-exclamation"></i> 
					Tem certeza de que deseja excluir este registro?
				</div>
			
			</div>
			<div class="modal-footer">
					<button type="submit" class="btn btn-success confirmDeleteFuncionario"><i class="far fa-check-circle"></i> Sim</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-ban"></i> Não</button>
					<div class="alert alert-success employeeDelete mt-3" role="alert" style="display: none">
						Filho deletado!
					</div>
			</div>
		</div>
		<!-- /.modal-content --> 
	</div>
	<!-- /.modal-dialog --> 
</div>


