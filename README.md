# Sukhda Multispeciality Hospital — Homepage

A modern, responsive homepage for Sukhda Multispeciality Hospital (Hisar, Haryana), built with PHP + Tailwind CSS (Play CDN) + Alpine.js.

## Tech stack

- **PHP** — server-side templating, no framework, includes-based structure
- **Tailwind CSS** via Play CDN with a custom inline theme (brand blue + green accent)
- **Alpine.js** for interactive elements (sliders, dropdowns, mobile menu, video player, filters)
- **Lucide Icons** (pinned to v0.469.0)
- **Google Fonts** — Plus Jakarta Sans (body) + Fraunces (display serif)

## Project structure

```
sukdha/
├── index.php                  # Main homepage with all sections
├── includes/
│   ├── header.php             # 3-tier navbar (utility bar, logo, primary nav)
│   ├── footer.php             # CTA section + footer
│   └── data.php               # All content (specialties, doctors, blogs, testimonials, news)
├── assets/
│   └── images/
│       ├── logo-removebg-preview.png   # Main hospital logo
│       ├── logo.png                    # Original logo with white bg
│       ├── nabh.jpg                    # NABH accreditation badge
│       └── right-logo-new.png
└── README.md
```

## Sections

1. **Banner** — Full-width image slider (3 slides from the live site)
2. **Search** — Floating compact search pill that overlaps the banner
3. **Specialities & Procedures** — Tabbed list with bordered pill cards + doctors directory
4. **About Us** — Editorial split with hospital image + values box
5. **World-class Technology** — 4-up slider with native horizontal scroll
6. **Blogs** — 4-up slider with native horizontal scroll
7. **Patient Testimonials** — Featured YouTube video player + thumbnail rail
8. **News & Events** — Compact 2-col list with vector illustration
9. **CTA** — Glass-effect card with Emergency + Book Appointment
10. **Footer** — Hospital info, links, social, contact

## Running locally

Any PHP server works:

```bash
php -S 127.0.0.1:8000
```

Then open http://127.0.0.1:8000 in your browser.

## Customising

- Edit content in `includes/data.php` (hospital info, specialties, doctors, blogs, testimonials, news)
- Brand colours live in `includes/header.php` (Tailwind config block) — `brand` for blue, `coral` for the green accent
- Logo files in `assets/images/`
