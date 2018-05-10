<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Workerman\Worker;

class Workerman extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'workerman:command {action} {-d}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        //
        $ws = new Worker("websocket://127.0.0.1:80");

        $ws->count = 4;

        $ws->onConnect = function($connection)
        {
            echo "new connection\n";
        };

        $ws->onMessage = function($connection, $data)
        {
            echo $data."\n";

            $connection->send('hello1');
        };

        $ws->onClose = function($connection)
        {
            echo "Connection closed\n";
        };

        // Run worker
        Worker::runAll();


    }
}
