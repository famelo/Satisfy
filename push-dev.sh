#!/bin/sh

rsync -avz --delete --exclude=".git" --exclude='.DS_Store' --exclude='Backup' --exclude='*.sh' ./Packages/ -e ssh p182917@p182917.mittwaldserver.info:/html/dev/Packages/