<?php

namespace WyriHaximus\SliFly;

use Pimple\Container;
use Pimple\ServiceProviderInterface;
use WyriHaximus\Pimple\FlysystemServiceProviderTrait;

class FlysystemServiceProvider implements ServiceProviderInterface
{
    use FlysystemServiceProviderTrait;

    /**
     * Register this service provider with the Application.
     *
     * @param Container $app Application.
     *
     * @return void
     */
    public function register(Container $app)
    {
        $this->registerFlysystems($app);
    }
}
