<?php
namespace MatsuP8\BEAR_Tutorial\Module;

use BEAR\Package\AbstractAppModule;
use BEAR\Package\PackageModule;
use josegonzalez\Dotenv\Loader;

class AppModule extends AbstractAppModule
{
    /**
     * {@inheritdoc}
     */
    protected function configure() : void
    {
        $env = dirname(__DIR__) . '/.env';
        if (file_exists($env)) {
            (new Loader($env))->parse()->putenv(true);
        }
        $this->install(new PackageModule);
    }
}
