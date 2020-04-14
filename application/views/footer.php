	
	<!-- Optional JavaScript -->
	<!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js" type="text/javascript"></script>
	<script src="https://cdn.datatables.net/1.10.20/js/dataTables.bootstrap4.min.js" type="text/javascript"></script>
	<script src="<?=base_url()?>js/table.js"></script>
	<script src="<?=base_url('js/jquery.mask.js')?>"></script>
	<script src="<?=base_url('js/maskMoney.js')?>"></script>
	<script>
		$(document).ready(function() {

			$('#salario').mask('#.##0,00', {reverse: true});

			//SUBMIT FUNCIONARIOS
			$('.submitEmployee').on('submit', function(e) {
				e.preventDefault();

				$('#submitEmployee').attr('disabled',true)
							.text('Aguarde...');

				
				let data = $(this).serializeArray();
				let url = "<?=base_url()?>"
				$.ajax({
					url: url+'submitEmployee',
					type: "POST",
					data: data,
					dataType: "json"
				})
				.done(function(response) {
    				console.log(response);
					$('.alert-success.employee').slideDown(300);
					$('.submitEmployee').each (function(){
						this.reset();
						$('#submitEmployee').attr('disabled',false)
							.text('Salvar');
					});
				});

			});

			//SUBMIT FILHOS
			$('.submitChildren').on('submit', function(e) {
				e.preventDefault();

				$('#submitChildren').attr('disabled',true)
							.text('Aguarde...');

				
				let data = $(this).serializeArray();
				let idEmployee = $('.idEmployee').attr('id');
				console.log(idEmployee);
				
				let url = "<?=base_url()?>"
				$.ajax({
					url: url+'submitChildren/'+idEmployee,
					type: "POST",
					data: data,
					dataType: "json"
				})
				.done(function(response) {
    				console.log(response);
					$('.alert-success.children').slideDown(300);
					window.location.reload();
				});

			});


			//DELETE FUNCIONARIOS
			$('.confirmDeleteFuncionario').on('click', function(e) {
				// e.preventDefault();

				$(this).attr('disabled',true)
							.text('Aguarde...');
				let a = $('.editEmployee').attr('href');
				console.log(a);
				
				let id = a.substr(-2);
				console.log(id);

				let url = "<?=base_url()?>"
				$.ajax({
					url: url+'deleteEmployee/'+id,
					type: "POST",
					data: id,
					dataType: "json"
				})
				.done(function(response) {
					console.log(response);
					$('.alert-success.employeeDelete').slideDown(300).delay(3000);
					window.location.reload();
				});

			});

			//DELETE FILHOS
			$('.confirmDeleteFilho').on('click', function() {
				// e.preventDefault();

				$(this).attr('disabled',true)
							.text('Aguarde...');

				
				let id = $('.idFilho').attr('id');
				console.log(id);
				
				let url = "<?=base_url()?>"
				$.ajax({
					url: url+'deleteChildren/'+id,
					type: "POST",
					data: id,
					dataType: "json"
				})
				.done(function(response) {
    				console.log(response);
					$('.alert-success.childrenDelete').slideDown(300).delay(3000);;
					window.location.reload();
				});

			});

			

			//EDIT FUNCIONARIOS
			$('.editEmployeeById').on('submit', function(e) {
				e.preventDefault();

				$('#editEmployeeById').attr('disabled',true)
							.text('Aguarde...');

				
				let data = $(this).serializeArray();
				let idEmployee = <?= $this->uri->segment(2) != null  ? $this->uri->segment(2) : 'n' ?>;
				let url = "<?=base_url()?>"
				$.ajax({
					url: url+'submit-edit-funcionario/'+idEmployee,
					type: "POST",
					data: data,
					dataType: "json"
				})
				.done(function(response) {
    				console.log(response);
					$('.alert-success.employee').slideDown(300);
					$('#editEmployeeById').attr('disabled',false)
							.text('Salvar');
				});

			});
			

			
		});
	</script>
  </body>
</html>
