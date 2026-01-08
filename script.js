window.setTimeout("tampilWaktu()",1000);

function tampilWaktu() {
  var waktu = new Date();
  var hari = waktu.getDate();
  var bulan = waktu.getMonth() + 1;
  var tahun = waktu.getFullYear();
  var jam = waktu.getHours();
  var menit = waktu.getMinutes();
  var detik = waktu.getSeconds();

  document.getElementById("tanggal").innerHTML = hari + "/" + bulan + "/" + tahun;
  document.getElementById("jam").innerHTML = jam + ":" + menit + ":" + detik;

  window.setTimeout("tampilWaktu()",1000);
}

document.addEventListener("DOMContentLoaded", function () {
  const darkBtn = document.getElementById("dark");
  const lightBtn = document.getElementById("light");
  const body = document.body;

  darkBtn.style.display = "block";
  lightBtn.style.display = "block";

  darkBtn.addEventListener("click", function () {
    body.classList.add("dark-mode");
    darkBtn.style.display = "block";
    lightBtn.style.display = "block";
  });

  lightBtn.addEventListener("click", function () {
    body.classList.remove("dark-mode");
    lightBtn.style.display = "block";
    darkBtn.style.display = "block";
  });
});