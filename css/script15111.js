function fb() {
    var a = document.getElementById("ip1").value;
    b = document.getElementById("ip5").value;
    c = document.getElementById("sel1").value;
    d = document.getElementById("sel2").value;
    e = document.getElementById("sel3").value;
    f = document.querySelectorAll('input[type="radio"]');
    f.forEach(radio => {
        if (radio.checked) {
            g = radio.value};
        }
    )
    if(a=="" || b=="" || c=="" || d=="" || e=="" || f=="" )
        {alert("Bạn chưa điền đủ thông tin")}
    else{
        alert("Xin chào " + a + " " + b + ", sinh ngày " + c +"/" +d + "/" + e +", đã đăng ký thành công" );
    }
}
