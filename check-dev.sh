#!/bin/sh

rsync -avz --dry-run --exclude=".git" --exclude='.DS_Store' ./Packages/ -e ssh p182917@p182917.mittwaldserver.info:/html/dev/Packages/
rsync -avz --dry-run --exclude=".git" --exclude='.DS_Store' ./Data/Fixtures/ -e ssh p182917@p182917.mittwaldserver.info:/html/dev/Data/Fixtures/