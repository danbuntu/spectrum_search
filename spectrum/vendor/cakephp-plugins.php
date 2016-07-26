<?php
$baseDir = dirname(dirname(__FILE__));
return [
    'plugins' => [
        'Alaxos' => $baseDir . '/vendor/alaxos/cakephp3-libs/',
        'Alaxos/BootstrapTheme' => $baseDir . '/vendor/alaxos/cakephp3-bootstrap-theme/',
        'Bake' => $baseDir . '/vendor/cakephp/bake/',
        'Bootstrap' => $baseDir . '/vendor/elboletaire/twbs-cake-plugin/',
        'BootstrapUI' => $baseDir . '/vendor/friendsofcake/bootstrap-ui/',
        'DebugKit' => $baseDir . '/vendor/cakephp/debug_kit/',
        'Less' => $baseDir . '/vendor/elboletaire/less-cake-plugin/',
        'Migrations' => $baseDir . '/vendor/cakephp/migrations/'
    ]
];