function onClickMenu() {
  document.getElementById("hamburger").classList.toggle("change");
  document.getElementById("menu").classList.toggle("d-block");
  document.getElementById("menu-bg").classList.toggle("change-bg");
}


function accountMenu() {
  // document.getElementById("account-inner-menu").classList.toggle("d-block");
  let style = document.getElementById("account-inner-menu").style.display;
  console.log("style: ", style)
  if (style === "none") {
    document.getElementById("account-inner-menu").style.display = "block"
    document.getElementById("menu-bg").classList.toggle("longer-h");
  }
  else if (style === "block") {
    document.getElementById("account-inner-menu").style.display = "none";
    document.getElementById("menu-bg").classList.toggle("longer-h");
  }
  
}
