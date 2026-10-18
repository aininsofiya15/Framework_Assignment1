# BUILD_STEPS.md

Exact record of how the project was built, in order. Environment: Windows 11, PHP 8.2.12 (XAMPP), Composer 2.8.9, Laravel 12.

## Commands run

| # | Command | Purpose |
|---|---------|---------|
| 1 | `php -v` / `composer --version` | Confirm PHP and Composer are installed. |
| 2 | `composer create-project laravel/laravel personal-profile --no-interaction` | Create the Laravel 12 project. Packages installed, but the post-install `artisan package:discover` step failed (see step 3). The project was created in a `personal-profile` subfolder and moved up to the parent folder in the "Folder move" section below. |
| 3 | `attrib -R bootstrap\cache /D` and `attrib -R storage /S /D` | Fix: the project is inside a OneDrive folder, which marked `bootstrap/cache` read-only, so PHP reported "directory must be present and writable". Clearing the read-only flag fixed it. Not needed on a normal (non-OneDrive) folder. |
| 4 | `php artisan package:discover --ansi` | Re-run the step that failed in step 2. |
| 5 | `php artisan key:generate --ansi` | Generate `APP_KEY` in `.env` (also skipped by the failed step 2). |
| 6 | `php artisan serve --port=8000` | Start the dev server to test (run several times, stopped each time). |
| 7 | `php artisan route:list --except-vendor` | Confirm exactly three routes: `home`, `about`, `contact`. |

Note: `php artisan migrate` was deliberately NOT run; the site uses no database.

## Files edited / created (in order)

| # | File | Action | Purpose |
|---|------|--------|---------|
| 1 | `.env` | Edited | `APP_NAME` set to the profile name (changed again in step 11); `SESSION_DRIVER=file`, `CACHE_STORE=file`, `QUEUE_CONNECTION=sync` so Laravel needs no database. |
| 2 | `resources/views/layouts/` and `public/css/` | Folders created | Locations for the master layout and custom CSS. |
| 3 | `routes/web.php` | Edited (replaced default welcome route) | Three named `Route::view` routes: `/` (home), `/about` (about), `/contact` (contact). |
| 4 | `resources/views/layouts/master.blade.php` | Created | Master layout: head, Bootstrap 5.3.3 / Bootstrap Icons / Poppins via CDN, responsive navbar with `request()->routeIs()` active state, `@yield('content')`, footer, Bootstrap JS bundle, `@stack('scripts')`. |
| 5 | `public/css/style.css` | Created | Colour palette as CSS variables, hero gradient and dot pattern, card shadows and hover lift, button/navbar/form/footer styling. |
| 6 | `resources/views/home.blade.php` | Created | Home page: hero, stat cards, highlight cards. |
| 7 | `resources/views/about.blade.php` | Created | About page: breadcrumb, background card, skills, certifications, hobbies, accordion. |
| 8 | `resources/views/contact.blade.php` | Created | Contact page: breadcrumb, validated form, side card, toast, inline JS via `@push('scripts')`. |
| 9 | `BUILD_STEPS.md` | Created | This file. |
| 10 | `COMPONENTS.md` | Created | Bootstrap component inventory. |

### Content change: personal details replaced with a fictional sample profile (Alex Tan)

Only content changed; layout, CSS, routes, file names and Bootstrap components are unchanged. Command run: `php artisan view:clear` (clear compiled Blade views). The edits were made directly in each file.

| # | File | Action | Purpose |
|---|------|--------|---------|
| 11 | `.env` | Edited | `APP_NAME="Alex Tan"`. |
| 12 | `resources/views/layouts/master.blade.php` | Edited | Title suffix, navbar brand (initials "AT" + name) and footer name changed to Alex Tan. |
| 13 | `resources/views/home.blade.php` | Edited | New name, title, intro, hero badge ("Open to Internships"), stats (CGPA 3.50, 2 years coding, 3 certifications, 4 projects), highlight-card badges, avatar "AT". |
| 14 | `resources/views/about.blade.php` | Edited | New background text (Sample University, Bachelor of Computer Science), six skills (HTML & CSS, JavaScript, PHP & Laravel, MySQL, UI Design, Teamwork) in the progress bars and badges, three certifications in the list group, hobbies (Reading, Photography, Hiking, Gaming), accordion text, avatar "AT". |
| 15 | `resources/views/contact.blade.php` | Edited | Email `alex.tan@example.com`, new Phone contact item `+60 12-345 6789`, location Kuala Lumpur, Malaysia, university Sample University. Social links remain `#`. |
| 16 | `resources/views/welcome.blade.php` | Deleted | Unused default Laravel view, removed so no leftover default content remains. |

After the change: a case-sensitive search of `resources/views` for "Ainin", "Sofiya", "UMPSA", "Pahang", "Dean" and "3.77" returned 0 matches, and `/`, `/about` and `/contact` each returned HTTP 200.

## Verification performed

- `php artisan serve`, then requested `/`, `/about`, `/contact`: all returned HTTP 200 with the correct `<title>` and the matching navbar link marked `active`. `/nope` returned 404.
- Rendered each page with headless Microsoft Edge at 1280px wide and in 375px-wide iframes (mobile). No horizontal overflow; the navbar collapsed into a hamburger on mobile. The screenshots were temporary checks and are NOT in the project. Take your own for the report.
- Not tested: clicking the form submit/toast/tooltips/accordion in a real browser (the code is standard Bootstrap JS, but verify the toast appears when you take screenshots).

## Placeholders to edit before submission

All content is now the fictional sample profile "Alex Tan". Everything below is sample data:

- Name, title, intro, university ("Sample University"), "Open to Internships" hero badge (`home.blade.php`, `about.blade.php`, `layouts/master.blade.php`).
- Stats: CGPA 3.50, 2 years coding, 3 certifications, 4 projects (`home.blade.php`, repeated in `about.blade.php`).
- Skill percentages 90/75/80/70/65/85 (`about.blade.php`) are made-up values supplied by neither the profile nor a real assessment.
- Certification names, hobby descriptions and accordion text (`about.blade.php`).
- Email `alex.tan@example.com`, phone `+60 12-345 6789`, location Kuala Lumpur, Malaysia, and social links `href="#"` (`contact.blade.php`).
- Photo: initials avatar `AT` in `home.blade.php` and `about.blade.php`; each has a comment showing the `<img>` line to swap in (put the image in `public/images/`).

## How to run

```
composer install        # only if vendor/ is missing
php artisan serve
```
Open http://127.0.0.1:8000. Internet access is needed for the CDN assets (Bootstrap, icons, Google Font).

## Layout fix (About page)

`resources/views/about.blade.php` edited: the Skills and Certifications columns now use `d-flex flex-column`, their cards use `flex-grow-1` instead of `h-100`, and the certification list items use `flex-fill`. Reason: with `h-100` the cards were taller than their column and overlapped the "Hobbies" heading, and the Certifications card had a large empty area. Checked by rendering the page in headless Edge at 1400px wide.

## Design upgrade (enhancements, no new routes or pages)

Files created/edited, in order:

| # | File | Action | Purpose |
|---|------|--------|---------|
| 1 | `public/css/style.css` | Edited (section underline widened to 100%; "Enhancements" block appended) | Scroll-reveal styles, navbar shrink, hero wave/floating shapes/rotating ring/skill chips, project cards, CTA banner, back-to-top button, reduced-motion support. |
| 2 | `public/js/main.js` | Created | Small vanilla JS: scroll-reveal (IntersectionObserver), animated stat counters, navbar shrink on scroll, back-to-top. No npm build. |
| 3 | `resources/views/layouts/master.blade.php` | Edited | Added `js` class script in head, back-to-top button, and `main.js` script tag. |
| 4 | `resources/views/home.blade.php` | Edited | Hero shapes, wave divider and floating skill chips; counters on stat cards; new "Featured Projects" section (4 sample project cards, matches the "4 projects" stat); new call-to-action banner. |
| 5 | `resources/views/about.blade.php`, `contact.blade.php` | Edited | `reveal` class added to sections so they fade in on scroll. |

Verified: `/`, `/about`, `/contact` and `/js/main.js` return HTTP 200 and Home was rendered in headless Edge. The four project names/descriptions are fictional sample content.

## Audit against the rubric

Tooling (kept OUTSIDE the project, in a temporary scratch folder, so nothing was added to the project's dependencies): `npm i playwright-core` and a Playwright script that drives the installed Microsoft Edge in headless mode. Commands run in the project: `php artisan route:list`, `php artisan view:clear`, `php artisan serve --port=8002` (temporary, stopped afterwards). Static checks used `grep` over `routes/` and `resources/views/`.

Changes made, in order:

| # | File | Action | Purpose |
|---|------|--------|---------|
| 1 | `public/css/style.css` | Edited (appended "Audit polish" block) | `.list-group` background set to transparent so the certifications list is white like its card (it was inheriting the grey page background); `text-bg-warning` and `text-bg-success` badges recoloured to the site palette (amber and dark teal) so the About badges and the success toast match the purple/amber scheme; `.contact-side` made a flex column with `.contact-social { margin-top: auto }`. |
| 2 | `resources/views/contact.blade.php` | Edited | The divider, "Find me online" label and social icons are wrapped in `<div class="contact-social">` so the icons sit at the bottom of the side card instead of leaving an empty gap. |
| 3 | `screenshots/` | Created | Full-page PNG screenshots: `home-`, `about-`, `contact-` at `desktop` (1280px) and `mobile` (375px), plus `home-mobile-menu-open`, `contact-validation-errors`, `contact-success-toast`, `contact-tooltip`. Re-take them if you change the site again. |

No other files needed changes: the routes, the views' structure, the master layout and the JavaScript all passed every check unchanged. `resources/views/welcome.blade.php` had already been deleted in the content-change step.

## Folder move: project moved up out of `personal-profile/`

Goal: the Laravel project sits directly in `Framework_Assignment1/` (the folder containing `artisan`, `app/`, `routes/`, `resources/`, `public/`, `.env`, etc.). All file paths in this document are relative to that project root, so they are unchanged by the move. Nothing in the code was edited.

Commands run (PowerShell, from `Framework_Assignment1`):

1. `Get-Process php | Stop-Process -Force` (stop any running `php artisan serve`).
2. `Get-ChildItem -Force` on both folders: `Framework_Assignment1` held only `personal-profile`, so there were no name clashes.
3. `attrib -R "personal-profile\*" /S /D` (clear the read-only flags OneDrive sets).
4. `Get-ChildItem -Force personal-profile | ForEach-Object { Move-Item -LiteralPath $_.FullName -Destination . }`: moved every file and folder, including `.env`, `.env.example`, `.gitignore`, `.gitattributes`, `.editorconfig`, `vendor/` and `screenshots/`. No failures.
5. `attrib -R bootstrap\cache /D` and `attrib -R storage /S /D` (re-clear read-only flags on the writable folders).
6. `composer dump-autoload` (regenerate the autoloader; 6545 classes).
7. `php artisan optimize:clear` (clear config, cache, compiled views, events and route caches).
8. `php artisan route:list --except-vendor`: still the three routes `home`, `about`, `contact`.
9. `php artisan serve --port=8003`: `/`, `/about`, `/contact`, `/css/style.css` and `/js/main.js` all returned HTTP 200 (stopped afterwards).

Result: the empty `personal-profile` folder could not be deleted because another process (not PHP or Node; most likely the editor or a terminal opened in that folder) still had a handle on it. Close it and delete the empty folder by hand (`rmdir personal-profile`). It contains no files.

To end up with the same structure from scratch, either run `composer create-project laravel/laravel personal-profile` and move its contents up as above, or run `composer create-project laravel/laravel .` inside an empty `Framework_Assignment1` (not what was done here).
