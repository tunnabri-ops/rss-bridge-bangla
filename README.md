# 🔗 RSS-Bridge Bangla

[![Bangla](https://img.shields.io/badge/UI-Bangla%20%2B%20English-orange)](#)

**Make RSS feeds for Bangla sites that publish none — follow YouTube channels, X accounts, subreddits and any page from your own feed reader.**

> বাংলা সংস্করণ নিচে আছে। / Bangla version below.

## ✨ Features

- `docker-compose.yml` — ready to run on port 8080, with the config mounted read-only and a persistent cache volume.
- `config.ini.php` — ready config: timezone `Asia/Dhaka`, all bridges enabled, file cache for 1 hour (3600 seconds) so sites are not hammered on every refresh, polite user agent (`RSS-Bridge-Bangla/1.0`).
- `bangla-bridges.md` — which bridge to use for which Bangla-site problem: `YoutubeBridge` (channel or search), `TwitterBridge` / `TwitterV2Bridge` (X accounts), `RedditBridge` (e.g. r/bangladesh), `CssSelectorBridge` (any site's HTML list), `FeedExpanderBridge` (full text for title-only feeds), `FeedMergeBridge` (combine feeds, e.g. Prothom Alo + BBC Bangla into one).
- `bangla-feeds.opml` — the same 5 verified Bangla news feeds (Prothom Alo, BBC Bangla, bdnews24 Bangla, The Daily Star, Channel i Online), one-click import into any reader.

## 🚀 How to use

```bash
# 1. Start the bridge server
docker compose up -d

# 2. Open http://localhost:8080 — pick a bridge, fill the form, copy the feed URL

# 3. Paste that feed URL into your reader (Miniflux / FreshRSS / any reader)
#    (see bangla-bridges.md for Bangla-site examples)
```

## ⚠️ Honest limits

- Some sites block bridges or change their pages — a bridge that works today can break tomorrow, and bridge names change between releases (check the list at `http://localhost:8080`).
- Check first whether a site already has RSS — many Bangla news sites do (e.g. Prothom Alo: `https://www.prothomalo.com/stories.rss`). If it does, no bridge is needed.
- `CssSelectorBridge` needs the right CSS selector for the site's HTML — a wrong selector gives an empty feed.
- Self-hosted: you need Docker, and feeds only update while the server runs.

## 🇧🇩 বাংলা

**RSS-Bridge বাংলা — যেসব সাইটে RSS নেই, তাদের ফিড বানান।**

- `docker compose up -d` — `http://localhost:8080`-এ চলে, ঢাকা টাইমজোন, ১ ঘণ্টার ক্যাশ।
- `bangla-bridges.md` — কোন সাইটের জন্য কোন bridge (ইউটিউব, X, Reddit, যেকোনো পাতা)।
- `bangla-feeds.opml` — ৫টা যাচাই করা বাংলা ফিড।
- কোনো সাইট bridge ব্লক করলে বা পাতা বদলালে ফিড বন্ধ হতে পারে — আগে দেখুন সাইটে আসলেই RSS নেই কি না।

## 📄 License

MIT — use it however you like; credit is appreciated.
