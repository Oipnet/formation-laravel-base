<?php
require_once './Container.php';
require_once './Foo.php';

$container = new Container();
$container->register(Foo::class, function () {
    return new Foo(new DateTime('now'));
});

/** @var Foo $foo */
$foo = $container->get(Foo::class);
echo $foo->getDatetime()->format('Y-m-d');