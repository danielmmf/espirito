echo  "digite o primeiro nome"
read name

cat /etc/passwd | grep $name

if [ $? -eq 0 ] ; then
	ps -o pid= -u $name | xargs sudo kill -9.
else
	echo "$name nao foi encontrado"
fi
echo