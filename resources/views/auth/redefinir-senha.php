<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Redefinir senha</title>
    <link rel="icon" type="image/png" href="{{ url ('assets2/img/icon.jpg')}}">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main class="mb-5">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header text-center">
                                    <h3 class="text-center font-weight-light my-4">Redefinir senha</h3>
                                </div>
                                <div class="card-body">
                                   @if($errors->count() > 0)
                                   <div class="alert alert-danger">
                                    @foreach ($errors->all() as $error)
                                    <span>{{ $error }}</span>
                                    @endforeach
                                </div>
                                @endif
                                <form method="POST" action="{{ route('password.update') }}">
                                    @csrf

                                    <!-- Password Reset Token -->
                                    <input type="hidden" name="token" value="{{ $request->route('token') }}">

                                    <div class="form-group">
                                        <label class="small mb-1" for="email">Email</label>
                                        <input class="form-control py-4" id="email" type="email" placeholder="Digite seu email" name="email" required />
                                    </div>

                                    <div class="form-group">
                                        <label class="small mb-1" for="password">Senha</label>
                                        <input class="form-control py-4" id="password" type="password" placeholder="Insira sua senha" name="password" required />
                                    </div>

                                    <div class="form-group">
                                        <label class="small mb-1" for="password_confirmation">Confirme a senha</label>
                                        <input class="form-control py-4" id="password_confirmation" type="password" placeholder="Insira sua senha novamente" name="password_confirmation" required />
                                    </div>

                                    <div class="form-group d-flex align-items-center justify-content-between mt-4 mb-0">
                                        <span></span>
                                        <button type="submit" class="btn btn-primary" style="background-color: #054F77;">Redefinr senha</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
    </div>
</div>
</body>
</html>