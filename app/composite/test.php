<?php


namespace app\composite;

require '../../vendor/autoload.php';

$node0 = new File('/app', 0);

$node1 = new File('/app/1.txt', 1000);
$node2 = new File('/app/a', 0);
$node3 = new File('/app/b', 0);

$node21 = new File('/app/a1.txt', 1000);
$node31 = new File('/app/b1.txt', 1000);
$node32 = new File('/app/b2.txt', 1000);

$node2->addNode($node21);
$node3->addNode($node31);
$node3->addNode($node32);
$node0->addNode($node1);
$node0->addNode($node2);
$node0->addNode($node3);

// 计算目录/app/b大小
echo $node3->fileSize() . 'B' . PHP_EOL; // 2000
// 计算/app目录大小
echo $node0->fileSize() . 'B' . PHP_EOL; // 4000