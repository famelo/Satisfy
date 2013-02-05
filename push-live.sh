#!/bin/sh

rsync -avz --delete --exclude=".git" --exclude='.DS_Store' ./Packages/ -e ssh p182917@p182917.mittwaldserver.info:/html/flow3/Packages/
rsync -avz --delete --exclude=".git" --exclude='.DS_Store' ./Data/Fixtures/ -e ssh p182917@p182917.mittwaldserver.info:/html/flow3/Data/Fixtures/