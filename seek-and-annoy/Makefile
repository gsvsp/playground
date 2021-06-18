ECHO := echo "\n>>>"
DOCKER_COMPOSE := DOCKER_SCAN_SUGGEST=false docker compose

.PHONY: all
all: build run

.PHONY: build
build:
	@${ECHO} "Build Docker images"
	@${DOCKER_COMPOSE} build

.PHONY: run
run:
	@${ECHO} "Run Docker images (in foreground)"
	@${DOCKER_COMPOSE} up

.PHONY: rund
rund:
	@${ECHO} "Run Docker images (in background)"
	@${DOCKER_COMPOSE} up -d

.PHONY: kill
kill:
	@${ECHO} "Stop running Docker containers"
	@${DOCKER_COMPOSE} down