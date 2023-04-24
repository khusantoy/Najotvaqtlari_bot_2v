## Najot vaqtlari bot nima?

- Najot vaqtlari bot - Namoz vaqtlarini ko'rsatuvchi telegram bot

## Imkoniyatlari:

- Admin boshqaruv tizimi
- Foydalanuvchilar statistikasi
- Vaqtlarni aniqligi uchun qo'lda sozlash
- Bir vaqtda foydalanuvchilarga xabar yuborish
- Har bir joylashuv uchun sozlash
- Foydalanish uchun qulay va sodda

---

## Qanday foydalaniladi

Birinchi loyiha fayllarini https://github.com/khusanboytursunov/Najotvaqtlari_bot_2v.git dan yuklab oling, keyin

```bash
$ composer update
```

.env fayl yaratib, ma'lumotlar ombori va bot tekenni sozlang

```bash
# database
SERVER=localhost
DB_USER=
DB_PASSWORD=
DATABASE=najotvaqtlari

# bot token
BOT_TOKEN=

```

Bot va serveringiz orasidagi aloqani ta'minlang

```bash
$ https://api.telegram.org/bot(BOT_TOKEN)/setWebhook?url=https://yoursite.com/your_update.php
```
⚠️ Muammo va kamchiliklarni aniqlasangiz https://github.com/khusanboytursunov/Najotvaqtlari_bot_2v/issues/new ga yozing.

---

Qo'llab-quvvatlash:

<a href="https://www.buymeacoffee.com/khusanboy" target="_blank"><img src="https://cdn.buymeacoffee.com/buttons/default-orange.png" alt="Buy Me A Coffee" height="41" width="174"></a>
