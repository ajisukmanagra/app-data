<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Aplikasi Web Agenda Kelas</title>
    <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <style>
        * {
            margin: 0;
            padding: 0;
        }
        body {
            font-family: 'Poppins';
            background-color: #4bcffa;
        }
        .color-75B4FF {
            background-color: #75B4FF;
        }
        /* Button Masuk */
        .color-A0D198 {
            background-color: #A0D198;
            color: white;
            border-radius: 40px;
            padding-left: 30px;
            padding-right: 30px;
            padding-top: 3px;
            padding-bottom: 5px;
            border: 0;
        }
        .color-A0D198 span {
            cursor: pointer;
            display: inline-block;
            position: relative;
            transition: 0.5s;
            font-size: 14px;
        }
        .color-A0D198 span:after {
            content: '\00bb';
            position: absolute;
            opacity: 0;
            top: 0;
            right: -20px;
            transition: 0.5s;
        }
        .color-A0D198:hover span {
            padding-right: 25px;
        }
        .color-A0D198:active {
            border: none;
            background-color: none;
        }
        .color-A0D198:hover span:after {
            opacity: 1;
            right: 0;
        }
        /* END */
        .content {
            margin-top: 50px;
        }
        .color-8FA1FE {
            background-color: #8FA1FE;
        }
        .text {
            margin-top: 60px;
            color: white;
            margin-bottom: 30px;
        }
        .card-content {
            background-color: #5E7BC6;
            padding: 10px;
            border-radius: 12px;
            /* width: 70%; */
            margin: 10px;
        }
        .text-content {
            color: white;
            margin-left: 10px;
            margin-top: 5px;
        }
        .footer {
            padding: 20px;
        }
        @media(max-width: 670px) {
            h3 {
                font-size: 20px;
            }
            h5 {
                font-size: 14px;
            }
            .text {
                font-size: 24px;
            }
            .icon {
                width: 42px;
                margin-right: 8px;
            }
            .text-content {
                margin-top: 5px;
            }
        }
    </style>
</head>

<body>
    <nav class="navbar navbar-light color-75B4FF">
        <a class="navbar-brand text-white" href="#">AGENDA KELAS</a>

        <a class="navbar-brand float-right" href="/login">
            <button class="color-A0D198">
                <span>MASUK</span>
            </button>
        </a>
    </nav>

    <div class="">
        <small></small>
    </div>

    <div class="container-fluid mt-4">
        <h3 class="text-center">APLIKASI AGENDA KELAS BERBASIS WEB</h3>
        <div class="row content">
            <div class="col-sm-6">
                <h5></h5>
                <br>
                <h5></h5>
            </div>
            <div class="col-sm-6">
                <img src="{{ asset('halman.png') }}" width="100%">
            </div>
        </div>

        <div class="row color-8FA1FE">
            <div class="col-sm-7">
                <img src="{{ asset('welcom.png') }}" width="100%">
            </div>
            <div class="col-sm-5">
                <h2 class="text">FITUR SEDERHANA</h2>
                <div class="card-content row">
                    <div class="col-2">
                        <img class="icon" src="{{ asset('bg-2.png') }}" width="100px">
                    </div>
                    <div class="col-10">
                        <h5 class="text-content"></h5>
                    </div>
                </div>

                <div class="card-content row">
                    <div class="col-2">
                        <img class="icon" src="{{ asset('1.png') }}" width="100px">
                    </div>
                    <div class="col-10">
                        <h5 class="text-content"></h5>
                    </div>
                </div>

                <div class="card-content row mb-5">
                    <div class="col-2">
                        <img class="icon" src="{{ asset('2.png') }}" width="100px">
                    </div>
                    <div class="col-10">
                        <h5 class="text-content"></h5>
                    </div>
                </div>
            </div>
        </div>

        <div class="footer text-center">
            <h5>AGENDA KELAS</h5>
        </div>
    </div>

    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
