#!/usr/bin/env bash
set -euo pipefail

# Render (and similar) set PORT; local Docker defaults to 80.
LISTEN_PORT="${PORT:-80}"

sed -i "s/^Listen 80\$/Listen ${LISTEN_PORT}/" /etc/apache2/ports.conf
sed -i "s/^Listen \[::\]:80\$/Listen [::]:${LISTEN_PORT}/" /etc/apache2/ports.conf 2>/dev/null || true

sed -i "s/<VirtualHost \*:80>/<VirtualHost *:${LISTEN_PORT}>/" /etc/apache2/sites-enabled/000-default.conf

exec "$@"
