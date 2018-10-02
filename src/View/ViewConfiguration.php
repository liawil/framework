<?php

namespace Bow\View;

use Bow\Configuration\Loader;
use Bow\Configuration\Configuration;

class ViewConfiguration extends Configuration
{
    /**
     * Create a Configuration
     *
     * @param Loader $config
     * @return void
     * @throws
     */
    public function create(Loader $config)
    {
        /**
         * Configuration de translator
         */
        $this->container->bind('view', function () use ($config) {
            View::configure($config);

            return View::getInstance();
        });
    }

    /**
     * Run configuration
     *
     * @return void
     * @throws
     */
    public function run()
    {
        $this->container->make('view');
    }
}