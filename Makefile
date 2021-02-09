SHELL := /bin/bash
PHONY :=
COMMAND = openapi-generator-cli

default: all

PHONY += download-schema
download-schema:
	@curl https://hauki-test.oc.hel.ninja/openapi/ > hauki.json

PHONY += build-client
build-client:
	@$(COMMAND) generate -c config.json -i hauki.json -g php -o . --skip-validate-spec \
		--git-host=github.com --git-repo-id=php-hauki-client --git-user-id="City-of-Helsinki" \
		--global-property apiTests=false

PHONY += all
all: download-schema build-client

.PHONY: $(PHONY)
