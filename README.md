# The Kagerou Landing Page

| [Public Instance](https://kagerou.dev/)  |
|------------------------------------------|

## Development

```
$ git clone https://github.com/elderguardian/kagerou.git
$ cd kagerou && ./dev
```

## Host using Docker

#### **`docker-compose.yml`**
```
services:
  kagerou:
    ports:
      - "9001:80"
    image: ghcr.io/elderguardian/kagerou:latest
```

This will fire up the latest version on port `9001`.
However, If you want to use a specific version,
their image can be conveniently accessed from the project's releases page.
Older releases might not have an available image.
