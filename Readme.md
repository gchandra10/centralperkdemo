## Build docker file

docker build . -t gchandra10/centralperkdemo


## Run Docker

docker run -d -p 8090:80 --name mycpsite gchandra10/centralperkdemo

## How to open website

http://localhost:8090

