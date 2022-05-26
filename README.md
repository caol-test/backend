## About this test
- There was an error on the DB dump file. A trailing comma where a semicolon was supposed to be.

## How to run
- This repository includes a working Docker setup.
- First, create a required Docker network by running `docker network create caol-network`
- If running on localhost, edit the `docker-compose` file and expose internal port 8000 by adding the following to the `caol-api` container section:
  ```bash
  ports:
    - 8083:8000
  ```
- Run `docker-compose up -d` and you should be good to go.
- Navigate to `http://localhost:8083`.
