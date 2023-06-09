<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POSGRADO</title>

    <!-- Required styles for Material Web -->
    <link rel="stylesheet" href="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.css">

    <!-- MATERIAL ICONS FULL -->
    <link
        href="https://fonts.googleapis.com/css?family=Material+Icons|Material+Icons+Outlined|Material+Icons+Two+Tone|Material+Icons+Round|Material+Icons+Sharp"
        rel="stylesheet" />

    <!-- B5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!-- CSS CUSTOM -->
    <link rel="stylesheet" href="{{asset('assets/css/style-login.css')}}">
    <link rel="stylesheet" href="{{asset('assets/img/logo-unt.png')}}">
</head>
<body>
    <div class="contenedor">
        <div class="box-login shadow-lg border p-5 rounded">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <img src="{{asset('assets/img/logo-unt.png')}}" alt="Logo" id="logoUNT">
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <h2 class="text-center">SISTEMA CONTACTOS</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <label class="mdc-text-field mdc-text-field--outlined w-100">
                        <span class="mdc-notched-outline">
                            <span class="mdc-notched-outline__leading"></span>
                            <span class="mdc-notched-outline__notch">
                                <span class="mdc-floating-label" id="my-label-id">Usuario</span>
                            </span>
                            <span class="mdc-notched-outline__trailing"></span>
                        </span>
                        <input type="text" class="mdc-text-field__input" aria-labelledby="my-label-id">
                        <span class="material-icons-outlined mdc-text-field__icon mdc-text-field__icon--trailing">
                            face
                        </span>
                    </label>
                </div>
            </div>

            <!-- row 2 -->
            <div class="row mt-3">
                <div class="col-lg-12">
                    <label class="mdc-text-field mdc-text-field--outlined w-100 text-field-pass">
                        <span class="mdc-notched-outline">
                            <span class="mdc-notched-outline__leading"></span>
                            <span class="mdc-notched-outline__notch">
                                <span class="mdc-floating-label" id="my-label-id">Contraseña</span>
                            </span>
                            <span class="mdc-notched-outline__trailing"></span>
                        </span>
                        <input type="password" class="mdc-text-field__input toggle-password"
                            aria-labelledby="my-label-id">
                        <!-- ICON EYE -->
                        <span id="icon-view-pass2">
                            <span class="material-icons-outlined mdc-text-field__icon mdc-text-field__icon--trailing">
                                visibility_off
                            </span>
                        </span>

                    </label>
                </div>
            </div>

            <!-- row 2 -->
            <div class="row">
                <div class="col-lg-12">
                    <br>
                    <button class="btn btnLogin w-100 rounded-pill">Ingresar</button>
                </div>
            </div>
        </div>
    </div>

    <!-- JQuery -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"
        referrerpolicy="no-referrer"></script>
    <!-- Required Material Web JavaScript library -->
    <script src="https://unpkg.com/material-components-web@latest/dist/material-components-web.min.js"></script>
    <!-- Instantiate single textfield component rendered in the document -->
    <script src="resources/js/app_material.js"></script>

    <script>
        $(document).ready(function () {
            $('#icon-view-pass2').click(function (e) {
                let input_type = $('.toggle-password').attr('type');
                if (input_type == 'password') {
                    $('.toggle-password').attr('type', 'text');
                    $('#icon-view-pass2 span').text('visibility');
                } else {
                    $('.toggle-password').attr('type', 'password');
                    $('#icon-view-pass2 span').text('visibility_off');
                }
            });
        });
    </script>
</body>

</html>

