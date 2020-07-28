@extends('web_site.layouts.app_access')

@section('title')
    Restablecer contraseña
@endsection

@section('content')
    <div class="wrap-login100">
        {{-- form --}}
        <form class="login100-form validate-form">

            {{-- logo --}}
            <div class="d-table m-auto text-center">
                <img id="main-logo" class="d-inline-block align-top mr-1" style="max-width: 75px;" src="img/logo.png"
                    alt="Day To Day" />
            </div>
            {{-- /logo --}}

            {{-- title content --}}
            <span class="login100-form-title p-b-43">
                Restablecer la contraseña
            </span>
            {{-- /title content --}}

            {{-- content --}}
            <div class="wrap-input100 validate-input" data-validate="Valid email is required: ex@abc.xyz">
                <input class="input100" type="text" name="email">
                <span class="focus-input100"></span>
                <span class="label-input100">Correo electronico</span>
            </div>
            {{-- /content --}}

            {{-- content footer --}}
            <div class="flex-sb-m w-full p-t-3 p-b-32">
                <span class="txt2">
                    Recibiras un correo electronico con el link para restablecer la contraseña.
                </span>

            </div>
            {{-- /content footer --}}

            {{-- button --}}
            <div class="container-login100-form-btn">
                <button class="login100-form-btn">
                    Restablecer contraseña
                </button>
            </div>
            {{-- /button --}}

        </form>

        {{-- image left --}}
        <div class="login100-more" style="background-image: url('img/access/1.jpg');">
        </div>
        {{-- /image left --}}
    </div>
@endsection
