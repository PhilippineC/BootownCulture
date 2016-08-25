var buttons = document.getElementsByClassName('button');
for (var i = 0; i<buttons.length; i++) {
    buttons[i].addEventListener('click', function(e) {
        var title = e.target.parentNode.parentNode.childNodes[5].textContent;
        console.log(title);
        var forms = document.getElementsByTagName('form');
        for (var j = 0; j< forms.length; j++) {
            var input = null;
            input = document.createElement('input');
            input.type = 'hidden';
            input.value = title;
            input.name = 'eventname';
            input.className = 'wpcf7-form-control wpcf7-hidden';
            console.log(input);
            document.forms[j].appendChild(input);
        }
    });
}

