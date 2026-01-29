// بعد 4 ثواني ينقلك للصفحة الرئيسية
setTimeout(() => {
  document.getElementById("splash").style.display = "none";
  document.getElementById("main").style.display = "block";
}, 4000);
