<?php
namespace Tests;
//namespace Digia\Lumen\GraphQL\Tests;
//use Illuminate\Foundation\Testing\TestCase as BaseTestCase;

abstract class TestCase extends \Laravel\Lumen\Testing\TestCase
{
    /**
     * Creates the application.
     *
     * @return \Laravel\Lumen\Application
     */
    public function createApplication()
    {
        return require __DIR__ . '/bootstrap.php';
    }
}
