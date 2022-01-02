#How to do development workspace
- Install Laravel uses Sail
```
curl -s "https://laravel.build/example-app" | bash
```
- Add Volumes in your docker-compose file, where ```./../packages``` path to your packages folder
```
volumes:
    ...
    - './../packages:/var/www/html/packages'
```
- Start containers

```
./vendor/bin/sail up
```
or, if you added a bash alias on your system 
```alias sail='[ -f sail ] && bash sail || bash vendor/bin/sail'```
use simple notation:
```
sail up
```

- Add requires to your Laravel composer.json
```
"repositories": [
        {
            "type": "path",
            "url": "packages/<path_to_your_package>"
        }
    ],
```

```
sail composer require <your_package_name>
```

###Enjoy!