<div class="container mt-5">
	<div class="row">
		<div class="col-md-12">
			<h2 class="idEmployee" id="<?=$employeeById[0]->CodFuncionarioFilho?>" class="text-center">Editar filho <?=$employeeById[0]->Nome?></h2>
			<form action="" method="post" class="editChildrenById">
				<div class="form-group col-md-12">
					<label for="nome">Nome</label>
					<input type="text" class="form-control" name="nome" id="nome"  placeholder="" required value="<?=$employeeById[0]->Nome?>">
				</div>
				<div class="form-group col-md-6">
					<label for="dataNascimento">Data de Nascimento</label>
					<input type="date" class="form-control" name="dataNascimento" id="dataNascimento"  placeholder="" required value="<?=$employeeById[0]->DataNascimento?>">
				</div>
				<div class="form-group col-md-12 mt-5">
					<button type="submit" id="editChildrenById" class="btn btn-success" role="button">
						Salvar
					</button>
					<a href="<?=base_url()?>" class="btn btn-danger" role="button">
						Voltar
					</a>
					<div class="alert alert-success employee mt-3" role="alert" style="display: none">
						Filho atualizado!
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
