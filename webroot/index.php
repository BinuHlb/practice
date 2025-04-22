<?php
/**
 * CakePHP Front Controller
 */

// For built-in server
if (PHP_SAPI === 'cli-server') {
    $_SERVER['PHP_SELF'] = '/' . basename(__FILE__);

    $url = parse_url(urldecode($_SERVER['REQUEST_URI']));
    $file = __DIR__ . $url['path'];
    if (strpos($url['path'], '..') === false && strpos($url['path'], '.') !== false && is_file($file)) {
        return false;
    }
}

/**
 * Define paths
 * Adjust according to where your `src`, `config`, and `vendor` folders are.
 */
$root = dirname(__DIR__);
require $root . '/vendor/autoload.php';

use App\Application;
use Cake\Http\Server;

// Create server instance with correct config path
$server = new Server(new Application($root . '/config'));

// Run and emit response
$server->emit($server->run());
