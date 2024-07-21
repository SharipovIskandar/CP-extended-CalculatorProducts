# CP-extended-CalculatorProducts

##DIQQAT BILAN OQISHI TAVSIYA ETILADI!

## Loyihaning maqsadi

Bu loyiha mahsulotlar jadvalini boshqarish va yangilash uchun mo'ljallangan. Loyihada mahsulotlar jadvalidagi ustunlar (column) nomlarini ko'rsatish, o'zgartirish va yangilash imkoniyatlari mavjud.

## Asosiy xususiyatlar

- **Mahsulotlar jadvalini ko'rsatish**: `products` jadvalidagi ustunlar haqida ma'lumotlarni ko'rsatadi.
- **Ustun nomlarini yangilash**: Ustun nomlarini yangilash va o'zgartirish imkoniyatini beradi.
- **Xatolik va muvaffaqiyat xabarlarini ko'rsatish**: Ustun nomlari muvaffaqiyatli yangilanganda yoki xatolik yuz berganda xabarlar beradi.

## Texnologiyalar va asboblar

- **PHP**: Backend dasturlash uchun.
- **MySQL**: Ma'lumotlar bazasi uchun.
- **Bootstrap**: Sahifalarni zamonaviy va responsiv qilish uchun.
- **PDO**: Ma'lumotlar bazasi bilan xavfsiz aloqalar o'rnatish uchun.

## Ishlatish

1. **Ma'lumotlar bazasini sozlash**:
   - `cp` nomli ma'lumotlar bazasini yaratishingiz kerak.
   - `products` jadvalini yaratishingiz va kerakli ustunlarni qo'shishingiz kerak.

2. **Konfiguratsiya**:
   - `edit.php` faylida ma'lumotlar bazasi ulanish ma'lumotlarini (`$dsn`, `$db_user`, `$db_password`) o'zgartiring.

3. **Kodni ishga tushirish**:
   - Web server (masalan, Apache yoki Nginx) orqali loyihani ishga tushiring.
   - `index.php` fayliga o'ting va mahsulotlar jadvalini ko'ring.
   - `edit.php` orqali ustun nomlarini yangilang.

4. **Xatolik va muvaffaqiyat xabarlarini tekshiring**:
   - Ustun nomlarini muvaffaqiyatli yangilash yoki xatolik yuzaga kelganida xabarlar avtomatik ravishda ko'rsatiladi.

## Qo'shimcha ma'lumot

- Loyihada `PDO` yordamida ma'lumotlar bazasi bilan ishlash xavfsizligini ta'minlaydi.
- `Bootstrap` yordamida sahifalar yaxshi ko'rinishga ega va mobil qurilmalarda ham yaxshi ishlaydi.

## Kod Logikasi boyicha devoloper fikri
- Bu kodda Sign up va Sign in bolgani uchun alohidadan sessiyalar bilan ishlamoqchi edim udallay olmadim, muamo shundaki qaysi user kirishidan qat'iy nazar userlar kiritgam malumotlar bitta databseda saqlanadi

## Qo'shimcha hujjatlar

Projoect notion yordamida To-Doga asoslanib [bajarildi](https://www.notion.so/New-Website-94e684de4cf14518a73cfc2db8b1473d?pvs=4)


## Aloqa

Agar savollar yoki takliflaringiz bo'lsa, iltimos, [Yamaksi](mailto:koklok444@gmail.com) bilan bog'laning.
