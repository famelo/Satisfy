#!/bin/sh

rsync -avz --delete --exclude=".git" --exclude='.DS_Store' --exclude='Backup' --exclude='*.sh' ./Packages/ -e ssh p193128@p193128.mittwaldserver.info:/html/flow3/Packages/