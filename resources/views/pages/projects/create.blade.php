@extends('layouts.app')

@section('title-page', 'Adicionar Projeto')

@section('title-toolbar', 'Adicionar Projeto')

@section('content')
	@include('layouts.title')
	<div class="app-main flex-column flex-row-fluid " id="kt_app_main">
		<div class="d-flex flex-column flex-column-fluid">                             
			<div id="kt_app_content" class="app-content  flex-column-fluid py-6" >
				<div id="kt_app_content_container" class="app-container  container-fluid ">
					<div class="row">
						<div class="col-12">
							<div class="card">
								<div class="card-body">
									<form action="{{ route('projects.store') }}" method="POST" enctype="multipart/form-data">
										@csrf
										@include('pages.projects._form')
										<div class="d-flex justify-content-between">
											<a href="{{ route('projects.index') }}" class="btn btn-light mt-2">Voltar</a>
											<button type="submit" class="btn btn-primary btn-active-danger mt-2">Cadastrar</button>
										</div>
									</form>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
@endsection