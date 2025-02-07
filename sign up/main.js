function varif(){
  let user=document.getElementById("username").value;
  let mail=document.getElementById("email").value;
  let adr=document.getElementById("adresse").value;
  let pass=document.getElementById("password").value;
  let pass2=document.getElementById("cpass").value;
  if (verif_user(user)== false){
    

  }
}
  function verif_user(ch) {
    const longueurMin = 6;
    const longueurMax = 20;
    const regex = /^[a-zA-Z0-9._-]+$/;
    if (ch.length < longueurMin || ch.length > longueurMax) {
      return false;
    }else if (!regex.test(ch)) {
        return false;
    }
    return true;
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
function verif_mp1(ch) {
  let i = 0;
  while (i < ch.length) {
      let char = ch.charAt(i).toUpperCase();
      if ((char >= 'A' && char <= 'Z') || (ch.charAt(i) >= "0" && ch.charAt(i) <= "9") || (ch.charAt(i) == ".")) {
          i++;
      } else {
          break;
      }
  }
  return i == ch.length && ch.length >= 8;
}
function verif_mp2(ch, mp1) {
  return verif_mp1(ch) && ch == mp1;
}