#!/bin/bash

set -e

./vendor/bin/dload get --force --silent

./bin/rr serve -c .rr.yaml
