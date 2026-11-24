# RSS-Bridge Bangla — যেসব সাইটে RSS নেই, তাদের ফিড বানান

Bangla-ready RSS-Bridge setup, built on **RSS-Bridge/rss-bridge**.

- **Original repo:** https://github.com/RSS-Bridge/rss-bridge (the RSS feed for websites missing it — creates RSS/Atom feeds for sites that don't publish one, so any feed reader can follow them)

## কী আছে / What is inside

- `docker-compose.yml` — RSS-Bridge (official image), ready to run on port 8080.
- `config.ini.php` — ready config: Dhaka timezone, file cache, 1-hour cache, feeds enabled.
- `bangla-bridges.md` — which bridges to use for Bangla sites that publish no RSS, with the exact bridge names and example URLs.

## যা ঠিক করা হয়েছে / What was fixed

- Upstream's README shows how to run the server but not which bridges solve a real problem. This repo answers the actual question: "my favourite Bangla site has no RSS — what do I use?" — with named bridges and examples.
- The config sets `timezone = "Asia/Dhaka"` and a 3600-second cache, so feed times are correct for Bangladesh and sites are not hammered on every refresh.
- The compose file pins the official `rssbridge/rss-bridge` image and a persistent cache volume, instead of the fragile manual PHP install in the upstream docs.

## ব্যবহার / How to use

```bash
# 1. Start RSS-Bridge
docker compose up -d

# 2. Open http://localhost:8080 — pick a bridge, fill the form, copy the feed URL

# 3. Paste that feed URL into Miniflux / FreshRSS / your reader
#    (see bangla-bridges.md for Bangla-site examples)
```

Self-hosted, no account, no key.
