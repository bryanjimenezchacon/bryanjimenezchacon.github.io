# /bin/bash

for datafile in TXT/*.txt
do
	table=${datafile/.txt/}
	table=${table/TXT\//}
	SH/Insert${table}.sh < $datafile > Insert${table}.sql
done
