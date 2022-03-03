function getPageName(url) {
    var index = url.lastIndexOf("/") + 1;
    var filenameWithExtension = url.substr(index);
    var filename = filenameWithExtension.split(".")[0]; // <-- added this line
    return filename; // <-- added this line
}

function start() {
    var currentPageName = getPageName(window.location.pathname);
    const nav = document.querySelector(`#${currentPageName}`);
    if (!nav.classList.contains('active')) {
        nav.classList.add('active', 'text-info');
    }
}
window.onload = start;