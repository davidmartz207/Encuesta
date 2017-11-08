@extends('layouts.front')

@section('content')

	<!-- end spacer section -->
	<!-- section: contact -->
	<section id="contact" class="section green">
		<div class="container">
			<h4>Regístrate</h4>

			<div class="blankdivider30">
			</div>
			<div class="row">
				<div class="span12">
					<div class="cform" id="contact-form">
						<div id="sendmessage">Your message has been sent. Thank you!</div>
						<div id="errormessage"></div>
						<form action="{{ route('register') }}" method="post" id="registrar" role="form" class="">
							{{ csrf_field() }}
							<div class="row">
								<div class="span6">
									<div class="field  form-group">
										<label id="errors"></label>
										<input type="text" name="name" class="form-control required" id="name" placeholder="Nombre" />
										
									</div>
									<div class="field  form-group">
										<input type="text" class="form-control required" name="email" id="email" placeholder="Correo Electrónico" />
									</div>
									<div class="field  form-group">
										<input type="password" class="form-control required" name="password" id="password" placeholder="Contraseña"/>
										
									</div>
									<div class="field  form-group">
										<input type="password" class="form-control required" name="password_confirmation" id="password_confirmation" placeholder="Repita Contraseña"  />
										
									</div>
								</div>
								<div class="span6">
									<input type="submit" value="Registrar" class="btn btn-theme pull-left">
								</div>
							</div>
						</form>
					</div>
				</div>
				<!-- ./span12 -->
			</div>
		</div>
	</section>

@endsection