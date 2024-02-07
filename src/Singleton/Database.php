<?php

namespace Eazybright\DesignPatternsPHP\Singleton;

class Database
{
    protected static $instances = [];

    protected function __construct()
    { 
        echo "connected to database server...".PHP_EOL;
    }

    protected function __clone(){ }

    public function __wakeup()
    {
        throw new \Exception("Cannot unserialize singleton");
    }

    public static function getInstance()
    {
        $subclass = static::class;
        if (!isset(self::$instances[$subclass])) {
            self::$instances[$subclass] = new static();
        }
        return self::$instances[$subclass];
    }

    public function query($sql)
    {
        echo $sql.PHP_EOL;
    }
}