#! /bin/bash
x=0
echo "<td><select multiple>"
while read p; do
	echo "  <option value=\"${x}\">${p}</option>"
	let x++
done 
echo "</select></td>"
