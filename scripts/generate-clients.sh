#!/bin/bash

prg=$0
if [ ! -e "$prg" ]; then
  case $prg in
    (*/*) exit 1;;
    (*) prg=$(command -v -- "$prg") || exit;;
  esac
fi
dir=$(
  cd -P -- "$(dirname -- "$prg")" && pwd -P
) || exit
prg=$dir/$(basename -- "$prg") || exit

dr=$(dirname "$prg")

rm -rf $dr/../generated/client/vps
rm -rf $dr/../generated/client/auth
mkdir -p $dr/../generated/client/vps
mkdir -p $dr/../generated/client/auth

docker run \
 --rm \
  -v $dr/../openapi/vps:/source \
  -v $dr/../generated/client/vps:/local \
  --user $(id -u):$(id -g) \
  openapitools/openapi-generator-cli generate -g php -i /source/openapi.yaml \
  --additional-properties=packageName=begetvps \
  --additional-properties=invokerPackage=Generated\\Client\\Vps \
  -o /local \

docker run \
 --rm \
  -v $dr/../openapi/auth:/source \
  -v $dr/../generated/client/auth:/local \
  --user $(id -u):$(id -g) \
  openapitools/openapi-generator-cli generate -g php -i /source/openapi.yaml \
  --additional-properties=packageName=begetauth \
  --additional-properties=invokerPackage=Generated\\Client\\Auth \
  -o /local \
