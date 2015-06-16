#!bin/sh

for i in $(echo "127.0.0.1"|tr "," "\n"); do echo -e "5050\n8080\n8081\n8112\n32400" | xargs -i nc -w 1 -zvn $i {}; done
