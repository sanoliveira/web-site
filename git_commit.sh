#!/bin/bash
git add .
git ls-files --others --exclude-from=.git/info/exclude
TIME=`date`
git commit -am "last updates done at $TIME"
git push
