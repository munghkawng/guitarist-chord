# Myanmar Song Lyric With Guitar Chord showing Web App

## Usage

- git clone https://github.com/munghkawng/guitarist-chord.git
- cd guitarist-chord
- composer install
- cp .env.example .env 
- php artisan key:generate
- php artisan cache:clear && php artisan config:clear 
- php artisan serve 


## Database Setup

- DB_CONNECTION=mysql
- DB_HOST=127.0.0.1
- DB_PORT=3306
- DB_DATABASE=guitaristchord
- DB_USERNAME=root
- DB_PASSWORD=



```html
php artisan migrate
```

