#!/usr/bin/env bash

echo >> /etc/mysql/my.cnf
echo "[mysqld]" >> /etc/mysql/my.cnf
echo "bind-address=0.0.0.0" >> /etc/mysql/my.cnf

mysql_install_db --datadir=/var/lib/mysql

mysqld_safe &
mysql_pid=$!

until mysqladmin ping >/dev/null 2>&1; do
  echo -n "."; sleep 0.2
done

mysql -u root -e "CREATE DATABASE $DB_NAME;
    ALTER USER 'root'@'localhost' IDENTIFIED BY '$DB_ROOT_PASS';
    GRANT ALL ON $DB_NAME.* TO '$DB_USER'@'%' IDENTIFIED BY '$DB_PASS';
    FLUSH PRIVILEGES;"

wait $mysql_pid