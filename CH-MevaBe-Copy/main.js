function admin(e){
    event.preventDefault();
    var name = document.getElementById("name").value;
    var pass = document.getElementById("pass").value;

    var Name = {
        name : name,
        pass : pass,
    };
    var json = JSON.stringify(Name);
    localStorage.setItem(name,json);
    alert("dang ky thanh cong");
}
function login(e){
    event.preventDefault();
    var name = document.getElementById("name").value;
    var pass = document.getElementById("pass").value;

    var Name = localStorage.getItem(name);
    var data = JSON.parse(Name);
    if(Name ==null){
        alert("vui long nhap ten va mat khau")
    }
    else if(name ==data.name && pass ==data.pass){
        alert("dang nhap thanh cong")
        window.location.href="product.html"
    }
    else{
        alert("dang nhap that bai")
    }
}