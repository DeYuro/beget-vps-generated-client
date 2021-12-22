<?php
namespace app\lib\order;

use app\lib\order\actions\Creator;
use yii\di\ServiceLocator;

class OrderServiceFactory extends ServiceLocator
{
    public function getOrderCreator(): Creator
    {
        return $this->get('creator');
    }
}