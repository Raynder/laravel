<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Nome App</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #fff;
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            #input-container {
                position: relative;
            }

            #input-container > img {
                position: absolute;
                top: 12px;
                left: 15px;
            }

            #input-container > input {
                padding-left: 40px;
            }

        </style>
    </head>
    <body>
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div id="input-container">
                        <img src="storage/app/img/pesquisa.png" alt="">
                        <input type="text" name="busca" class="busca" placeholder="Procurar estabelecimento" style="border: none">
                    </div>

                </div>
            </div>
        </div>
    </body>
</html>
