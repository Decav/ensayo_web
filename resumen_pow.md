### primer comando que es ejecutado por el profe en las clases
` SI ACASO ESe PUERTO ESTÁ OCUPADO SE PUEDE CAMBIAR// pero no me funcó esto xdd
    docker run -dit --name nombre-del-repo -p 1234:80 http:2.4
`
## COMIENZO DE CREACION Y MÁS
1. # creacion de repositorio en github
`
para crear un repo primero debemos poner el nombre, que sea public Y MARCAR ADD. GITIGNORE POSTERIORMENTE ELEGIR LA OPCION DE LARAVEL
`
2. # replicacion de repositorio
` 
a. para serciorarnos de donde estamos haciendo este comando o esta duplicacion podemos ocupar el copando 'pwd' devuelve la ruta del computador
comando : git clone ruta//con un git bash dentro de por ejemplo el escritorio
`
3. # poner archivos de docker en la carpeta, o sea copiarlos. están descargados ya estos son archivos hechos por el profe xd

4. # cambiar el nombre dentro del archivo docker-compose por un nombre que corresponda al proyecto que estamos realizando.
`tambien se deben cambiar en la parte de volumenes el 'pwd' por un . (esto solo corresponde para windows)`

5. # para crear un repositorio de docker 
`recordar que el docker tiene que estar corriendo ._.`
`
comando : docker-compose build //esto se realiza en una terminal de visual
`
`la primera vez que se realice esto es muy probable que se demore más tiempo en crear la imagen de docker,, como yo ya lo cree no se demora casi nada`

6. # para levantar los repocitorios que recien se crearon
`
comando : docker-compose up -d
`
7. # se realiza un comando en el attach shell de laravel
`comando : composer create-project laravel/laravel nom_aplicacion`
`Si acaso hay un error en esta parte y cuando se entra al public no se carga la pagina, y tira un error 500
1. serciorarse de que los contenedores de docker estén corriendo.
2. realizar un attach shell en el contenedor de laravel
3. serciorarse que cuando se realice el comando 'pwd' coincida con '/var/www/html'
4. realizar cd y la carpeta del proyecto
5. y poner el comando 'composer install'// y luego probar si funca
`



8. ## sistema de rutas. 

`en web se registran todas las rutas web de la aplicacion`
`en web está lo siguiente:
        Route::get('/', function () {
            return view('welcome');
        });
    entonces si se decea generar una vista con nombre Casas, el archivo que está en resources/views/ deberia llamarse casas.blade.php`

9. ## borrar el archivo de bienvenida de laravel y crear uno de home.blade.php

10. # luego trabajando sobre el archivo home.blade.php
`se debe ir a bootstrap y en get started copiar el template de comienzo`
`luego en el body crear el navbar de la misma forma, sacarlo desde bootstrap`
## navbar
`<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
      <div class="navbar-nav">
        <a class="nav-link active" aria-current="page" href="#">Home</a>
        <a class="nav-link" href="#">Features</a>
        <a class="nav-link" href="#">Pricing</a>
        <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
      </div>
    </div>
  </div>
</nav>`

11. # cambiar el web.php, dentro poner lo siguiente: 
`Route::view("/","home")->name("home");`

12. # cambiar dentro de nav los href de los objetos 'a'
`ejemplo: href="{{route('home')}}"`

13. # para agregar otras vistas se deben agregar de la siguiente forma
`forma base.. Route::view(ruta,nombreDeVistaSinBladePuntPhp)->name("nombreRutaQueSeUsaEnRoute"),,
ejemplo: Route::view("/ver_medicamentos","ver_medicamentos")->name("ver_medicamentos");`

14. # crear la carpeta layouts y dentro de ella necesitamos el archivo master.blade.php
`el nombre del archivo puede variar, lo importante es que sea acorde a lo que se esté señalando`
`Luego se pasa todo el contenido de home al master`

15. # en el master en la parte del main se define una categoría
`@yield('principal')`

16. # luego se crea una extencion de la categoría en los archivos donde se requiera.
`@extends('layouts.master')

@section('principal')
   //acá se pueden poner todos los contenidos necesarios 
@endsection`


17. # si queremos guardar imagenes
`si necesitamos guardas imagenes siempre deben estar en public porque es la parte visible de web`
`para cargar la imagen dentro de el master se tiene que poner un 'asset', un asset es un elemento que significa a un elemento estatico, o sea un elemento cargable dentro del navegador`
`ejemplo: 
<img src="{{asset('img/cruz_verda.jpg')}}" class="image-fluid w-25 h-auto">`// lo de class se puede omitir y hacer un css personalizado

18. # css personalizado
`se crea la carpeta css en public y un archivo css con un nombre representativo para los estilos que se necesitan, tambien creamos una carpeta js`

19. # luego de creados estas carpetas se conectan con un link en el master(siempre dsp de bootstrap). ejm:
`<link rel="stylesheet" href="{{asset('css/style.css')}}">`
`no olvidar poner el class o el id para los estilos`

20. # nueva etiqueta meta,, desde cross site origin
`<meta name="csrf-token" content="{{csrf_token()}}">`

`para que el boton o elemento quede en todo el contenedor d-grid gap-1`
21. ## proceder con el código de los objetos que tienen que tener las vistas 

22. ## conexion con axios GG
`se agrega en el master la conexion al axios, el siguiente: 
<script src="https://cdn.jsdelivr.net/npm/axios/dist/axios.min.js"></script>`
`se debe hacer una conexion de axios para laravel`

23. ## configuracion del axios
`1. se crea en public dentro de la carpeta js axios_config.js`
`2. se agrega lo siguiente en el js:
window.axios.defaults.headers.common["X-CSRF-TOKEN"] = document.querySelector("meta[name='csrf-token']").content;`
`3. conectar en master: 
<script src="{{asset('js/axios_config.js')}}"></script>`


24. ### Creacion de controller
`se realiza en una terminal attach shell`
`Comandos:
-> ls         //este va a entregar un nombre y luego hay que ponerlo en el cd siguiente
-> cd nombre_del_proyecto                //comando fundamental
-> ls         //no es necesario pero nos sercioramos que esté correcto,, si aparece readme.md artisan blabla ta ien.
-> php artisan make:controller NombreDelControlador                    //comando fundamental
`

25. ## dentro del controlador
`definir funciones
recordar que las variables se ponen con un $ antes y las funciones se crean con public function`

26. ## se conecta el controlador en api.php
`Primero debemos importar el controlador a api.php`
`use App\Http\Controllers\NombreDelControlador;`
`al fondo de todo lo que haya en api se escribe lo siguiente:
Route::get("medicamentos/get", [MedicamController::class, "getEstado"]);`
`(claro que si es un metodo post entonces en vez de que sea Route::get es Route::post)`

27. ## cargar los estados en el option, o sea por medio de javascript
`
1. definimos una nueva categoria en el master para, de la siguiente manera: 
        @yield('javaS')
2. luego se agrega una nueva section y el script
´recordar que el src del script se hace con asset
3. crear la funcion(es) necesarias para trabajar, recordar que si hacemos peticiones son asincrónicas, por ende siempre deben llevar async
ejemplo: 
const cargarEstados = async()=>{
    let resultado = await axios.get("api/estado/get");
    console.log(resultado);
};
cargarEstados();
`

28. ## archivos de migracion 
`1. se modifica el archivo .env,, el host: se cambia por el nombre del container en docker-phpcompose`
`   cambiar la password de root en BD_PASSWORD: por la que está en el docker-compose tambien`
`   en el nombre de la base de datos se pone el nombre de la base que pusimos en el archivo de docker-compose`

`2. entrar a la carpeta del proyecto(cd nomcarpeta/)`//recordar que para serciorar se puede usar el ls

`3. luego ejecutar el sigte comando: php artisan migrate` // este crea las tablas de la base, la creacion es un archivo que crea marcas

`4. creacion de migracion: php artisan make:migration nombre_de_no_se_que --create=nombre_de_la_tabla_en_plural`    //cuando se crean las migraciones pueden haber reversas de migraciones :3


29. ## Dentro de las migraciones
`en la siguiente funcion: `
public function up()
    {
        Schema::create('medicamentos', function (Blueprint $table) {
            $table->id();  //entre id y timestamps hay que agregar los campos de la tabla.
            $table->timestamps();
        });
    }
`Se vuelve a hacer el php artisan migrate`(actualizacion de la base de datos)


