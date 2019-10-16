apt-get purge libpam-ldap ldap-auth-client ldap-auth-config libnss-ldap auth-client-config

apt-get autoremove

rm /etc/ldap.conf

apt-get install libpam-ldap ldap-auth-client ldap-auth-config libnss-ldap auth-client-config

cp ./ldap.conf /etc/ldap.conf

cp ./ldap.secret /etc/ldap.secret

cp ./nsswitch.conf /etc/nsswitch.conf


