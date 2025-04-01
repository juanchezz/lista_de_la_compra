FROM ubuntu:latest
LABEL authors="sanch"

ENTRYPOINT ["top", "-b"]