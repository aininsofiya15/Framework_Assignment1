# COMPONENTS.md

Bootstrap 5.3.3 components used (loaded by CDN in `layouts/master.blade.php`).

| Component | Page(s) | Why it was used |
|-----------|---------|-----------------|
| Navbar (`navbar`, `navbar-expand-lg`, toggler, collapse) | All (master layout) | Consistent navigation; collapses to a hamburger on mobile; active link highlighted with `request()->routeIs()`. |
| Cards (`card`) | Home, About, Contact | Group content into soft-shadow blocks: stats, highlights, profile background, skills, hobbies, contact details. |
| Buttons (`btn`, `btn-primary`, `btn-outline-light`, custom `btn-accent`) | Home, Contact | Clear calls to action (About Me / Get In Touch / Read more / Send Message / Clear). |
| Grid system (`container`, `row`, `col-*`, `g-*`) | All | Responsive layouts: 4 stat cards become 2x2 on mobile; two-column About and Contact sections stack on small screens. |
| Form controls with validation (`form-control`, `form-label`, `invalid-feedback`, `was-validated`) | Contact | Name, email, subject and message fields with client-side validation feedback. |
| Badges (`badge`, `text-bg-*`, custom `badge-skill`) | Home, About | Highlight status (field of study, years of coding, CGPA) and tag skills. |
| Progress bars (`progress`, `progress-bar`) | About | Visualise skill levels. |
| List group (`list-group`, `list-group-item`) | About | Tidy list of certifications with icons. |
| Accordion (`accordion`, `data-bs-parent`) | About | Compact, expandable education and quick-facts details. |
| Breadcrumb (`breadcrumb`) | About, Contact | Shows location in the site and links back to Home. |
| Toast (`toast`, `toast-container`) | Contact | Success confirmation after a valid form submit (form is then reset). |
| Tooltips (`data-bs-toggle="tooltip"`) | Contact | Label the social icons on hover. Initialised in JS. |
| Bootstrap Icons (`bi bi-*`) | All | Icons in nav, stats, cards, hobbies, contact details. |
| Utilities (`d-flex`, `gap-*`, `mt-*`, `min-vh-100`, `sticky-top`, etc.) | All | Spacing, alignment, sticky navbar and footer pushed to page bottom. |

Count: 12 Bootstrap components (navbar, cards, buttons, grid, form controls, badges, progress bars, list group, accordion, breadcrumb, toast, tooltips) plus Bootstrap Icons.

Custom styling (`public/css/style.css`) overrides Bootstrap colours through CSS variables (palette, shadows, hover lift, hero gradient) so the site does not look like default Bootstrap.

## Added in the design upgrade

| Component | Page | Why it was used |
|-----------|------|-----------------|
| Cards with `card-body` (project cards) | Home | Showcase four sample projects with a gradient cover, description and tech badges. |
| Badges (`badge-skill`) | Home | Tech tags on each project card. |
| Buttons (`btn btn-primary`, `btn-accent`) | All | Back-to-top button (all pages) and the call-to-action banner button (Home). |

Non-Bootstrap custom effects (in `public/css/style.css` and `public/js/main.js`): scroll-reveal fade-in, animated stat counters, floating skill chips, wave hero divider, shrinking navbar.

## Audit update

No components were added or removed. Only styling changed: the `badge` colour variants (`text-bg-warning`, `text-bg-success`, also used by the success toast) now use the site palette, and the `list-group` background is transparent so it sits on its white card.
