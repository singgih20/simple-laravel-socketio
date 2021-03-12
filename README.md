<li>
    <ol>Install redis server in your system (sudo apt install redis-server for linux) </ol>
    <ol>npm install</ol>
    <ol>composer require predis/predis</ol>
    <ol>Set .env REDIS_PORT=6379
LARAVEL_ECHO_PORT=6001</ol>
    <ol>php artisan migrate</ol>
    <ol>laravel-echo-server init (make sure it's running on localhost)</ol>
    <ol>npm run dev</ol>
    <ol>laravel-echo-server start</ol>
    <ol>php artisan serve</ol>
    <ol>Go to http://127.0.0.1:8000/ </ol>
    <ol>Go to http://127.0.0.1:8000/t for fire a event to get an update real time data </ol>
    <ol>Re-Check http://127.0.0.1:8000 </ol>
</li>
