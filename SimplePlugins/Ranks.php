<?php

/*
__PocketMine Plugin__
name=DOnate
description=
version=1.0
author=ShaderGaming
class=Ranks
apiversion=10
*/

    class Ranks implements plugin{

    private $api;

    public function __construct(ServerAPI $api, $server = false){

		$this->api = $api;

	}

	public function init(){

    $this->api->console->register("ranks", "shows ranks", array($this, "commandHandler"));
	  $this->api->ban->cmdWhitelist("ranks");

    }
    
    public function commandHandler($cmd, $params, $issuer, $alias){

    $output = "[DonationCraft] Ranks for MelonCraftPE \n V.I.P 3$ | Guard 5$ | GM 10$ | Sub-GM 15$ |  Co-Owners 20$";
    return $output;

    }

    public function __destruct(){

    }

}

