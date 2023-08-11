# The Kagerou Landing Page
The landing page of a dedicated space for hosting instances of awesome open-source projects.

## Host using Docker

#### **`docker-compose.yml`**
```
services:
  kagerou:
    ports:
      - "9001:8090"
    image: ghcr.io/kagerou-dev/kagrou:latest
```

This will fire up the latest version on port `9001`.
However, If you want to use a specific version,
their image can be conveniently accessed from the project's releases page.
Older releases might not have an available image.