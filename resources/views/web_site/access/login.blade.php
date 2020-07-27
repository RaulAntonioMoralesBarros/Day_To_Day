@extends('web_site.layouts.app_access')

@section('title')
	Ingreso
@endsection

@section('content')
<div class="wrap-login100">
	{{-- form --}}
	<form class="login100-form validate-form">

		{{-- logo --}}
		<div class="d-table m-auto text-center" >
			<img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 75px;"
				src="img/logo.png" alt="Day To Day"  />
		</div>
		{{-- /logo --}}

		{{-- title content --}}
		<span class="login100-form-title p-b-43">
			Iniciar sesión
		</span>
		{{-- /title content --}}

		{{-- content --}}
		<div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
			<input class="input100" type="text" name="email">
			<span class="focus-input100"></span>
			<span class="label-input100">Correo electronico</span>
		</div>

		<div class="wrap-input100 validate-input" data-validate="Password is required">
			<input class="input100" type="password" name="pass">
			<span class="focus-input100"></span>
			<span class="label-input100">Contraseña</span>
		</div>
		{{-- /content --}}

		{{-- content footer --}}
		<div class="flex-sb-m w-full p-t-3 p-b-32">
			<div class="contact100-form-checkbox">
				<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
				<label class="label-checkbox100" for="ckb1">
					Recordar
				</label>
			</div>
			<div>
				<a href="#" class="txt1">
					¿Se te olvido la contraseña?
				</a>
			</div>
		</div>
		{{-- /content footer --}}

		{{-- button --}}
		<div class="container-login100-form-btn">
			<button class="login100-form-btn">
				Iniciar sesión
			</button>
		</div>
		{{-- /button --}}

		{{-- register --}}
		<div class="text-center p-t-46 p-b-20">
			<span class="txt2">
				o registrate usando
			</span>
		</div>

		<div class="login100-form-social flex-c-m">
			<a href="Diario_de_vida" class="login100-form-social-item flex-c-m bg1 m-r-5" style="text-decoration: none;">
				<i class="fa fa-facebook-f" aria-hidden="true"></i>
			</a>

			<a href="#" class="login100-form-social-item flex-c-m bg3 m-r-5" style="text-decoration: none;">
				<i class="fa fa-google" aria-hidden="true"></i>
			</a>
		</div>
		{{-- /register --}}
	</form>

	{{-- image left --}}
	<div class="login100-more" style="background-image: url('img/access/1.jpg');">
	</div>
	{{-- /image left --}}
</div>
@endsection