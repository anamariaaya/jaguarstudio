const { series, src, dest, watch }= require('gulp');
const imagemin = require('gulp-imagemin');
const webp = require('gulp-webp');



function imagenes(){
    return src('./img/prev/**/*')
        .pipe( imagemin())
        .pipe( dest('./img/after'))
}

function versionWebp(){
    return src('./img/prev/**/*')
        .pipe(webp())
        .pipe(dest('./img/after'))
}

exports.imagenes = imagenes;
exports.versionWebp = versionWebp;