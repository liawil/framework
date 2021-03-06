<?php

namespace Bow\View;

use Bow\Configuration\Configuration;
use Bow\Configuration\Loader;

class ViewConfiguration extends Configuration
{
    /**
     * @inheritdoc
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
     * @inheritdoc
     */
    public function run()
    {
        $this->container->make('view');
    }
}
