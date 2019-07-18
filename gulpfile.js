//註冊事件
const {
    src,
    dest,
    series,
    parallel,
    watch,
    task,
} = require('gulp');

const style = require('gulp-sass');
const cleanCSS = require('gulp-clean-css');
const browsersync = require('browser-sync').create();

// const autoprefixer = require('gulp-autoprefixer'); 
// function autoprefixer(){
//     return  src('./css/*.css')
//         .pipe(autoprefixer({
//             browsers: ['last 2 versions'],
//             cascade: false
//         }))
//         .pipe(dest('./css/*.css'))
// }

// sass
function sass() {
    return src('./scss/*.scss')
        .pipe(style())
        .pipe(dest('./css'));
}
//browserSync
function browserSync(done) {
    browsersync.init({
        server: {
            baseDir: "./",
            index: "loadin.html"
        },
        port: 3000
    });
    done();
}
// BrowserSync Reload
function browserSyncReload(done) {
    browsersync.reload();
    done();
}


//watch files
function watchfiles() {
    watch(['./scss/*.scss' , './scss/**/*.scss'] , sass);
    watch(['./', './**/*'], series(browserSyncReload))
}


// mini css
function miniCss(){
    return src('css/*.css')
    .pipe(cleanCSS({compatibility: '*'}))
    .pipe(dest('css/mini'));
}


const watcher = series(sass, parallel( watchfiles , browserSync));

exports.mini = miniCss;
exports.default = watcher;