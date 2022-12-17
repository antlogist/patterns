<?php

include_once('Classes/User.php');
include_once('Classes/DebitCard.php');
include_once('ObjectPools/ObjectPool.php');

class ObjectPoolController
{

    private $objectPool;

    public function __construct()
    {
        $this->objectPool = ObjectPool::getInstance();

        $user = new User;
        $debitCard = new DebitCard;

        $this->objectPool
            ->addObject($user)
            ->addObject($debitCard);
    }

    public function run()
    {
        $debitCard = $this->objectPool->getObject(DebitCard::class);

        $debitCard->cardNumber = '000 000 000 000';

        $user = $this->objectPool->getObject(User::class);
        $user ? $user->name = 'Anton' : '';

        $user2 = $this->objectPool->getObject(User::class);
        $user2 ? $user2->name = 'Vladimir' : '';


        echo '<pre>';
        var_dump($this->objectPool);
        echo '</pre>';
        
        echo '=========';

        $this->objectPool->release($user);

        echo '<pre>reset var $user<br>';
        var_dump($user);
        echo '</pre>';
        
        echo '=========';        

        $user3 = $this->objectPool->getObject(User::class);
        $user3 ? $user3->name = 'Arsenyy' : '';

        echo '<pre>';
        var_dump($this->objectPool);
        echo '</pre>';
    }
}
