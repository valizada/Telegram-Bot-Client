<?php
/**
 * Created by PhpStorm.
 * User: valizada
 * Date: 09/09/15
 * Time: 17:58
 */

require_once("Client.php");
require_once('Logging.php');

$client = new Client();
$client->setWebhook($argv[1], null);