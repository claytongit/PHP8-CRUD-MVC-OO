$(document).ready(function(){
	console.log('chamou');
	$('a[data-confirm]').click(function(){

		var href = $(this).attr('href');

		if(!$('#exampleModal').length){
			$('body').append(`<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog">
				<div class="modal-content">
				<div class="modal-header">
				<h5 class="modal-title" id="exampleModalLabel">Excluir da lista</h5>
				<button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
				</button></div><div class="modal-body">
				Deseja realmente excluir esse livro da lista?
				</div><div class="modal-footer">
				<a type="button" class="btn btn-danger" id="dataConfirmOK">Excluir</a>
				<button type="button" class="btn btn-primary" data-bs-dismiss="modal">Cancelar</button>
				</div></div></div></div>`);
		}

		$('#dataConfirmOK').attr('href', href);
		$('#exampleModal').modal('show');

		return false;
	});
});