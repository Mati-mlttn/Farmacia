<!DOCTYPE html>
<html lang="es">

@include('layouts.head')

<body class="bg-personalizado">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-4">Login</h3>
                                </div>
                                <div class="card-body">

                                    <div class="text-center font-weight-light my-4">
                                        <a href="{{ url('login/google') }}" class="btn btn-outline-primary">
                                            <img src="{{ asset('img/google.png') }}" alt="Iniciar sesión con Google"
                                                style="width: 20px; margin-right: 10px;">
                                            Iniciar sesión con Google
                                        </a>
                                    </div>
                                </div>
                                <div class="card-footer text-center py-3">
                                    <div>
                                        <a>Voy a tener suerte</a>
                                        &middot;
                                        <a target="blank" href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">
                                            <button class="btn fa-solid fa-plus fa-bounce"
                                                style="color: #1d812c;"></button>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">ブランドごとに作られています</div>
                        {{-- <div>
                            <a>Voy a tener suerte</a>
                            &middot;
                            <a href="https://www.youtube.com/watch?v=dQw4w9WgXcQ">
                                <button class="btn fa-regular fa-slot-machine fa-bounce"
                                    style="color: #1d812c;"></button>
                            </a>
                        </div> --}}
                    </div>
                </div>
            </footer>
        </div>
    </div>
    @include('layouts.scripts')
</body>

</html>
