<div class="container mt-5">
	<div class="row">
		<div class="col-md-12">
			<h2 class="text-center">Adicionar funcionário</h2>
			<form action="" method="post" class="submitEmployee">
				<div class="form-group col-md-12">
					<label for="nome">Nome</label>
					<input type="text" class="form-control" name="nome" id="nome"  placeholder="" required>
				</div>
				<div class="form-group col-md-6">
					<label for="dataNascimento">Data de Nascimento</label>
					<input type="date" class="form-control" name="dataNascimento" id="dataNascimento"  placeholder="" required>
				</div>
				<div class="form-group col-md-6">
					<label for="salario">Salário</label>
					<input type="text" class="form-control" name="salario" id="salario"  placeholder="" required>
				</div>
				<div class="form-group col-md-12">
					<label for="atividades">Atividades</label>
					<textarea type="text" class="form-control" name="atividades" id="atividades"  placeholder="" required></textarea>
				</div>
				<div class="form-group col-md-12 mt-5">
					<button type="submit" id="submitEmployee" class="btn btn-success" role="button">
						Salvar
					</button>
					<a href="<?=base_url()?>" class="btn btn-danger" role="button">
						Voltar
					</a>
					<div class="alert alert-success employee mt-3" role="alert" style="display: none">
						Funcionário registrado, registre um filho se quiser!
					</div>
				</div>
			</form>
		</div>
	</div>
</div>


