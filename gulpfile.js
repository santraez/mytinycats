/////////////////////////////////////////////////////////
// DEPENDENCIES
/////////////////////////////////////////////////////////

// General

const { src, dest, watch, parallel } = require('gulp');

// CSS

const sass = require('gulp-sass')(require('sass'));
const plumber = require('gulp-plumber');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const postcss = require('gulp-postcss');
const sourcemaps = require('gulp-sourcemaps');

// Images

const cache = require('gulp-cache');
const imagemin = require('gulp-imagemin');
const webp = require('gulp-webp');
const avif = require('gulp-avif');

// Javascript

const terser = require('gulp-terser-js');

/////////////////////////////////////////////////////////
// FUNCTIONS
/////////////////////////////////////////////////////////

function css(done) {
    src('src/scss/**/*.scss')
        .pipe( sourcemaps.init() )
        .pipe( plumber() )
        .pipe( sass() )
        .pipe( postcss([ autoprefixer(), cssnano() ]) )
        .pipe( sourcemaps.write('.') )
        .pipe( dest('build/css') )
    done();
}

function images(done) {
    const options = {
        optimizationLevel: 3
    }
    src('src/images/**/*.{png,jpg}')
        .pipe( cache( imagemin(options) ) )
        .pipe( dest('build/images') )
    done();
}

function versionWebp(done) {
    const options = {
        quality: 50
    };
    src('src/images/**/*.{png,jpg}')
        .pipe( webp(options) )
        .pipe( dest('build/images') )
    done();
}

function versionAvif(done) {
    const options = {
        quality: 50
    };
    src('src/images/**/*.{png,jpg}')
        .pipe( avif(options) )
        .pipe( dest('build/images') )
    done();
}

function videos(done) {
    src('src/videos/**/*.{mp4,ogg,webm}')
        .pipe( dest('build/videos') );
    done();
}

function sounds(done) {
    src('src/sounds/**/*.{mp3,ogg,wav}')
        .pipe( dest('build/sounds') );
    done();
}

function javascript(done) {
    src('src/js/**/*.js')
        .pipe( sourcemaps.init() )
        .pipe( terser() )
        .pipe( sourcemaps.write('.') )
        .pipe( dest('build/js') );
    done();
}

function dev(done) {
    watch('src/scss/**/*.scss', css);
    watch('src/js/**/*.js', javascript);
    done();
}
 
/////////////////////////////////////////////////////////
// COMMANDS
/////////////////////////////////////////////////////////

exports.css = css;
exports.js = javascript;
exports.images = images;
exports.videos = videos;
exports.sounds = sounds;
exports.versionWebp = versionWebp;
exports.versionAvif = versionAvif;
exports.default = parallel( images, videos, sounds, versionWebp, versionAvif, javascript, dev );