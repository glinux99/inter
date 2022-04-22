Options +FollowSymlinks
RewriteEngine On  
RewriteBase /
RewriteCond %{HTTP_HOST} ^nanovers.com$
RewriteRule ^(.*) http://www.nanovers.com/$1 [QSA,L,R=301]
# RewriteCond %{SERVER_PORT} 80
# RewriteRule ^(.*)$ https://www.nanovers.com/$1 [R,L]
# RewriteCond %{REQUEST_URI} !^/i_humours
# RewriteRule ^(.*)$ /i_humours/
RewriteRule ^i_humours/(.*)-([a-z]+) /i_humours/$1?sms=$2
RewriteCond %{THE_REQUEST} ^(.+)\.php([#?][^\ ]*)?\ HTTP/
RewriteCond %{HTTPS} !on
RewriteRule ^(.+)\.php$ $1/ [R=301]
RewriteCond %{REQUEST_FILENAME} !-d
RewriteCond %{REQUEST_FILENAME}\.php -f 
RewriteRule ^(.*)/?$ $1.php
# RewriteRule ^(.*)\/amour$ ^$1 [R=301]

