for update in *.sql;
do
	sed 's/UPDATE/DELETE FROM/Ig' $update | grep -v set > ../Delete/${update/UPDATE/DELELE}
done
