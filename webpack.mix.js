const mix = require('laravel-mix');

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

 mix.js('resources/js/coreui/app.js', 'public/js')
   .sass('resources/scss/backpanel/style.scss', 'public/css/backpanel')
   .sass('resources/scss/fonts.scss', 'public/css')
   .sass('resources/scss/frontpanel/style.scss', 'public/css/frontpanel')
   .sass('resources/scss/frontend/front.scss', 'public/css/frontend');

    mix.copy('node_modules/@coreui/chartjs/dist/css/coreui-chartjs.css', 'public/css');

    mix.copy('node_modules/@coreui/coreui-pro/dist/css/coreui.min.css', 'public/css');
    mix.copy('node_modules/@coreui/coreui-pro/dist/css/coreui.min.css.map', 'public/css');
    
    //************** SCRIPTS ****************** 
    // general scripts
    mix.copy('node_modules/@coreui/utils/dist/coreui-utils.js', 'public/js');
    mix.copy('node_modules/axios/dist/axios.min.js', 'public/js'); 
    mix.copy('node_modules/@coreui/coreui-pro/dist/js/coreui.bundle.min.js', 'public/js'); 
    mix.copy('node_modules/@coreui/coreui-pro/dist/js/coreui.bundle.min.js.map', 'public/js'); 
    // views scripts
    mix.copy('node_modules/chart.js/dist/Chart.min.js', 'public/js'); 
    mix.copy('node_modules/@coreui/chartjs/dist/js/coreui-chartjs.js', 'public/js');
    mix.copy('node_modules/@coreui/chartjs/dist/js/coreui-chartjs.js.map', 'public/js');
    mix.copy('node_modules/@coreui/utils/dist/coreui-utils.js', 'public/js');
    mix.copy('node_modules/datatables.net/js/jquery.dataTables.js', 'public/js');
    mix.copy('node_modules/datatables.net-bs4/js/dataTables.bootstrap4.min.js', 'public/js');
    mix.copy('node_modules/jquery/dist/jquery.min.js', 'public/js');
    
    // details scripts
    mix.copy('resources/js/coreui/main.js', 'public/js');
    mix.copy('resources/js/coreui/colors.js', 'public/js');
    mix.copy('resources/js/coreui/charts.js', 'public/js');
    mix.copy('resources/js/coreui/widgets.js', 'public/js');
    mix.copy('resources/js/coreui/popovers.js', 'public/js');
    mix.copy('resources/js/coreui/tooltips.js', 'public/js');
    mix.copy('resources/js/coreui/datatables.js', 'public/js');
    //*************** OTHER ****************** 
    //fonts
    mix.copy('node_modules/@coreui/icons/fonts', 'public/fonts');
    //icons
    mix.copy('node_modules/@coreui/icons/css/free.min.css', 'public/css');
    mix.copy('node_modules/@coreui/icons/css/brand.min.css', 'public/css');
    mix.copy('node_modules/@coreui/icons/css/flag.min.css', 'public/css');
    mix.copy('node_modules/@coreui/icons/svg/flag', 'public/svg/flag');
    
    mix.copy('node_modules/simplebar/dist/simplebar.css', 'public/css');
    mix.copy('node_modules/@coreui/icons/sprites/', 'public/icons/sprites');
    //images
    mix.copy('resources/assets', 'public/assets');


mix.webpackConfig({
    stats: {
         children: true
    }
});