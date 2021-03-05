const { series, src, dest, watch }= require('gulp');
const imagemin = require('gulp-imagemin');
const webp = require('gulp-webp');
const cssnano = require('gulp-cssnano');



function imagenes(){
    return src('./img/prev/**/*')
        .pipe( imagemin())
        .pipe( dest('./img/after'))
}

function versionWebp(){
    return src('./img/after/**/*')
        .pipe(webp())
        .pipe(dest('./img/after/webp'))
}

function css (){
    return src('./css/*.css')
        .pipe(cssnano())
        .pipe( dest('./css/nano') )
}

exports.imagenes = imagenes;
exports.versionWebp = versionWebp;
exports.css = css;