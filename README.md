<p align="center">
    <a href="https://laravel.com/" target="_blank">
        <img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo">
    </a>
</p>

<p align="center">
    <h1>Universidad Politécnica Territorial "Federico Brito Figueroa"</h1>
    <h2>PNF en Informática</h2>

    <h3>📌 Evaluación 2 - Paradigmas de Programación</h3>
    <h3>👥 Integrantes: Romer Aldana - Pedro Castillo</h3>

    <h3>📚 Enunciado Asignado: #9 - Inmobiliaria</h3>
    <strong>Relación:</strong> Zona (Padre) → Propiedad (Hija)<br/>
    <strong>Campos de la tabla Hija (Propiedades):</strong><br/>
    ▪ dirección (required, string)<br/>
    ▪ precio_alquiler (required, numeric, min:0)<br/>
    ▪ habitaciones (required, integer, min:1)<br/>
    ▪ disponible (boolean, default:true)<br/>
    ▪ descripción (nullable, string)<br/>
    (Relacionado con una zona a través de zona_id)

    <h2>⚙️ Instrucciones para inicializar el proyecto</h2>

<strong>1️⃣ Clonar el repositorio:</strong><br/>
&nbsp;&nbsp;&nbsp;git clone https://github.com/RomerAldana/Evaluacion2-P-AldanaRomer-CastilloPedro..git<br/>
&nbsp;&nbsp;&nbsp;cd Evaluacion2-P-AldanaRomer-CastilloPedro.<br/>

<strong>2️⃣ Instalar dependencias:</strong><br/>
&nbsp;&nbsp;&nbsp;composer install<br/>

<strong>3️⃣ Configurar archivo .env:</strong><br/>
&nbsp;&nbsp;&nbsp;cp .env.example .env<br/>

<h3>🔧 Opción A: Configuración con MySQL (Recomendada)</h3>
&nbsp;&nbsp;&nbsp;DB_CONNECTION=mysql<br/>
&nbsp;&nbsp;&nbsp;DB_HOST=127.0.0.1<br/>
&nbsp;&nbsp;&nbsp;DB_PORT=3306<br/>
&nbsp;&nbsp;&nbsp;DB_DATABASE=inmobiliaria_db<br/>
&nbsp;&nbsp;&nbsp;DB_USERNAME=root<br/>
&nbsp;&nbsp;&nbsp;DB_PASSWORD=<br/>

<h3>🔧 Opción B: Configuración con SQLite</h3>
&nbsp;&nbsp;&nbsp;DB_CONNECTION=sqlite<br/>
&nbsp;&nbsp;&nbsp;# (Eliminar o comentar las líneas de DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, DB_PASSWORD)<br/>

<strong>4️⃣ Crear la base de datos SQLite (solo si usas SQLite):</strong><br/>
&nbsp;&nbsp;&nbsp;En Windows (PowerShell):<br/>
&nbsp;&nbsp;&nbsp;New-Item -Path database\database.sqlite -ItemType File -Force<br/>
&nbsp;&nbsp;&nbsp;En Linux/Mac:<br/>
&nbsp;&nbsp;&nbsp;touch database/database.sqlite<br/>

<strong>5️⃣ Generar clave de aplicación:</strong><br/>
&nbsp;&nbsp;&nbsp;php artisan key:generate<br/>

<strong>6️⃣ Ejecutar migraciones:</strong><br/>
&nbsp;&nbsp;&nbsp;php artisan migrate<br/>

<strong>7️⃣ (Opcional) Insertar datos de prueba:</strong><br/>
&nbsp;&nbsp;&nbsp;php artisan tinker<br/>
<br/>
&nbsp;&nbsp;&nbsp;// Crear zonas de prueba<br/>
&nbsp;&nbsp;&nbsp;DB::table('zonas')->insert([<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'nombre' => 'Centro',<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'ciudad' => 'Caracas',<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'descripcion' => 'Zona céntrica',<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'created_at' => now(),<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'updated_at' => now()<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'nombre' => 'Este',<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'ciudad' => 'Caracas',<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'descripcion' => 'Zona residencial',<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'created_at' => now(),<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'updated_at' => now()<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;],<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'nombre' => 'Oeste',<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'ciudad' => 'Caracas',<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'descripcion' => 'Zona comercial',<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'created_at' => now(),<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'updated_at' => now()<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]<br/>
&nbsp;&nbsp;&nbsp;]);<br/>
<br/>
&nbsp;&nbsp;&nbsp;// Crear propiedades de prueba<br/>
&nbsp;&nbsp;&nbsp;DB::table('propiedads')->insert([<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;[<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'zona_id' => 1,<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'direccion' => 'Av. Principal, Edif. Centro, Piso 5',<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'precio_alquiler' => 500.00,<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'habitaciones' => 2,<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'disponible' => true,<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'descripcion' => 'Apartamento céntrico',<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'created_at' => now(),<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;'updated_at' => now()<br/>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;]<br/>
&nbsp;&nbsp;&nbsp;]);<br/>

<strong>8️⃣ Iniciar servidor de desarrollo:</strong><br/>
&nbsp;&nbsp;&nbsp;php artisan serve<br/>

<strong>9️⃣ Acceder a la aplicación:</strong><br/>
&nbsp;&nbsp;&nbsp;• Propiedades: http://127.0.0.1:8000/propiedades<br/>
&nbsp;&nbsp;&nbsp;• Zonas: http://127.0.0.1:8000/zonas<br/>

<h2>✅ Funcionalidades implementadas</h2>
✓ CRUD completo para Zonas (tabla padre)<br/>
✓ CRUD completo para Propiedades (tabla hija)<br/>
✓ Relación 1:N entre Zonas y Propiedades<br/>
✓ Migraciones con llaves foráneas y onDelete cascade<br/>
✓ Modelos con $fillable y relaciones (belongsTo/hasMany)<br/>
✓ Validaciones en servidor:<br/>
&nbsp;&nbsp;&nbsp;• Propiedades: dirección (required), precio_alquiler (required|numeric|min:0), habitaciones (required|integer|min:1), zona_id (required|exists)<br/>
&nbsp;&nbsp;&nbsp;• Zonas: nombre (required|max:100), ciudad (required|max:100), descripcion (nullable)<br/>
✓ Protección CSRF en todos los formularios (@csrf)<br/>
✓ Directivas Blade: @foreach, @if, @error, @section, @extends<br/>
✓ Interfaz responsiva con Tailwind CSS<br/>
✓ Mensajes flash de éxito después de operaciones CRUD<br/>
✓ Persistencia de datos en formularios con old()<br/>
✓ Manejo de errores de validación<br/>

<h2>📁 Estructura del proyecto</h2>
<strong>Modelos:</strong><br/>
• app/Models/Zona.php<br/>
• app/Models/Propiedad.php<br/>

<strong>Controladores:</strong><br/>
• app/Http/Controllers/ZonaController.php<br/>
• app/Http/Controllers/PropiedadController.php<br/>

<strong>Migraciones:</strong><br/>
• database/migrations/[timestamp]_create_zonas_table.php<br/>
• database/migrations/[timestamp]_create_propiedads_table.php<br/>

<strong>Vistas:</strong><br/>
• resources/views/layouts/app.blade.php<br/>
• resources/views/zonas/{index,create,edit,show}.blade.php<br/>
• resources/views/propiedades/{index,create,edit,show}.blade.php<br/>

<strong>Rutas:</strong><br/>
• routes/web.php (Route::resource para zonas y propiedades)<br/>

<h2>🔗 Enlace del repositorio</h2>
https://github.com/RomerAldana/Evaluacion2-P-AldanaRomer-CastilloPedro..git

<h2>📅 Fecha de entrega</h2>
Miércoles 23-02-2026 al viernes 27-02-2026

<hr/>
<p align="center">
    <i>"Como programadores, construimos sistemas que persisten. Que esta evaluación sea un recordatorio de que lo que se construye con esfuerzo y buenas prácticas, permanece."</i><br/>
    <br/>
    <i>"El que escucha lo que yo enseño y hace lo que yo digo, es como una persona precavida que construyó su casa sobre piedra firme."</i><br/>
    <b>Mateo 7:24-25</b>
</p>
