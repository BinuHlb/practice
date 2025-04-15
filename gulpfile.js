const browsersync = require('browser-sync').create();
const cached = require('gulp-cached');
const cleanCSS = require('clean-css');
const cssnano = require('gulp-cssnano');
const del = require('del');
const gulp = require('gulp');
const npmdist = require('gulp-npm-dist');
const useref = require('gulp-useref-plus');
const rename = require('gulp-rename');
const sourcemaps = require("gulp-sourcemaps");
const sass = require("gulp-sass")(require("sass"));
const postcss = require('gulp-postcss');
const autoprefixer = require("autoprefixer");
const tailwindcss = require('tailwindcss');
const newer = require("gulp-newer");


const paths = {
    config: {
        tailwind: "./tailwind.config.js",
    },
    base: {
        base: {
            dir: './'
        },
        node: {
            dir: './node_modules'
        },
        packageLock: {
            files: './package-lock.json'
        }
    },
    dist: {        
        libs: {
            dir: './webroot/libs'
        },
        img: {
            dir: "./webroot/images",
        },
        fonts: {
            dir: "./webroot/fonts",
        },
        css: {
            dir: './webroot/css',
        },
        js: {
            dir: './webroot/js',
            files: './webroot/js/pages',
        },
    },
    src: {
        base: {
            dir: 'webroot',
            files: 'webroot/**/*'
        },
        css: {
            dir: 'webroot/source/css',
            files: 'webroot/source/css/**/*'
        },        
        img: {
            dir: 'webroot/source/images',
            files: 'webroot/source/images/**/*',
        },
        fonts: {
            dir: "webroot/source/fonts",
            files: "webroot/source/fonts/**/*",
        },
        js: {
            dir: 'webroot/source/js',
            pages: 'webroot/source/js/pages',
            files: 'webroot/source/js/pages/*.js',  
            main: 'webroot/source/js/*.js',
        },    
        scss: {
            dir: 'webroot/source/scss',
            files: 'webroot/source/scss/**/*',
            main: 'webroot/source/scss/*.scss',
            icon: 'webroot/source/scss/icons.scss'
        }
    }
};


gulp.task('watch', function () {
    gulp.watch([paths.src.scss.files, '!' + paths.src.scss.icon], gulp.series('scss'));
    gulp.watch(paths.src.scss.icon, gulp.series('icons'));
    gulp.watch([paths.src.js.dir], gulp.series('js'));
    gulp.watch([paths.src.js.pages], gulp.series('jsPages'));
});

gulp.task('js', function () {
    return gulp
        .src(paths.src.js.main)
        // .pipe(uglify())
        .pipe(gulp.dest(paths.dist.js.dir));
});

gulp.task('jsPages', function () {
    return gulp
        .src(paths.src.js.files)
        // .pipe(uglify())
        .pipe(gulp.dest(paths.dist.js.files));
});

const cssOptions = {
    compatibility: "*", // (default) - Internet Explorer 10+ compatibility mode
    inline: ["all"], // enables all inlining, same as ['local', 'remote']
    level: 2, // Optimization levels. The level option can be either 0, 1 (default), or 2, e.g.
};


gulp.task('scss', function () {
    // generate tailwind  
    return gulp
        .src([paths.src.scss.main, '!' + paths.src.scss.icon])
        .pipe(sourcemaps.init())
        .pipe(sass().on('error', sass.logError))

        .pipe(postcss([
            tailwindcss(paths.config.tailwind),
            autoprefixer()
        ]))
        .pipe(gulp.dest(paths.dist.css.dir))
        // .pipe(cssnano({ svgo: false }))
        .on("data", function (file) {
            const buferFile = new cleanCSS(cssOptions).minify(file.contents);
            return (file.contents = Buffer.from(buferFile.styles));
        })
        .pipe(
            rename({
                suffix: ".min"
            })
        )
        .pipe(sourcemaps.write("./"))
        .pipe(gulp.dest(paths.dist.css.dir));
});


gulp.task('icons', function () {
    return gulp
        .src(paths.src.scss.icon)
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest(paths.dist.css.dir))
        .on("data", function (file) {
            const buferFile = new cleanCSS(cssOptions).minify(file.contents);
            return (file.contents = Buffer.from(buferFile.styles));
        })
        .pipe(
            rename({
                suffix: ".min"
            })
        )
        .pipe(gulp.dest(paths.dist.css.dir));
});

gulp.task("images", function () {
    return gulp
        .src(paths.src.img.files)
        .pipe(newer(paths.dist.img.dir))
        .pipe(gulp.dest(paths.dist.img.dir));
});

gulp.task("fonts", function () {
    return gulp
        .src(paths.src.fonts.files)
        .pipe(newer(paths.dist.fonts.dir))
        .pipe(gulp.dest(paths.dist.fonts.dir));
});


gulp.task('copy:libs', function () {
    return gulp
        .src(npmdist(), { base: paths.base.node.dir })
        .pipe(rename(function (path) {
            path.dirname = path.dirname.replace(/\/dist/, '').replace(/\\dist/, '');
        }))
        .pipe(gulp.dest(paths.dist.libs.dir));
});


// Default(Producation) Task
gulp.task('default', gulp.series(gulp.parallel( 'copy:libs', 'scss', 'icons', 'js', 'jsPages', 'images', 'fonts'), gulp.parallel( 'watch')));

// Build(Development) Task
gulp.task('build', gulp.series( 'copy:libs', 'scss', 'icons', 'js', 'jsPages', 'images', 'fonts'));