# Example Testing Repo

## PHP Unit Testing

The following repo has PHP unit tests

### Standard PHP Unit

The following runs standard PHPUnit tests.

The configuration file to use as an example would be the `phpunit.xml.dist`.

#### Composer

There are some shortcut commands that can be ran through composer that will allow for the tests to be easier. 

```bash
composer -n unit-test
```

### Drupal Test Traits

Works with an existing site base. The great thing about this is it can continue to run as the site evolves.

The configuration file to use as an example would be the `dtt.phpunit.xml`.

Supplemental Links:
* https://gitlab.com/weitzman/drupal-test-traits
* https://medium.com/massgovdigital/introducing-drupal-test-traits-9fe09e84384c

#### Composer

There are some shortcut commands that can be ran through composer that will allow for the tests to be easier. 

```bash
composer -n dtt-unit-test
```

## Running Tests

The following repo is used as an example of how to run PHPUnit tests within a Drupal Environment. The following module under `web/modules/custom/test_sample_suite/` has been included as an example.

At the moment I have not found a way to run unit tests not within the standard Drupal directory.
