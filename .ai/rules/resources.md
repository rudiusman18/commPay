---
paths:
  - 'resources/**'
---

# Resources

## Charts: always ECharts
Any UI that renders charts MUST use Apache ECharts (npm: echarts). Already installed? Check package.json first — install with `npm install echarts` if missing. Import per-page in Blade via a small JS module or inline in app.js; init with `echarts.init(el)`, dispose on teardown, and respect prefers-reduced-motion by disabling animation. Match CommPay palette: teal-600 (#0d9488) primary series, gray-900 text. Never add Chart.js, ApexCharts, or Recharts.
