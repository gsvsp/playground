ECHO := echo "\n>>>"
WEB_APP_PORT := 8000
WEB_APP_NAME := seek-and-annoy

.PHONY: all
all: kill build run-dev

.PHONY: build
build:
	@${ECHO} "Build Docker image"
	@DOCKER_SCAN_SUGGEST=false docker build -t $(WEB_APP_NAME) .

.PHONY: run-dev
run-dev:
	@${ECHO} "Run Docker image in foreground for development"
	@docker run --rm \
	  -v `pwd`/src:/var/www/html \
	  -p $(WEB_APP_PORT):80 \
	  --name $(WEB_APP_NAME) \
	  $(WEB_APP_NAME)

.PHONY: rund
rund:
	@${ECHO} "Run Docker image in background"
	@docker run -d --rm -p $(WEB_APP_PORT):80 --name $(WEB_APP_NAME) $(WEB_APP_NAME)

.PHONY: kill
kill:
	@${ECHO} "Stop Docker container if running"
	@docker kill $(WEB_APP_NAME) &>/dev/null | true