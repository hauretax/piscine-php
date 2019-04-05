var nb_div = 0;
function new_todo(){
    var task = prompt("enter u tqsk");

    if (task != null) {
        creat_div(task);
    }
}
function creat_div(task)
{
    var newDiv = document.createElement("div"); 
    newDiv.setAttribute("id", nb_div);
    newDiv.addEventListener("click", del_div);
    nb_div++;
    var newContent = document.createTextNode(task); 
    newDiv.appendChild(newContent);  
    var parentElement = document.getElementById('ft_list');
    var theFirstChild = parentElement.firstChild;
    parentElement.insertBefore (newDiv, theFirstChild);
}
function del_div(){
    if(confirm ("are u sure ?"))
    this.parentNode.removeChild(this);
}