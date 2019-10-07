<?php


namespace App;



use Dotenv\Dotenv;

class App {
    /**
     * @var $dotenv Dotenv
     */
    private $dotenv;
    public function __constructor()
    {
        $this->dotenv = Dotenv::create(__DIR__);
        $this->dotenv->load();
    }

    public function save($array){
        $this->dotenv->overload();
    }
}

$app = new App();
$app->save([]);
