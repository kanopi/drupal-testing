<?php

namespace Drupal\test_sample_suite;

class TestService
{

    public function testThis()
    {
        $sample = \Drupal::service('cache.default');
    }
}