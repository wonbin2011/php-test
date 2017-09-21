# php-test

# nginx config

server {
    listen      80;
    server_name wonbin.xin;
    root        /home/www/test/public;
    index       index.php index.html index.htm;
    charset     utf-8;
    location / {
            try_files $uri $uri/ /index.php?_url=$uri&$args;
    }
    location ~ \.php {
            fastcgi_pass  localhost:9000;
            fastcgi_index /index.php;
            include fastcgi_params;
            fastcgi_split_path_info       ^(.+\.php)(/.+)$;
            fastcgi_param PATH_INFO       $fastcgi_path_info;
            fastcgi_param PATH_TRANSLATED $document_root$fastcgi_path_info;
            fastcgi_param SCRIPT_FILENAME $document_root$fastcgi_script_name;
    }
    location ~ /\.ht {
            deny all;
    }
}
