## Build

`docker build -t apacher .`

## Run

`docker run -p 8080:80 -d apacher`

## Debug

```
docker exec -i -t -p 8080:80 apacher /bin/bash
apachectl start
```

