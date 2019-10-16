apt-get purge slapd ldap-utils odbcinst unixodbc odbcinst1debian1 

apt-get autoremove

rm -R /var/lib/ldap

rm -R /etc/ldap

apt-get install slapd ldap-utils

ldapadd -Y EXTERNAL -H ldapi:/// -f /etc/ldap/schema/cosine.ldif

ldapadd -Y EXTERNAL -H ldapi:/// -f /etc/ldap/schema/nis.ldif

ldapadd -Y EXTERNAL -H ldapi:/// -f /etc/ldap/schema/inetorgperson.ldif

ldapadd -Y EXTERNAL -H ldapi:/// -f base.ldif

ldapadd -x -D cn=admin,dc=aula209,dc=ieszv,dc=es -W -f raiz.ldif

apt-get install openssl gnutls-bin

certtool --generate-privkey > /etc/ssl/private/ieszv-ca.key

certtool --generate-self-signed --load-privkey /etc/ssl/private/ieszv-ca.key --template ./ieszv-ca.info --outfile /etc/ssl/certs/ieszv-ca.cert

certtool --generate-privkey > /etc/ssl/private/ldap.key

certtool --generate-certificate --load-privkey /etc/ssl/private/ldap.key --load-ca-certificate /etc/ssl/certs/ieszv-ca.cert --load-ca-privkey /etc/ssl/private/ieszv-ca.key --template ./ldap.info --outfile /etc/ssl/certs/ldap.cert

adduser openldap ssl-cert

chgrp ssl-cert /etc/ssl/certs/ieszv-ca.cert 

chgrp ssl-cert /etc/ssl/certs/ldap.cert 

chgrp ssl-cert /etc/ssl/private/ldap.key

ldapmodify -Y EXTERNAL -H ldapi:/// -f ssl.ldif -v

cp ./slapd /etc/default/slapd

/etc/init.d/slapd restart

