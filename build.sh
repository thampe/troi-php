#!/bin/sh

sudo openapi-generator-cli generate -i ./v2.troi.openapi-definition.json -g php -o . --additional-properties="invokerPackage=Troi,licenseName=MIT,composerPackageName=thampe/troi-sdk,developerOrganization=Thomas\ Hampe"