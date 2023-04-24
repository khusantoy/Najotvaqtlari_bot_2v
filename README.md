<p align="center">
    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon" viewBox="0 0 16 16">
      <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"/>
    </svg>
</p>

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

Qo'llab-quvvatlash:

<a href="https://www.buymeacoffee.com/khusanboy" target="_blank"><img src="https://cdn.buymeacoffee.com/buttons/default-orange.png" alt="Buy Me A Coffee" height="41" width="174"></a>
