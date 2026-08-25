# AGENTS.md

## Project

Laravel 13.x application (PHP 8.3+). Pest 5 for testing, Tailwind CSS 4, Vite 8, Laravel Pint for formatting.

## Quick Commands

```bash
composer setup          # install, migrate, build (first-time only)
composer run dev        # start dev server (artisan dev + vite)
composer test           # clear config cache + run full test suite
php artisan test --compact --filter=TestName  # single test
vendor/bin/pint --dirty --format agent        # format modified PHP files
npm run build           # rebuild frontend assets
```

## After Editing

- **PHP files**: always run `vendor/bin/pint --dirty --format agent`
- **Frontend changes not showing**: run `npm run build` or restart `composer run dev`

## Frontend

Tailwind CSS 4 uses `@tailwindcss/vite` plugin (not PostCSS). Font: Instrument Sans via Bunny.

Entry points: `resources/css/app.css`, `resources/js/app.js`. Vite config at `vite.config.js`.

## Testing

- Framework: Pest 5 (`php artisan make:test --pest {Name}`)
- Tests use SQLite in-memory (`phpunit.xml` sets `DB_CONNECTION=sqlite`, `DB_DATABASE=:memory:`)
- Run: `php artisan test --compact`
- Feature tests in `tests/Feature`, unit tests in `tests/Unit`

## Code Style

- PHP 8 constructor property promotion, explicit return types, curly braces always
- Descriptive method names (`isRegisteredForDiscounts`, not `discount()`)
- Check sibling files for conventions before creating new ones
- Never add comments unless asked
- LF line endings, 4-space indent (`.editorconfig`)

## Agent-Specific

- Prefer `record-rule` for durable conventions (persists in `.ai/rules`, not session memory)
- Use `search-docs` for Laravel ecosystem API questions before assuming behavior
- `.ai/rules/` does not exist yet — record rules there as project matures
- Available skills: infer-conventions, laravel-best-practices, pest-testing, tailwindcss-development
