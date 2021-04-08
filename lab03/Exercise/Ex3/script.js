function setCookie(cname, cvalue, exdays) {
       var d = new Date();
       d.setTime(d.getTime() + (exdays * 24 * 60 * 60 * 1000));
       var expires = "expires=" + d.toUTCString();
       document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
   }

   function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for (var i = 0; i < ca.length; i++) {
            var c = ca[i];
            while (c.charAt(0) == ' ')
                c = c.substring(1);
            if (c.indexOf(nameEQ) != -1)
                return c.substring(nameEQ.length, c.length);
        }
        return null;
    }

    function addName(name) {
       var nameElement = document.getElementById("right").contentWindow.document.getElementById("formName").name;
        var name = nameElement.value;
        if(name == "") {
          return;
        }
        setCookie("blog-name", name, 1);
    }

    function getName() {
         var x = document.getElementById("right");
        var y = (x.contentWindow || x.contentDocument);
        if (y.document)y = y.document;
        y.body.style.backgroundColor = "red";
      }    

    function saveName() {

    }