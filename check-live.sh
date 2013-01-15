#!/bin/sh

rsync -avz --dry-run --exclude=".git" ./Packages/ -e ssh p182917@p182917.mittwaldserver.info:/html/flow3/Packages/
rsync -avz --dry-run --exclude=".git" ./Data/Fixtures/ -e ssh p182917@p182917.mittwaldserver.info:/html/flow3/Data/Fixtures/