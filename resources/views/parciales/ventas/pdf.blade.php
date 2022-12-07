<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Reporte de Ventas</title>
    <link rel="preconnect" href="https://fonts.googleapis.com"><link rel="preconnect" href="https://fonts.gstatic.com" crossorigin><link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap" rel="stylesheet">
    <style>

        html{
            font-family: 'Montserrat', sans-serif;
        }

        * {
            margin: 0;
            border: 0;
            box-sizing: border-box;
        }
        header{
            margin: 20px 15px 0 15px;
            height: 11vh;
            background-color: #2C3E50;
            padding: 15px 3%;
            font-size: 19px;
            font-weight: 600;
            letter-spacing: 3px;
            color: #ffffff
        }
        main{
            margin: 0px 15px 0 15px;
        }
        main .tabla table{
        width: 100%;
        border-collapse: collapse;
        background-color: rgba(235, 235, 235, 1);
        overflow: hidden;
        }
        main .tabla table .uno th{
            background-color: rgba(84, 153, 199, .8);
            padding: .8rem .5rem;
            font-weight: 600;
            text-align: left;
            font-size: 10px;
            letter-spacing: 1px;
        }
        main .tabla table td{
            font-family: 'Montserrat', sans-serif;
            padding: .4rem .05rem;
            font-weight: 500;
            text-align: left;
            font-size: 10px
        }
        main .tabla table tr td:first-child{
            text-align: center;
            font-weight: 600;
        }
        footer {
        background-color: #1C2833;
        margin: 0px 15px 0 15px;
        padding: 30px 3%;
        font-size: 12px;
        font-weight: 500;
        letter-spacing: 1px;
        color: #ffffff
    }

    </style>
</head>

<body>

    <header>
        <a>WEIRDO COMICS - Ventas</a>
    </header>
    <main>
        <section class="tabla">
            <table>
                <tr class="uno">
                    <th>REF</th>
                    <th>Empleado</th>
                    <th>Comic</th>
                    <th>Articulo</th>
                    <th>$ Precio</th>
                    <th>Cantidad</th>
                    <th>$ Total</th>
                    <th>Fecha</th>
                </tr>
                <tr>
                @foreach($consultaVentas as $consul)
                    <tr>

                        <td>{{$consul->idVenta}}</td>
                        <td>{{$consul->usuario->nombre}}</td>
                        <td>{{$consul->comic->nombre}}</td>
                        <td>{{$consul->articulo->nombre}}</td>
                        <td>$ {{$consul->precio}}</td>
                        <td>{{$consul->cantidad}}</td>
                        <td>$ {{$consul->total}}</td>
                        <td>{{$consul->created_at}}</td>

                    </tr>
                @endforeach
            </table>
        </section>
    </main>
    <footer>
        <a>Registro de todos las ventas presentes en WEIRDO COMICS</a>
    </footer>
</body>
</html>
