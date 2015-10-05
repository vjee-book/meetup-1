### Install dependencies
`composer install`

### Generate docs
`./vendor/bin/phpdoc -d src -t tmp/docs/core/`

### Run tests
`./vendor/bin/phpunit -c tests/phpunit.xml tests/Core`
