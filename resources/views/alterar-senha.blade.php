@extends('layouts.base')

@section('titulo', 'Editar perfil')


@section('conteudo')
<div class="row">
	<div class="col-md-12">
		<div class="card shadow mt-4">
			<div class="card-body">
				<header class="w3-container w3-grey">
					<h3>Alterar senha</h3>
				</header>

				<div class="w3-container">

					@if (session('msg'))
						<div class="alert alert-danger text-center">
							{{ session('msg') }}
						</div>
					@endif
					<form method="post" action="{{ route('users.update-password', ['user'=>$user->id]) }}">
						@method('PUT')
						@csrf
						<div class="form-row">
							<div class="col-md-6">
								<label>Nova senha:</label>
								<input type="password" class="form-control" name="password" required autofocus>
							</div>
							<div class="col-md-6">
								<label>Confirmar senha:</label>
								<input type="password" class="form-control" name="password_confirmation" required>
							</div>
						</div>
						<br>
						<div class="text-right">
							<button type="submit" class="btn btn-primary">Salvar</button>
							<a href="{{ route('users.edit', ['user'=>$user->id]) }}" class="btn btn-secondary">Cancelar</a>
						</div>
					</form>
				</div>
			</div>
		</div>
	</div>
</div>

@endsection