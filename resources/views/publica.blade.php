<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('pageName')</title>
    
       <style type="text/css">

        .clase1{

          color: white;
          background-color: blue;
          height: 20.9px;
          padding: 2px;
          border: 2px solid blue;

        }


        .clase2{

          color: blue;
          background-color: white;

        }


        .boton{

           
          color: white;
          background-color: blue;
          height: 20.9px;
          padding: 2px;
         

        }

        .circulo{

          width: 50px;
          height: 50px;
           border-radius: 50%;
           padding: 10px;
           background-color: yellow;

        }

        .titulo{

         color: white;
          background-color: blue;
          height: 20.9px;
          padding: 2px;
          border: 2px solid blue;

        }

        .paquete{

          border: 2px solid blue;
          text-align: center;
          float: left;
          margin-left: 50px;
          border-collapse: collapse;

        }

        .titulo2{

          color: white;
          background-color: gray;
          height: 20.9px;
          padding: 2px;
          border: 2px solid gray;

        }

        .paquete2{

          border: 2px solid gray;
          text-align: center;
          float: left;
          margin-left: 50px;
          border-collapse: collapse;

        }

        .titulo3{

          color: white;
          background-color: black;
          height: 20.9px;
          padding: 2px;
          border: 2px solid black;

        }

        .paquete3{

          border: 2px solid black;
          text-align: center;
          float: left;
          margin-left: 50px;
          border-collapse: collapse;

        }

        .centerleft{

          padding-left: 40%;

        }

        .p_top{

          padding-top: 5%;

        }

        .p_bottom{

          margin-bottom: 10px;

        }


        a{

          color: white;
          text-decoration: none;
          margin-right: 2px;
          padding: 4px;

        }

        a:hover{

          color: red;

        }

       </style>
    </head>
    <body >
        <header class="clase2 centerleft"><!--<div><img src="Imagenes\logo.png"></div>--><h1>CableUnet</h1></header>
        <nav class="clase1">

          <a href="@yield('direccion')">@yield('link1')</a>
          <a href="@yield('direccion2')">@yield('link2')</a>
          <a href="@yield('direccion3')">@yield('link3')</a>


        </nav>
        <section  class="p_top" >@yield('contenido')</section>
        

    </body>
</html>
