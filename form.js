document.getElementById("submitBtn").addEventListener("click", function(event) {
    event.preventDefault();
    
    var name = document.getElementById("name").value;
    var phone = document.getElementById("phone").value;
    
    var xhr = new XMLHttpRequest();
    xhr.open("POST", "sendmail.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4 && xhr.status === 200) {
            document.getElementById("message").innerHTML = xhr.responseText;
        }
    };
    xhr.send("name=" + name + "&phone=" + phone);
});
