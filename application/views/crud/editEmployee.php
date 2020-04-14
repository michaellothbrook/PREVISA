<div class="container mt-5">
	<div class="row">
		<div class="col-md-12">
			<h2 class="idEmployee" id="<?=$employeeById[0]->CodFuncionario?>" class="text-center">Editar funcionário <?=$employeeById[0]->Nome?></h2>
			<form action="" method="post" class="editEmployeeById">
				<div class="form-group col-md-12">
					<label for="nome">Nome</label>
					<input type="text" class="form-control" name="nome" id="nome"  placeholder="" required value="<?=$employeeById[0]->Nome?>">
				</div>
				<div class="form-group col-md-6">
					<label for="dataNascimento">Data de Nascimento</label>
					<input type="date" class="form-control" name="dataNascimento" id="dataNascimento"  placeholder="" required value="<?=$employeeById[0]->DataNascimento?>">
				</div>
				<div class="form-group col-md-6">
					<label for="salario">Salário</label>
					<input type="text" class="form-control" name="salario" id="salario"  placeholder="" required value="<?=$employeeById[0]->Salario?>">
				</div>
				<div class="form-group col-md-12">
					<label for="atividades">Atividades</label>
					<textarea type="text" class="form-control" name="atividades" id="atividades"  placeholder="" required value=""><?=$employeeById[0]->Atividades?></textarea>
				</div>
				<div class="form-group col-md-12 mt-5">
					<button type="submit" id="editEmployeeById" class="btn btn-success" role="button">
						Salvar
					</button>
					<a href="<?=base_url()?>" class="btn btn-danger" role="button">
						Voltar
					</a>
					<div class="alert alert-success employee mt-3" role="alert" style="display: none">
						Funcionário atualizado, registre um filho se quiser!
					</div>
				</div>
				<div class="form-group col-md-12">
					<h2 class="text-center">Filhos</h2>
					<table id="datatablefilho" class="table table-striped table-bordered" cellspacing="0" width="100%">
						<thead>
							<tr>
								<th>Nome</th>
								<th>Data de nascimento</th>
								<th>Editar</th>
								<th>Deletar</th>
							</tr>
						</thead>
						<tbody>
							<?php foreach ($childrenById as $registro) : ?>
								<tr>
									<td><?=$registro->Nome?></td>
									<td><?=$registro->DataDeNascimento?></td>
									<td>
										<a href="" type="button" class="btn btn-primary btn-xs editChildren" id="">
											<i class="far fa-edit"></i>
										</a>
									</td>
									<td>
										<button type="button" class="btn btn-danger btn-xs idFilho" data-title="Delete" data-toggle="modal" data-target="#delete" id="<?=$registro->CodFuncionarioFilho?>">
											<i class="far fa-trash-alt"></i>
										</button>
									</td>
								</tr>
							<?php endforeach ?>
						</tbody>
					</table>
					<div class="form-group col-md-12">
						<button type="button" class="btn btn-primary mt-5" data-title="Adicionar" data-toggle="modal" data-target="#addFilho" id="btnAddFilho">
							Novo Filho
						</button>
					</div>
				</div>
			</form>
		</div>
	</div>
</div>

<div class="modal fade" id="delete" tabindex="-1" role="dialog" aria-labelledby="edit" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title custom_align" id="Heading">Excluir registro</h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<div class="modal-body">
		
				<div class="alert alert-danger">
				<i class="fas fa-exclamation"></i> 
					Tem certeza de que deseja excluir este registro?
				</div>
			
			</div>
			<div class="modal-footer">
					<button type="submit" class="btn btn-success confirmDeleteFilho"><i class="far fa-check-circle"></i> Sim</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-ban"></i> Não</button>
					<div class="alert alert-success childrenDelete mt-3" role="alert" style="display: none">
						Filho deletado!
					</div>
			</div>
		</div>
		<!-- /.modal-content --> 
	</div>
	<!-- /.modal-dialog --> 
</div>

<div class="modal fade" id="addFilho" tabindex="-1" role="dialog" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<h4 class="modal-title custom_align" id="">Adicionar filho para <?=$employeeById[0]->Nome?></h4>
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
			</div>
			<form action="" method="POST" class="submitChildren">
				<div class="modal-body">
					<div class="form-group col-md-12">
						<label for="nome">Nome</label>
						<input type="text" class="form-control" name="nome" id="nome"  placeholder="" required>
					</div>
					<div class="form-group col-md-12">
						<label for="dataNascimento">Data de Nascimento</label>
						<input type="date" class="form-control" name="dataNascimento" id="dataNascimento"  placeholder="" required>
					</div>
				</div>
				<div class="modal-footer ">
					<button type="submit" class="btn btn-success" id="submitChildren"><i class="far fa-check-circle"></i> Salvar</button>
					<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fas fa-ban"></i> Cancelar</button>
					<div class="alert alert-success children mt-3" role="alert" style="display: none">
						Filho registrado!
					</div>
				</div>
			</form>
		</div>
		<!-- /.modal-content --> 
	</div>
	<!-- /.modal-dialog --> 
</div>
