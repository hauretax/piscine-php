var nb_div = 0;

function sometodo(){
  var task = document.getElementById('ft_list');
  task.innerHTML = decodeURIComponent(getCookie('new_todo'));
}
function new_todo(){
    var task = prompt("enter u task");

    if (task != null) {
        creat_div(task);
    }
}
function creat_div(task)
{
    var newDiv = document.createElement("div"); 
    var newContent = document.createTextNode(task); 
    var parentElement = document.getElementById('ft_list');
    var theFirstChild = parentElement.firstChild;
    newDiv.setAttribute("id", nb_div);
    newDiv.setAttribute("onclick", "del_div(this)")
    newDiv.appendChild(newContent);  
    nb_div++;
    parentElement.insertBefore (newDiv, theFirstChild);
    setCookie('new_todo', encodeURIComponent(parentElement.innerHTML));
}
function del_div(divnb){
    if(confirm ("are u sure ?")){
      var divtodel = document.getElementById('ft_list');
    divtodel.removeChild(divnb);
    setCookie('new_todo', encodeURIComponent(divtodel.innerHTML));
    }
}

function setCookie(cname, cvalue) {
    var d = new Date();
    d.setTime(d.getTime() + (1 * 24 * 60 * 60 * 1000));
    var expires = "expires="+d.toUTCString();
    document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
  }
  
  function getCookie(cname) {
    var name = cname + "=";
    var ca = document.cookie.split(';');
    for(var i = 0; i < ca.length; i++) {
      var c = ca[i];
      while (c.charAt(0) == ' ') {
        c = c.substring(1);
      }
      if (c.indexOf(name) == 0) {
        return c.substring(name.length, c.length);
      }
    }
    return "";
  }