# Bangla bridges — কোন সাইটের জন্য কোন bridge

RSS-Bridge has 400+ bridges. These are the ones that solve real Bangla-site problems
(all bridge names are the real names in RSS-Bridge; check the bridge list at
`http://localhost:8080` — names change between releases).

## সাইটে RSS নেই — ফিড বানান

| সাইটের সমস্যা | Bridge | উদাহরণ |
|---|---|---|
| YouTube চ্যানেল (বাংলা চ্যানেল ফলো করা) | `YoutubeBridge` | চ্যানেল URL দিলেই ফিড |
| YouTube সার্চ (যেমন "বাংলা নাটক") | `YoutubeBridge` (Search by query) | সার্চ শব্দ দিলেই ফিড |
| X / Twitter অ্যাকাউন্ট | `TwitterBridge` / `TwitterV2Bridge` | ব্যবহারকারীর নাম দিন |
| Reddit সাবরেডিট (যেমন r/bangladesh) | `RedditBridge` | সাবরেডিটের নাম দিন |
| যেকোনো সাইটের HTML তালিকা | `CssSelectorBridge` | সাইটের URL + CSS selector দিন |
| যেকোনো সাইটের ছবি/মিডিয়া | `FeedExpanderBridge` | অন্য ফিডের আইটেম সম্পূর্ণ করে |

## সাইটে RSS আছে কিন্তু অসম্পূর্ণ — সম্পূর্ণ করুন

- `FeedExpanderBridge` — ফিডের প্রতিটি আইটেমের পুরো লেখা টেনে আনে (যেসব ফিড শুধু শিরোনাম দেয়)।
- `FeedMergeBridge` — একাধিক ফিড এক করে (যেমন প্রথম আলো + বিবিসি বাংলা এক ফিডে)।

## টিপস

- প্রথমে দেখুন সাইটে আসলেই RSS নেই কি না — অনেক বাংলা সংবাদ সাইটে RSS আছে
  (যেমন প্রথম আলো: `https://www.prothomalo.com/stories.rss`)। থাকলে bridge লাগবে না।
- `CssSelectorBridge` ব্যবহারের আগে সাইটের HTML দেখে নিন — selector ভুল হলে ফিড খালি আসবে।
- Bridge-এর ফিড URL আপনার রিডারে (Miniflux / FreshRSS) যোগ করুন — সরাসরি ব্রাউজারে নয়।
