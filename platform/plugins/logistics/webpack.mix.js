const mix = require('laravel-mix')
const path = require('path')
const directory = path.basename(path.resolve(__dirname))

const source = `platform/plugins/${directory}`
const dist = `public/vendor/core/plugins/${directory}`

mix.sass(`${source}/resources/assets/sass/logistics.scss`, `${dist}/css`)
    .js(`${source}/resources/assets/js/logistics.js`, `${dist}/js`)

if (mix.inProduction()) {
    mix
        .copyDirectory(`${dist}/css`, `${source}/public/css`)
        .copyDirectory(`${dist}/js`, `${source}/public/js`)
}
