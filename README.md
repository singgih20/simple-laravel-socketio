<ol>
    <li>Install redis server in your system (sudo apt install redis-server for linux) </li>
    <li>npm install</li>
    <li>composer require predis/predis</li>
    <li>Set .env REDIS_PORT=6379
LARAVEL_ECHO_PORT=6001</li>
    <li>php artisan migrate</li>
    <li>npm install -g laravel-echo-server</li>
    <li>laravel-echo-server init (make sure it's running on localhost)</li>
    <li>npm run dev</li>
    <li>laravel-echo-server start</li>
    <li>php artisan serve</li>
    <li>Go to http://127.0.0.1:8000/ </li>
    <li>Go to http://127.0.0.1:8000/t fire an event to get a real time data update </li>
    <li>Re-Check http://127.0.0.1:8000 </li>
</ol>
