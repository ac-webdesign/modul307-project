// Imports

importScript('public/js/generate-end-date.js')

function importScript(path) {
    var script = document.createElement('script');
    script.src = path;
    document.body.appendChild(script);
}