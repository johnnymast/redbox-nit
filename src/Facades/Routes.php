<?php

/**
 * Routes.php
 *
 * The main purpose of this service provider is to make sure Laravel
 * knows where our publishable resources are in our package.
 *
 * PHP version 7.2
 *
 * @category Facades
 * @package  RedboxNit
 * @author   Johnny Mast <mastjohnny@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/johnnymast/redbox-nit
 * @since    GIT:1.0
 */

namespace Redbox\Nit\Facades;

use Illuminate\Support\Facades\Facade;

/**
 * Class Routes
 *
 * @category Facades
 * @package  RedboxNit
 * @author   Johnny Mast <mastjohnny@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/johnnymast/redbox-tracker
 * @since    GIT:1.0
 */
class Routes extends Facade
{
    /**
     * Define the alias for this Tracker Facade.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'redbox-nit-routes';
    }
}