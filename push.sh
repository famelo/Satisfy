#!/bin/sh

rsync -avz --exclude=".git" --exclude='.DS_Store' ./Packages/ -e ssh ssh-350350-famelo@famelo.firma.cc:/kunden/350350_33330/adu/Packages