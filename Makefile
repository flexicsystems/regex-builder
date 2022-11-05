.PHONY: coding-standards
coding-standards: vendor ## Normalizes composer.json with ergebnis/composer-normalize and fixes code style issues with friendsofphp/php-cs-fixer
	mkdir -p .build/php-cs-fixer
	vendor/bin/php-cs-fixer fix --config=.php-cs-fixer.php --diff --verbose --ansi

.PHONY: static-code-analysis
static-code-analysis: vendor ## Runs a static code analysis with phpstan/phpstan
	mkdir -p .build/phpstan
	vendor/bin/phpstan analyse --configuration=phpstan.neon --memory-limit=-1

.PHONY: static-code-analysis-baseline
static-code-analysis-baseline: vendor ## Generates a baseline for static code analysis with phpstan/phpstan
	mkdir -p .build/phpstan
	vendor/bin/phpstan analyse --configuration=phpstan.neon --generate-baseline=phpstan-baseline.neon --memory-limit=-1


.PHONY: test
test: composer.json composer.lock
	vendor/bin/phpunit --configuration=phpunit.xml

.PHONY: code-coverage
code-coverage: composer.json composer.lock
	vendor/bin/phpunit --configuration=phpunit.xml --coverage-html .build
	open .build/index.html -a "google chrome"

# ------------------------------------------------------------------------------
.PHONY: help
help: ## Displays this list of targets with descriptions
	@grep -E '^[a-zA-Z0-9_-]+:.*?## .*$$' $(MAKEFILE_LIST) | sort | awk 'BEGIN {FS = ":.*?## "}; {printf "\033[32m%-30s\033[0m %s\n", $$1, $$2}'

vendor: composer.json composer.lock
	composer validate
	composer install -vvv
