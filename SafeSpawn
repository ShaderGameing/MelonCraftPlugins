<?php

/*
__PocketMine Plugin__
name=SafeSpawn
description=Players can't pvp in the spawn area
version=1.1
author=ShaderGameing
class=SafeSpawn
apiversion=10,11
*/

class SafeSpawn implements Plugin{
private $api;
private $server;
public function __construct(ServerAPI $api, $server = false){
$this->api = $api;
$this->server = ServerAPI::request();
}

public function init(){
$this->api->addHandler('entity.health.change', array($this, 'entityHurt'));
}

public function entityHurt($data){
$target = $data['entity'];
$t = new Vector2($target->x, $target->z);
$s = new Vector2($this->server->spawn->x, $this->server->spawn->z);
if($t->distance($s) <= $this->api->getProperty('spawn-protection')){
if(is_numeric($data['cause'])){
$e = $this->api->entity->get($data['cause']);
if(($e !== false) and ($e->class === ENTITY_PLAYER)){
$e->player->sendChat('You are currently in a NO-PVP zone');
}
}
return false;
}
}

public function __destruct(){}
}

