<?php

/**
 * NitServiceProvider.php
 *
 * The main purpose of this service provider is to make sure Laravel
 * knows where our publishable resources are in our package.
 *
 * PHP version 7.2
 *
 * @category Providers
 * @package  RedboxNit
 * @author   Johnny Mast <mastjohnny@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/johnnymast/redbox-nit
 * @since    GIT:1.0
 */

namespace Redbox\Nit\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class TrackerServiceProvider
 *
 * @category Providers
 * @package  RedboxNit
 * @author   Johnny Mast <mastjohnny@gmail.com>
 * @license  https://opensource.org/licenses/MIT MIT
 * @link     https://github.com/johnnymast/redbox-tracker
 * @since    GIT:1.0
 */
class NitServiceProvider extends ServiceProvider 
{
   /**
     * Register configurations and facade(s).
     *
     * @return void
     */
    public function register(): void
    {
      $this->app->alias(Tracker::class, 'redbox-tracker-tracker');
    }

    /**
     * Tell Laravel where to look for the package it's migrations.
     *
     * @return void
     */
    public function boot(): void
    {

    }ø
}