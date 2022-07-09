var expect = require('expect.js');
var vinyl = require('vinyl-fs');
var bulkSass = require('..');
var fs = require('fs');
var nodeSass = require('gulp-sass');

'use strict';

describe('gulp-sass-glob-use-forward', function() {

    it('should parse a single directory', function(done) {
        var expectedResult = [
            '@forward "import-folder/_f1.scss";',
            '@forward "import-folder/_f2.scss";'
        ].join('\n');

        vinyl
            .src(__dirname + '/test-scss/app.scss')
            .pipe(bulkSass())
            .on('data', function(file) {
                expect(file.contents.toString('utf-8').trim()).to.equal(expectedResult.trim());
            })
            .on('end', function() {
                done();
            });
    });

    it('should parse a directory recursively', function(done) {
        var expectedResult = [
            '@use "recursive-folder/_f1.scss" as *;',
            '@use "recursive-folder/_f2.scss" as test;',
            '@use "recursive-folder/nested-folder/_f3.scss";'
        ].join('\n');

        vinyl
            .src(__dirname + '/test-scss/recursive.scss')
            .pipe(bulkSass())
            .on('data', function(file) {
                expect(file.contents.toString('utf-8').trim()).to.equal(expectedResult.trim());
            })
            .on('end', function() {
                done();
            });
    });

    it('should find multiple import declaration in the same file', function(done){
        var expectedResult = [
            '@use "recursive-folder/_f1.scss";',
            '@use "recursive-folder/_f2.scss";',
            '@use "recursive-folder/nested-folder/_f3.scss";',
            '@use "import-folder/_f1.scss";',
            '@use "import-folder/_f2.scss";'
        ].join('\n');

        vinyl
            .src(__dirname + '/test-scss/multiples.scss')
            .pipe(bulkSass())
            .on('data', function(file) {
                expect(file.contents.toString('utf-8').trim()).to.equal(expectedResult.trim());
            })
            .on('end', function() {
                done();
            });
    });

    it('should not fail when parsed with node-sass', function(done) {
        vinyl
            .src(__dirname + '/test-scss/app.scss')
            .pipe(bulkSass())
            .pipe(nodeSass())
            .on('end', function() {
                done();
            });
    });
});
