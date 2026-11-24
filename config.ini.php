; RSS-Bridge config — Bangla-ready defaults
; Mount as /app/config.ini.php (see docker-compose.yml)
[system]
timezone = "Asia/Dhaka"
enabled_bridges[] = "*"

[cache]
type = "FileCache"
; Cache feeds for 1 hour so sites are not hammered on every refresh
custom_timeout = 3600

[http]
; Identify politely so sites do not block the bridge
user_agent = "RSS-Bridge-Bangla/1.0 (+https://github.com/tunnabri-ops/rss-bridge-bangla)"

[proxy]
; Leave empty unless you need a proxy
; url = ""
; by_bridge = false
