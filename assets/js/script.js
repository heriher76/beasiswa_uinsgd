var input = document.getElementById('pswd'), cek = document.getElementById('cek');

   cek.onclick = function () {
     if(input.className == 'active form-control') {

        input.setAttribute('type', 'text');
        input.className = 'form-control';
        cek.textContent = 'Hide';

     } else if(input.className == 'form-control'){
        input.setAttribute('type', 'password');
        input.className = 'active form-control';
        cek.textContent = 'Show';
    }
  }

function ShowPassword()
{
    if(document.getElementById("mypass").value!="")
    {
        document.getElementById("mypass").type="text";
        document.getElementById("show").style.display="none";
        document.getElementById("hide").style.display="block";
    }
}

function HidePassword()
{
    if(document.getElementById("mypass").type == "text")
    {
        document.getElementById("mypass").type="password"
        document.getElementById("show").style.display="block";
        document.getElementById("hide").style.display="none";
    }
}

function change()
{
    var x = document.getElementById('pass').type;

    if (x == 'password')
    {
        document.getElementById('pass').type = 'text';
        document.getElementById('mybutton').innerHTML = '<i class="glyphicon glyphicon-eye-close"></i>';
    }
    else
    {
        document.getElementById('pass').type = 'password';
        document.getElementById('mybutton').innerHTML = '<i class="glyphicon glyphicon-eye-open"></i>';
    }
}