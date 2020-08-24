"use strict";
/* шляхи до ісходних файлів (src), до готовим файлам (build), а також до тих за змінами яких треба дивитися (watch)*/
var path = {
    build: {
        css:'assets/css/',
    },
    src: {
        style:'assets/sass/style.scss',
    },
    watch: {
        css:'assets/sass/**/*.scss',
    },
};
/* настройки сервера */
var config = {
    server: {
        baseDir: './'
    },
    notify: false
};

/* підключення gulp і плагіни */
var gulp = require('gulp'),  // підключення Gulp
    webserver = require('browser-sync'), // сервер для роботи і автоматичного обновлення сторінок
    plumber = require('gulp-plumber'), // модуль для відслідковування помилок
    sass = require('gulp-sass'), // модуль для компіляції SASS (SCSS) в CSS
    cleanCSS = require('gulp-clean-css'), // плагін для мініфікації CSS
    rename = require('gulp-rename');

// запуск сервера
gulp.task('webserver', function () {
    webserver(config);
});

// збірка стилів
gulp.task('css:build', function () {
    return gulp.src(path.src.style)
        .pipe(plumber())
        .pipe(sass())
        .pipe(gulp.dest(path.build.css))
        .pipe(rename({suffix: '.min'}))
        .pipe(cleanCSS())
        .pipe(gulp.dest(path.build.css))
        .pipe(webserver.reload({stream: true}));
});

// запуск завдань при зміні файлів
gulp.task('watch', function() {
    gulp.watch(path.watch.css, ['css:build']);
});

// завдання за замовчуванням
gulp.task('default', [
    'webserver',
    'watch'
]);
