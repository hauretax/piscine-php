function new_todo(){
    var task = prompt("Please enter your name");

    if (task != null) {
        var newDiv = document.createElement("div"); 
        var newContent = document.createTextNode(task); 
      
        newDiv.appendChild(newContent);  
        var parentElement = document.getElementById('ft_list');
        var theFirstChild = parentElement.firstChild;
        parentElement.insertBefore (newDiv, theFirstChild);
    }
}