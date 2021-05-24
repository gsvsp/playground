WEB_APP_PORT := 8000
WEB_APP_NAME := seek-and-annoy

.PHONY: all
all: kill build run

.PHONY: build
build:
	docker build -t $(WEB_APP_NAME) .

.PHONY: run
run:
	docker run --rm -p $(WEB_APP_PORT):80 --name $(WEB_APP_NAME) $(WEB_APP_NAME)

.PHONY: rund
rund:
	docker run -d --rm -p $(WEB_APP_PORT):80 --name $(WEB_APP_NAME) $(WEB_APP_NAME)

.PHONY: kill
kill:
	docker kill $(WEB_APP_NAME) | true