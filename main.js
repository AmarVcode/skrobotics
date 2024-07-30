function showmenu() {
    let drop = document.getElementById("navbar")
    if (drop.classList.contains("aftermenu")) {
        drop.classList.remove("aftermenu")
    }
    else {
        drop.classList.add("aftermenu")

    }
}



function send() {
    let firstname = document.getElementById("fname")
    let lastname = document.getElementById("lname")
    let email = document.getElementById("Ename")
    let sub = document.getElementById("subject")

    firstname = firstname.value
    lastname = lastname.value
    email = email.value
    sub = sub.value

    //

    let mainsub = "----" + firstname + " " + lastname + "-------" + "\n" + sub
    atlast="mailto:salessupport@skrobotics.in ?cc=mmotani@skgroup.com &bcc=mmotani@skgroup.com & subject= "+mainsub+"\n"+email;


   window.location.href=atlast
    console.log(mainsub)


}





