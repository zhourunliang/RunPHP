// 定义 log 函数
var log = function() {
    console.log.apply(console, arguments)
}

var ajax = function(request) {
    /*
    request 是一个 object, 有如下属性
        method, 请求的方法, string
        url, 请求的路径, string
        data, 请求发送的数据, 如果是 GET 方法则没这个值, string
        callback, 响应回调, function

    */
    var r = new XMLHttpRequest()
    r.open(request.method, request.url, true)
    if (request.contentType !== undefined) {
        r.setRequestHeader('Content-Type', request.contentType)
    }
    r.onreadystatechange = function(event) {
        if(r.readyState === 4) {
            request.callback(r.response)
        }
    }
    if (request.method === 'GET') {
        r.send()
    } else {
        r.send(request.data)
    }
}

var e = function(selector) {
    return document.querySelector(selector)
}

//判空
function strIsEmpty(str){
    if (str == "" || str == null || typeof(str) == "undefined") {
        return true;
    }else{
        return false;
    }

}

var showAlert = function(msg, status=true){
    var div = document.querySelector('#id-div-alert')
    if(status){
        div.innerHTML = `<div class="alert alert-success">${msg}</div>`
    }else{
        div.innerHTML = `<div class="alert alert-warning">${msg}</div>`
    }
}