start-server:
	docker run -it -p 8080:80 \
		-v $(shell pwd):/var/www/project \
		-v $(shell pwd)/config/nginx.conf:/etc/nginx/nginx.conf \
		m1nor/php-nginx
