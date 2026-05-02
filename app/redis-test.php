<?php

$redis = new Redis();

$redis->connect('redis',6379);

$redis->set('message', 'Redis is working');

echo $redis->get('message');
