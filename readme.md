# LINE API Message - PHP Integration

This repository provides a PHP project to send messages to LINE and handle webhooks. It’s ideal for LINE Bot development, Contact Form 7 integration, and more.

## 📂 Files Overview

| File Name                   | Description                                                      |
| --------------------------- | ---------------------------------------------------------------- |
| `cf7_line_push_handler.php` | Handles pushing Contact Form 7 form submissions to LINE API      |
| `mail.php`                  | A simple PHP mail sender example                                 |
| `webhook.php`               | Processes incoming webhook events from LINE (e.g., auto-replies) |

---

## ✅ How to Use

### 1️⃣ Set Up LINE Official Account

- Login to [LINE Developers](https://developers.line.biz/).
- Create a new Messaging API Channel.
- Get the following:
  - **Channel Access Token**
  - **Channel Secret**

Add these into your PHP code, for example:

```php
$channelToken = 'YOUR_CHANNEL_ACCESS_TOKEN';
```
