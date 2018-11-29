xhr = new XMLHttpRequest();

xhr.onload = function () {
    if(xhr.status === 200){
        var responseObject = JSON.parse(xhr.responseText);
        var content = '';

        for(var i = 0; i < responseObject.utbildningar.length; i++) {
            content += '<a href="' + responseObject.utbildningar[i].link + '" id="link' + i + '">' +
                '<figure id="figure' + i + '"></figure>' +
                '<aside>' +
                '<h1>' + responseObject.utbildningar[i].title + '</h1>' +
                '<p>' + responseObject.utbildningar[i].content + '</p>' +
                '</aside>' +
                ' </a>';
        }
        document.getElementById('educations').innerHTML = content;

        for(var i = 0; i < responseObject.utbildningar.length; i++) {
            document.getElementById('figure' + i).style.backgroundImage = "url('img/" + responseObject.utbildningar[i].img + "')";
            document.getElementById('link' + i).style.borderColor = responseObject.utbildningar[i].borderColor;
    }

    }
}

xhr.open('GET', 'data/utbildningar.json', true);
xhr.send(null);