<?php

namespace Tests;

use Illuminate\Foundation\Testing\TestCase as BaseTestCase;
use Osmianski\FastRefreshDatabase\FastRefreshDatabase;

abstract class TestCase extends BaseTestCase
{
    use FastRefreshDatabase;
}
