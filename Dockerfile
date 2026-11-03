FROM wordpress:latest
RUN apt update && apt upgrade -y
RUN apt install git -y && apt install curl -y && apt install links -y
WORKDIR /var/www/html/wp-content/themes/
RUN git clone https://github.com/bcel15/wordpress-theme.git --depth 1
WORKDIR /var/www/html/