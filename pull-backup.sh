#!/bin/sh

rsync -avz --exclude=".git" --exclude='.DS_Store' -e ssh p182917@p182917.mittwaldserver.info:/html/dev/Packages/ ./Backup/Packages/
rsync -avz --exclude=".git" --exclude='.DS_Store' -e ssh p182917@p182917.mittwaldserver.info:/html/dev/Data/Fixtures/ ./Backup/Data/Fixtures/