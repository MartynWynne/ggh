

function push(partnerCode, username, name, category, action, label, value) {
    var imageObj = new Image();
    imageObj.src = "http://breuss.azurewebsites.net/analytics/a.gif?p=" + partnerCode + "&u=" + username + "&n=" + name + "&c=" + category + "&a=" + action + "&l=" + label + "&v=" + value;
}


/*
var _xhr;

(function () {
    _xhr = new XMLHttpRequest();
    _xhr.open("POST", "http://breuss.azurewebsites.net/ggh/api/analytics/TestUser", true);
    _xhr.setRequestHeader("Content-Type", "application/json");
    _xhr.onreadystatechange = function () {
        if (xhr.readyState == 4) {
            var result = JSON.parse(xhr.responseText);
            if (result.objectId) {
                alert("saved an object with id: " + result.objectId);
            }
        }
    }
})();

function push() {
    var data = JSON.stringify({ "name": "_trackEvent", "category": "video", "action": "Progress", "label": "vid_1", "value": 1 });
    _xhr.send(data);
}
*/