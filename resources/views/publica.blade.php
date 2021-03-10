

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
      <!--    <a href="{{route('pagprincipal')}}" >Salir</a>
        	<a href="{{route('pagprincipal')}}" >Inicio</a>
        	<a href="{{route('ingreso')}}" >Ingresar</a>-->

        </nav>
        <section  class="centerleft p_top" >@yield('contenido')</section>
        

    </body>
</html>
