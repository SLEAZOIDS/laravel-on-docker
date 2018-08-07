#!/bin/sh

shopt -s dotglob
cd `dirname $0`
cp -r ./* ../laradock/
rm ../laradock/init.sh
