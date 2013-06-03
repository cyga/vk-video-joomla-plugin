#!/bin/bash
d=`date '+%Y%m%d-%H%M%S'`
dir="tmp-$d"
version=`cat version.txt`

trap 'rm -rf "$dir"; exit $?' 0 1 2 13 15

mkdir "$dir"
cp index.html vkvideoplugin.php vkvideoplugin.xml "$dir/"
cd "$dir"
zip="vkvideoplugin-V$version-Compat-3.0.zip"
zip "$zip" * 2>&1 >/dev/null
mv "$zip" ../versions/
cd ..

echo "new version: $zip"
