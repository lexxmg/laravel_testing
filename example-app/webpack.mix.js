
const mix = require('laravel-mix');

const fs = require('fs');
const pathFolder = 'resources/css/';


fs.readdir(pathFolder, (err, files) => {
  const arrayPath = files.map(item => {
    return pathFolder + '/' + item;
  });

  //console.log(arrayPath);
});


/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

const arrayCss = [
  'normalize.css',
  'master.css',
  'auth-form.css',
  'pagination.css',
  'header.css',
  'main.css',
  'footer.css'
];

const arrayCssFullPath = arrayCss.map(item => {
  return 'resources/css/' + item;
});

console.log(arrayCssFullPath);

mix.js('resources/js/app.js', 'public/js')
    .styles(arrayCssFullPath, 'public/css/app.css');
