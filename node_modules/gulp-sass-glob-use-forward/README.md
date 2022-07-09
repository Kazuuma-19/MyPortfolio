gulp-sass-glob-use-forward
=====================

gulp task to allow importing directories in your SCSS using @use and @forward.

Similar to [gulp-sass-glob-import](https://github.com/bleuarg/gulp-sass-glob-import) but supports @use and @forward instead.


## installation

```
npm install --save-dev gulp-sass-glob-use-forward
```


## usage


#### in your .scss file

```scss
@forward "some/path/*";

// becomes
// @forward "some/path/file1.scss";
// @forward "some/path/file2.scss";
// ...

@use "some/path/*";

// becomes
// @use "some/path/file1.scss";
// @use "some/path/file2.scss";
// ...

@use "some/path/*" as *;

// becomes
// @use "some/path/file1.scss" as *;
// @use "some/path/file2.scss" as *;
// ...

```

#### in your gulpfile

```js
var bulkSass = require('gulp-sass-glob-use-forward');

gulp.task('css', function() {
    return gulp
            .src(srcDir + 'stylesheets/app.scss')
            .pipe(bulkSass())
            .pipe(
                sass({
                    includePaths: ['src/stylesheets']
                }))
            .pipe( gulp.dest('./public/css/') );
});
```

