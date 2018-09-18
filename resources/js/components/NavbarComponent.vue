<template>

    <div class="text-center">
        <form class="form-signin">
            <div class="card">
                <div class="center-block">
                    <img class="mb-4 logo" src="https://mbtskoudsalg.com/images/logo-png-1.png" alt="" width="220"
                        height="80">
                </div>
                <div class="card-body">
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email" required="" autofocus="">
                    <label for="inputPassword" class="sr-only">Senha</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Senha" required="">
                    <div class="checkbox mb-3 text-right remember">
                        <label>
                            <input type="checkbox" value="remember-me"> Lembrar?
                        </label>
                    </div>
                    <button type="submit" class="btn btn-block btn-xs btn-entrar mr-2">Entrar</button>
                    <button type="link" class="btn btn-block btn-xs btn-cadastrar">Cadastre-se</button>
                </div>
            </div>
        </form>
    </div>
</template>

<style>
    html,
    body {
        background: url('https://www.publicdomainpictures.net/pictures/80000/velka/blue-background-clipart.jpg') no-repeat center center fixed;
        -webkit-background-size: cover;
        -moz-background-size: cover;
        -o-background-size: cover;
        background-size: cover;
        height: 100%;
        text-align: center;
    }

    .logo {
        margin-top: 10px;
        padding-top: 10px;
    }

    .form-signin {
        width: 100%;
        max-width: 330px;
        padding: 15px;
        margin: auto;
    }

    .form-signin .checkbox {
        font-weight: 400;
    }

    .form-signin .form-control {
        position: relative;
        box-sizing: border-box;
        height: auto;
        padding: 10px;
        font-size: 16px;
    }

    .form-signin .form-control:focus {
        z-index: 2;
    }

    .form-signin input[type="email"] {
        margin-bottom: -1px;
        border-bottom-right-radius: 0;
        border-bottom-left-radius: 0;
    }

    .form-signin input[type="password"] {
        margin-bottom: 10px;
        border-top-left-radius: 0;
        border-top-right-radius: 0;
    }

    .remember {
        padding-top: 10px;
    }

    .btn-entrar,
    .btn-entrar:hover,
    .btn-entrar:active,
    .btn-entrar:visited,
    .btn-entrar:focus {
        color: white;
        background-color: #80bfff;
        border-color: #80bfff;
    }

</style>
