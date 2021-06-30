function openDialog(){
    
    alert("Login Successful");
}


function openForm() {
    document.getElementById("myForm").style.display = "block";
  }
  
  function closeForm() {
    document.getElementById("myForm").style.display = "none";
  }

function navigateWindow(){

    var inputvalue = $("#input").val();
    window.location.replace(inputvalue + ".html");
}