javascript:(function () {
    var jsScript = document.createElement('script');
    jsScript.setAttribute('type', 'text/javascript');
    jsScript.setAttribute('src', '//rah.pt/addurl.php?url=' + encodeURIComponent(location.href) + '&title=' + encodeURIComponent(document.title));
    document.getElementsByTagName('head')[0].appendChild(jsScript);
})();

