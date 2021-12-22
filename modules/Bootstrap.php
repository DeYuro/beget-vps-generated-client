<?php
namespace app\modules;

use yii\base\Application;
use yii\base\BootstrapInterface;
use yii\base\Exception;

class Bootstrap implements BootstrapInterface
{
    public $configFile   = "@app/config/services.php";
    public $coreServices = [];

    public function bootstrap($app): void
    {
        $config = require_once(\Yii::getAlias($this->configFile));

        foreach ($config as $serviceConfig) {
            $this->configure($serviceConfig);
        }
    }

    protected function configure(array $serviceConfig, string $name = NULL)
    {
        $name = $serviceConfig['name'] ?? $name;

        if (!$name) {
            throw new Exception("Service config must contains a 'name' option");
        }

        $singleton = isset($serviceConfig['singleton']) ? (bool)$serviceConfig['singleton'] : false;
        unset($serviceConfig['singleton']);

        if (!isset($serviceConfig['class'])) {
            throw new Exception("Service config must contains a 'class' option");
        }

        if ($singleton) {
            $class = $serviceConfig['class'];
            unset($serviceConfig['class']);

            \Yii::$container->setSingleton($class, $serviceConfig);
        } else {
            unset($serviceConfig['name']);
            \Yii::$container->set($name, $serviceConfig);
        }
    }
}