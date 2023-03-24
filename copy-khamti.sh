#!/usr/bin/env bash

set -eu

KMSAMPLE1="C:\\src\\keymanapp\\android\\Samples\\KMSample1\\app\\src\\main\\assets\\"
KMSAMPLE2="C:\\src\\keymanapp\\android\\Samples\\KMSample2\\app\\src\\main\\assets\\"

cp ./release/sil/sil_khamti/build/sil_khamti.kmp "${KMSAMPLE1}sil_khamti.kmp"
echo "Copied to KMSample1"

cp ./release/sil/sil_khamti/build/sil_khamti.kmp "${KMSAMPLE2}sil_khamti.kmp"
echo "Copied to KMSample2"
