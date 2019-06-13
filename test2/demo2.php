<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <script src="jsMap-4.1.0.js"></script>
</head>
<body>
<h1>点击行政区域以备注</h1>
<div id="map"></div>
<div id="write" style="display: none">
    请输入备注信息<br>
    <textarea id="info"></textarea><br>
    <button onclick="saveInfo()">确定</button>
</div>
<script>
    var area = [];
    var info = {};
    jsMap.getJSON( "china.json", function ( response ) {
        jsMap.config("#map", response, {
            name: "china",
            tip: function ( id, name ) {
                if (area.indexOf(id) >= 0) {
                    return '<div style="background:#eee;padding:15px;"><p>id: ' + id + '</p><p>name: ' + name + '</p><p>备注:'+info[id]+'</p></div>';
                }
                return '<div style="background:#eee;padding:15px;"><p>id: ' + id + '</p><p>name: ' + name + '</p></div>';
            },
            clickCallback: function ( id, name ) {
                if (area.indexOf(id) < 0) {
                    area.push(id);
                    document.getElementById('info').setAttribute("areaid", id);
                    document.getElementById('write').style.display="block";
                }
            }
        });
    });
    function saveInfo() {
        var text = document.getElementById('info').value;
        var areaId = document.getElementById('info').getAttribute("areaid");
        info[areaId]=text;
        area.push(areaId);
        document.getElementById('info').removeAttribute('areaid');
        document.getElementById('write').style.display="none";
    }
</script>

</body>
</html>