const mix = require('laravel-mix')
const path = require('path')

const directory = path.basename(path.resolve(__dirname))
const source = `platform/plugins/${directory}`
const dist = `public/vendor/core/plugins/${directory}`

mix
    .js(`${source}/resources/js/translation.js`, `${dist}/js`)
    .js(`${source}/resources/js/locales.js`, `${dist}/js`)
    .js(`${source}/resources/js/theme-translations.js`, `${dist}/js`)
    .sass(`${source}/resources/sass/translation.scss`, `${dist}/css`)
    .sass(`${source}/resources/sass/theme-translations.scss`, `${dist}/css`)

if (mix.inProduction()) {
    mix
        .copy(`${dist}/js/translation.js`, `${source}/public/js`)
        .copy(`${dist}/js/locales.js`, `${source}/public/js`)
        .copy(`${dist}/js/theme-translations.js`, `${source}/public/js`)
        .copy(`${dist}/css/translation.css`, `${source}/public/css`)
        .copy(`${dist}/css/theme-translations.css`, `${source}/public/css`)
}
