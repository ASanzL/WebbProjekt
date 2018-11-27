xhr = new XMLHttpRequest();

xhr.onload = function () {
    if(xhr.status === 200){
        var responseObject = JSON.parse(xhr.responseText);
        var content = '';

        for(var i = 0; i < responseObject.YH.length; i++) {
            content += '<a href="' + responseObject.YH[i].link + '">' +
                '<figure id="figure' + i + '"></figure>' +
                '<aside>' +
                '<h1>' + responseObject.YH[i].title + '</h1>' +
                '<p>' + responseObject.YH[i].content + '</p>' +
                '</aside>' +
                ' </a>';
        }
        document.getElementById('educations').innerHTML = content;

        for(var i = 0; i < responseObject.YH.length; i++) {
            document.getElementById('figure' + i).style.backgroundImage = "url('img/" + responseObject.YH[i].img + "')";
        }

    }
}

xhr.open('GET', 'data/YH.json', true);
xhr.send(null);