<?php
/**
 * Created by PhpStorm.
 * User: yy
 * Date: 2018/2/24
 * Time: 14:22
 */

namespace App\Repositories\Pool;


class Processor
{
    private $pool;
    private $maxProcesses = 3;
    private $processing = 0;
    private $waitingQueue=[];

    /**
     * Processor constructor.
     * @param $pool
     */
    public function __construct($pool)
    {
        $this->pool = $pool;
    }


    public function process($image){
        if ($this->processing++ < $this->maxProcesses) {
            $this->createWorker($image);
        }
        else{
            $this->pushWaitingQueue($image);
        }
    }


    public function createWorker($image){
        $worker = $this->pool->get();
        $worker->run($image, array($this,'processDone'));
    }

    public function processDone($worker){
        $this->processing -- ;
        $this->pool->dispose($worker);

        if (count($this->waitingQueue) > 0) {
            $this->createWorker($this->popFormWaitingQueue());
        }

    }

    public function pushWaitingQueue($image){
        $this->waitingQueue[] = $image;
    }


    public function popFormWaitingQueue(){
        return array_pop($this->waitingQueue);
    }


}