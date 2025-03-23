function verif(){
  let user=document.getElementById("username").value;
  let mail=document.getElementById("email").value;
  let adr=document.getElementById("adresse").value;
  let pass=document.getElementById("password").value;
  let pass2=document.getElementById("cpass").value;
  if (!verif_user(user)){
    alert("verifer votre username!!!");
    return false;
  }else if (!verif_mail(mail)){
    alert("verifer votre mail!!!");
    return false;
  }else if (!varif_mp1(pass)){
    alert("verifer votre passwords!!!");
    return false;
  }else if (!varif_mp2(pass2,pass)){
    alert("verifer votre passwords 2!!!");
    return false;
  }
  return true;
}
function verif_user(ch) {
  let f = true;
  let i = 0;
  while (f && i < ch.length) {
      if (!/^[a-zA-Z]+$/.test(ch[i])) {
          f = false;
      }
      i++;
  }
  return f;
}
function verif_mail(ch) {
  const domainesAcceptes = ["@gmail.com", "@outlook.com", "@yahoo.com", "@hotmail.com", "@icloud.com", "@protonmail.com"];
  let pos = ch.indexOf("@");
  if (pos === -1) {
      return false;
  }
  let domaine = ch.substring(pos);
  return domainesAcceptes.includes(domaine);
}

