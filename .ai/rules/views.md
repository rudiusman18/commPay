---
paths:
  - 'resources/views/**'
---

# Views

## Layout components: layouts/ folder + :: separator
Layout components live in resources/views/layouts/ (app.blade.php, auth.blade.php). Registered via Blade::anonymousComponentNamespace('layouts', 'layouts') in AppServiceProvider::boot(). Tags MUST use :: separator: <x-layouts::app>, <x-layouts::auth> — dot syntax (<x-layouts.app>) only works for the default components/ folder and throws "Unable to locate component". Slots: auth layout accepts receipt, note, tilt (rotate class), default slot = form content.
