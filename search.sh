#!/bin/bash
# Generate a list of .kmp files that contain "welcome.htm"

find . -type f -iname "*.kmp" -print0 | while IFS= read -r -d $'\0' kmp; do
  RESULT=$(7z.exe l "$kmp" welcome.htm -r | grep 'welcome.htm')
  if [ ! -z "$RESULT" ]; then
    echo $kmp
  fi	
done
