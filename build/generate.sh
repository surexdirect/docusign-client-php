#!/bin/bash
# This script should be run from repo root

wget https://raw.githubusercontent.com/docusign/eSign-OpenAPI-Specification/master/esignature.rest.swagger.json
# Generate code
./vendor/bin/jane-openapi generate
# Make minor adjustments to generated code
php-cs-fixer fix --config=.php_cs.dist -v src/Surex/DocuSign/Generated
