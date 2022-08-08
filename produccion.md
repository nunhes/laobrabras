# BBDD a producción

Si nos encontramos en este punto es porque nuestros proyectos Laravel crecen rápido, estamos aprendiendo a escribir menos código y haciendo más eficiente nuestro desarrollo Web, en este punto tu ya deberias saber como editar el archivo .env de Laravel, en el cual ingresas tu usuario, base de datos y contraseña para llevar a cabo la conexión Mysql en la mayoría de los casos, solo recuerda que Laravel provee la posibilidad de crear conexiones con distintos gestores de bases de datos simplemente editando algunas líneas de la forma más sencilla que puedas imaginar.

El hosting
Es importante recordar que para llevar cabo esta acción necesitamos un hosting donde podamos hospedar nuestro proyecto Laravel y que nos permita crear bases de datos Mysql, o la que haya sido de tu elección, no olvides que cada panel de administración es diferente pero una vez que entiendas lo básico podrás interpretar cualquier panel y te darás cuenta que todos cumplen la misma necesidad de distintas maneras.

Manos a la obra
1. Primeramente iniciamos sesión en nuestro panel de administración y buscamos el apartado “Bases de datos” y posteriormente damos clic en “Bases de datos Mysql”.


2. Lo que sigue es tan sencillo como llenar un formulario, tendremos un formato de inicio ya predefinido por el hosting, que vendría siendo nuestro nombre de usuario en su servidor más un nombre de 6 dígitos para que nosotros podamos identificar nuestras bases de datos y nombre de usuario para la misma, podemos generar una contraseña o ingresar una nosotros mismos, ingresa una contraseña segura ya que la base de datos guarda tu información y la información es uno de los activos más valiosos en las organizaciones, damos clic en crear y así de sencillo ya tienes una base de datos en tu hosting.


3. Recuerda muy bien esos 3 campos anteriores porque los usaremos ahora en el archivo .env de Laravel que mencione al principio, busca en el segundo párrafo del archivo .env los siguientes campos, DB_DATABASE, DB_USERNAME, DB_PASSWORD después del igual ingresaras respectivamente los datos de conexión de la base de datos que acabas de crear, nombre de la base de datos, usuario Mysql y contraseña.

4. Lo más probable es que trataste de hacer alguna prueba y no a funcionado cierto? posterior a esto y de alguna otra configuración similar, es necesario ejecutar un comando para limpiar el cache, el comando artisan es el siguiente:


					php artisan config:cache

Probablemente ya te estas haciendo otra pregunta, como voy a dar un comando artisan si eso se hace desde la terminal? La respuesta es la siguiente, si tu ya eres un profesional con servidores y tu hosting te lo permite, puedes crear una conexión SSH con tu servidor, para administrarlo de forma remota y ejecutar cualquier comando artisan desde la terminal, si este no es el caso y aparte, tu hosting es un servidor compartido, tendrás que hacerlo de una manera muy diferente, descrita en el siguiente punto.

5. Para ejecutar un comando artisan sin terminal, nos dirigimos al archivo web.php dentro de la carpeta routes y escribiremos una ruta con un comando artisan en su interior, de la siguiente manera:


					Route::get('/artisan/cache', function(){
						Artisan::call('config:cache');
						return redirect('/');
					});

6. Por último solo queda correr un último comando, el cual cargará todas tus tablas a la nueva base de datos, espero hayas creado las migraciones siguiendo las buenas prácticas del desarrollo de Laravel, ya que con “migrate:fresh” podemos limpiar la base de datos y correr todas las tablas del proyecto, si tienes seeds puedes correr el comando artisan adecuado de la misma manera, para más información puedes leer la documentación completa en la página oficial de Laravel dependiendo de la version que estes utilizando.


					Route::get('/artisan/migrate', function(){
						Artisan::call('migrate:fresh');
						return redirect('/');
					});

Nota: Cuando termines de utilizar estas rutas no olvides comentarlas, ya que si algún usuario malintencionado o tu descuidadamente ingresa estas rutas en el navegador, tu información se verá comprometida, al ejecutar un respectivo comando artisan.


ref.: https://forcsec.com/blog/base-de-datos-laravel-a-produccion