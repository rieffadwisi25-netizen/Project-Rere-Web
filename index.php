<?php
session_start();

if(!isset($_SESSION['user'])){
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Rere Florist</title>

<link href="https://fonts.googleapis.com/css2?family=Playfair+Display&family=Poppins&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<style>
  

.top-header{
    position:fixed;
    top:0;
    left:0;
    right:0;
    z-index:999;
}

.header-top{
    background:#ffffff;
    padding:20px 50px;
    display:flex;
    align-items:center;
    justify-content:space-between;
}

.menu-nav{
    background:#fcfaf7;
    border-top:1px solid #e8d9d1;
}

.logo{
    display:flex;
    align-items:center;
    gap:10px;
}

.logo span{
    font-size:40px;
}

.logo h2{
    color:#8c6a43;
    margin:0;
    font-size:42px;
    font-family:'Cormorant Garamond',serif;
}

.search-box{
    width:50%;
    display:flex;
    overflow:hidden;
    border-radius:50px;
    background:white;
}

.search-box input{
    flex:1;
    border:none;
    padding:15px 20px;
    outline:none;
    background:white;
    color:black;
}

.search-box button{
    border:none;
    background:#ffb300;
    width:70px;
    border-radius:0;
}

.header-icons{
    display:flex;
    gap:20px;
    font-size:24px;
    color:white;
}

.menu-nav{
    background:gold;
    display:flex;
    justify-content:center;
    gap:40px;
    padding:15px;
    border-top:1px solid rgba(255,255,255,.2);
}

.menu-nav a{
    color:#4a403a;
    font-weight:500;
    font-size:17px;
    transition:.3s;
}

.menu-nav a:hover{
    color:#a67c52;
}
@import url('https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;700&family=Montserrat:wght@300;400;500;600&display=swap');

:root{
    --gold:#D4AF37;
    --dark:#0F0F0F;
    --card:#171717;
    --white:#F8F6F2;
    --gray:#CFCFCF;
}

/* ===== BODY ===== */
body{
    margin:0;
    font-family:'Montserrat',sans-serif;
     background:linear-gradient(
        to bottom,
        #f7f3ee,
        #fdfbf8
    );
    color:var(--white);
    overflow-x:hidden;
    position:relative;
}

body::before{
    content:"";
    position:fixed;
    inset:0;
    background:url('mawar.jpg') center center/cover no-repeat;
    opacity:.05;
    z-index:-2;
}

body::after{
    content:"";
    position:fixed;
    inset:0;
    background:
    radial-gradient(circle at 20% 20%, rgba(212,175,55,.12), transparent 40%),
    radial-gradient(circle at 80% 80%, rgba(212,175,55,.08), transparent 40%);
    z-index:-1;
}

/* ===== REMOVE BLOB ===== */
.blob,
.blob2{
    display:none;
}

/* ===== NAVBAR ===== */
.navbar{
    position:fixed;
    top:0;
    left:0;
    right:0;
    display:flex;
    justify-content:space-between;
    align-items:center;
    padding:15px 30px;
    background:rgba(10,10,10,.95);
    backdrop-filter:blur(20px);
    border-bottom:1px solid rgba(212,175,55,.2);
    z-index:999;
}

.navbar b{
    font-family:'Cormorant Garamond',serif;
    font-size:30px;
    letter-spacing:3px;
    color:var(--gold);
}

/* ===== PAGE ===== */
.page{
    display:none;
    min-height:100vh;
    padding:180px 20px 40px;
    text-align:center;
    box-sizing:border-box;
}

.active{
    display:flex;
    flex-direction:column;
    align-items:center;
    justify-content:center;
}

/* ===== TYPOGRAPHY ===== */
h1,h2,h3{
    font-family:'Cormorant Garamond',serif;
    color:#4a403a; /* soft brown elegan */
}

h1{
    font-size:70px;
    color:#6f5643;
    letter-spacing:4px;
    text-transform:uppercase;
}

h2{
    font-size:42px;
}

p{
    color:#6b625d;
    line-height:1.8;
}

/* ===== GLASS CARD ===== */
.glass{
    width:100%;
    max-width:700px;
    background:rgba(255,255,255,.04);
    backdrop-filter:blur(20px);
    border:1px solid rgba(212,175,55,.2);
    border-radius:25px;
    padding:35px;
    box-sizing:border-box;
    box-shadow:
    0 15px 40px rgba(0,0,0,.4);
}

/* ===== BUTTON ===== */
button{
    border:none;
    padding:12px 28px;
    border-radius:30px;
    cursor:pointer;
    font-weight:600;
    transition:.3s;
    font-family:'Montserrat',sans-serif;
}

button:hover{
    transform:translateY(-3px);
}

.primary{
    background:linear-gradient(
        135deg,
        #D4AF37,
        #F5D76E
    );
    color:#111;
}

.primary:hover{
    box-shadow:0 10px 25px rgba(212,175,55,.4);
}

.secondary{
    background:#242424;
    color:white;
    border:1px solid rgba(212,175,55,.2);
}

/* ===== PRODUCT GRID ===== */
.product-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:20px;
    margin-top:20px;
    width:100%;
}

/* ===== PRODUCT CARD ===== */
.card{
    background:#171717;
    border:1px solid rgba(212,175,55,.15);
    border-radius:20px;
    overflow:hidden;
    transition:.3s;
}

.card:hover{
    transform:translateY(-8px);
    box-shadow:0 15px 30px rgba(0,0,0,.4);
}

.card img{
    width:100%;
    height:220px;
    object-fit:cover;
}

.card h3{
    color:var(--gold);
    margin-top:15px;
}

.card p{
    color:#ddd;
}

/* ===== INPUT ===== */
input,
textarea{
    width:100%;
    padding:14px;
    border-radius:15px;
    border:1px solid rgba(212,175,55,.2);
    background:#101010;
    color:white;
    margin:8px 0;
    box-sizing:border-box;
    font-family:'Montserrat',sans-serif;
}

input::placeholder,
textarea::placeholder{
    color:#999;
}

/* ===== CARD PREVIEW ===== */
#cardPreview{
    background:#111 !important;
    border:1px solid rgba(212,175,55,.3) !important;
    border-radius:20px;
    padding:25px !important;
    margin-top:20px;
    color:white;
}

#displayFlower{
    margin:15px 0;
}

/* ===== FLOWER PICKER ===== */
.flower-picker span{
    font-size:35px;
    cursor:pointer;
    transition:.3s;
}

.flower-picker span:hover{
    transform:scale(1.3);
}

/* ===== CART ===== */
ul{
    text-align:left;
    padding-left:20px;
}

li{
    margin:12px 0;
}

/* ===== NOTIFICATION ===== */
#notif{
    position:fixed;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%) scale(.8);
    background:#171717;
    color:white;
    border:1px solid rgba(212,175,55,.2);
    padding:20px 30px;
    border-radius:20px;
    opacity:0;
    transition:.3s;
    z-index:9999;
}

#notif.show{
    opacity:1;
    transform:translate(-50%,-50%) scale(1);
}

/* ===== SCROLLBAR ===== */
::-webkit-scrollbar{
    width:8px;
}

::-webkit-scrollbar-track{
    background:#111;
}

::-webkit-scrollbar-thumb{
    background:var(--gold);
    border-radius:10px;
}
/* ===== WHATSAPP FLOATING ===== */

.wa-btn{
    position:fixed;
    right:20px;
    bottom:20px;

    width:60px;
    height:60px;

    background:#25D366;
    color:white;

    border-radius:50%;

    display:flex;
    justify-content:center;
    align-items:center;

    text-decoration:none;
    font-size:30px;

    box-shadow:0 4px 15px rgba(0,0,0,.2);

    z-index:9999;
}

.wa-btn:hover{
    transform:scale(1.1);
}
</style>
</head>

<body>


<header class="top-header">

  <div class="header-top">

    <div class="logo">
      <span>🌿</span>
      <h2>Rere Florist</h2>
    </div>

    <div class="search-box">

<input
type="text"
id="searchInput"
placeholder="Cari bunga... ">

<button onclick="cariProduk()">
🔍
</button>

</div>
<a
href="https://wa.me/6285283872057"
target="_blank"
class="wa-btn">

<i class="fa-brands fa-whatsapp"></i>

</a>
    <div class="header-icons">

    <a href="profile.php">
        👤
    </a>

    <a href="#" onclick="goTo('cart')" class="cart-icon">
    🛒
    <span class="badge" id="cartCount">
        0
    </span>
</a>

</div>
  </div>

  <nav class="menu-nav">
    <a href="#" onclick="goTo('welcome')">HOME</a>
    <a href="#" onclick="goTo('product')">Bouquet</a>
    <a href="#" onclick="goTo('mood')">Kategori</a>
    <a href="#" onclick="goTo('request')">Custom Card</a>
    <a
href="logout.php"
onclick="return confirm('Yakin ingin logout?')">

LOGOUT

</a>
  </nav>

</header>
<div id="notif"><span id="notifText"></span></div>

<div id="welcome" class="page active">
  <div class="glass">
    <h1>RERE FLORIST</h1>
<p>Luxury Floral Arrangements For Every Special Moment</p>
    <button class="primary" onclick="goTo('landing')">Masuk ke Dunia Bunga</button>
  </div>
</div>

<div id="landing" class="page">
  <div class="glass">
    <h1>Pesan Bunga Mudah & Cepat</h1>
    <p>Kirim bunga dengan makna, bukan sekadar hadiah.</p>
    <button class="primary" onclick="goTo('mood')">Pilih Perasaan</button>
    <button onclick="goTo('product')">Lihat Produk</button>
    <br>
    <button class="secondary" onclick="goBack()">← Kembali</button>
  </div>
</div>

<div id="mood" class="page">
  <div class="glass">
    <h2>Pilih Perasaan</h2>
    <button onclick="setMood('romantis')">Romantis</button>
    <button onclick="setMood('bahagia')">Bahagia</button>
    <button onclick="setMood('tenang')">Tenang</button>
    <button onclick="setMood('sedih')">Sedih</button>

    <div id="moodContent" style="margin-top:10px"></div>

    <br>
    <button class="secondary" onclick="goBack()">← Kembali</button>
  </div>
</div>

<div id="product" class="page">
  <div class="glass">
    <h2>Produk Kami</h2>

    <div class="product-grid">
      <div class="card">
        <h3>Sweet Bouquet</h3>
        <p>Custom 💐</p>
        <button onclick="goTo('request')">Request</button>
      </div>

      <div class="card">
        <img src="Bridal bouquet.jpg" alt="Bridal Bouquet">
        <h3>Bridal Bouquet</h3>
        <p>350k</p>
        <button onclick="addCart('Bridal Bouquet',350000)">Pesan</button>
      </div>

      <div class="card">
        <img src="tulip.jpg" alt="Tulip">
        <h3>Tulip</h3>
        <p>200k</p>
        <button onclick="addCart('Tulip',200000)">Pesan</button>
      </div>

      <div class="card">
        <img src="lily.jpg" alt="Lily">
        <h3>Lily</h3>
        <p>220k</p>
        <button onclick="addCart('Lily',220000)">Pesan</button>
      </div>

      <div class="card">
        <img src="lavender.jpg" alt="Lavender">
        <h3>Lavender</h3>
        <p>170k</p>
        <button onclick="addCart('Lavender',170000)">Pesan</button>
      </div>
    </div>

    <br>
    <button class="primary" onclick="goTo('cart')">Keranjang</button>
    <br>
    <button class="secondary" onclick="goBack()">← Kembali</button>
  </div>
</div>

<div id="request" class="page">
  <div class="glass">
    <h2>Design Your Card</h2>
    <input id="inputTo" placeholder="To:" oninput="updatePreview()">
    <textarea id="inputMsg" placeholder="Message:" oninput="updatePreview()"></textarea>
    
    <p>Pick flower:</p>
    <div class="flower-picker">
      <span data-emoji="🌹" onclick="selectFlower('🌹')">🌹</span>
      <span data-emoji="🌷" onclick="selectFlower('🌷')">🌷</span>
      <span data-emoji="🌼" onclick="selectFlower('🌼')">🌼</span>
      <span data-emoji="✨" onclick="selectFlower('✨')">✨</span>
    </div>
    
    <div id="cardPreview">
      <h3 id="displayTo">To: ...</h3>
      <div id="displayFlower" style="font-size:50px;">🌸</div>
      <p id="displayMsg" style="font-style:italic;">...</p>
    </div>

    <div style="margin-top: 15px;">
      <button class="primary" onclick="simpanKartu()">Simpan ke Keranjang</button>
      <button class="secondary" onclick="goBack()">Kembali</button>
    </div>
  </div>
</div>

<div id="cart" class="page">
  <div class="glass">
    <h2>Keranjang</h2>

    <ul id="list"></ul>
    <p id="total" style="font-weight: bold;"></p>

    <input id="namaPenerima" placeholder="Nama Penerima / Pemesan">
    <input id="waUser" placeholder="Nomor WhatsApp (08xxx)">
    <textarea id="note" placeholder="Catatan tambahan (opsional)"></textarea>
    <input id="tanggal" placeholder="Tanggal kirim (opsional)">

    <button class="primary" onclick="checkout()">Checkout</button>
    <br>
    <button class="secondary" onclick="goBack()">← Kembali</button>
  </div>
</div>

<div id="thanks" class="page">
  <div class="glass">
    <h1>Terimakasih 💐</h1>
    <p>Pesanan kamu sudah kami terima dan akan segera diproses 🌸</p>
    <button onclick="goTo('welcome')">Kembali ke Home</button>
  </div>
</div>

<script>
 
window.history.forward();
function noBack() {
    window.history.forward();
}
setTimeout("noBack()", 0);
window.onunload = function(){};

let cart=[];
let historyPage=[];
let flowerInterval;
let totalHargaGlobal = 0;


function goTo(p){
  historyPage.push(p);
  document.querySelectorAll('.page').forEach(x=>x.classList.remove('active'));
  let target = document.getElementById(p);
  if(target) {
     target.classList.add('active');
  }

  if(p==="welcome" || p==="thanks"){ startFlower(); }
  else{ stopFlower(); }
}

function goBack(){
  if(historyPage.length > 1) {
    historyPage.pop(); 
    let last = historyPage[historyPage.length - 1];
    document.querySelectorAll('.page').forEach(x=>x.classList.remove('active'));
    
    let target = document.getElementById(last);
    if(target) {
       target.classList.add('active');
       if(last==="welcome" || last==="thanks"){ startFlower(); }
       else{ stopFlower(); }
    }
  } else {
    document.querySelectorAll('.page').forEach(x=>x.classList.remove('active'));
    document.getElementById('welcome').classList.add('active');
    startFlower();
  }
}


/* ===== NOTIF ===== */
function notif(text){
  let n=document.getElementById('notif');
  document.getElementById('notifText').innerText=text;
  n.classList.add('show');
  setTimeout(()=>n.classList.remove('show'),1500);
}

/* ===== CART ===== */
function addCart(n,h){
  cart.push({n,h});
  render();
  notif("💐 Berhasil ditambahkan ke keranjang!");
}

function updatePreview(){
  document.getElementById('displayTo').innerText = "To: " + (document.getElementById('inputTo').value || '...');
  document.getElementById('displayMsg').innerText = document.getElementById('inputMsg').value || '...';
}

function selectFlower(emoji){
  document.getElementById('displayFlower').innerText = emoji;
}

function simpanKartu(){
  let to = document.getElementById('inputTo').value;
  let msg = document.getElementById('inputMsg').value;
  let bunga = document.getElementById('displayFlower').innerText;
  
  if(!to) { alert("Isi penerima dulu ya!"); return; }
  
  cart.push({ n: `Kartu ${bunga} untuk ${to}: ${msg}`, h: 0 });
  render();
  notif("✅ Kartu sudah masuk keranjang!");
  
  document.getElementById('inputTo').value = '';
  document.getElementById('inputMsg').value = '';
  document.getElementById('displayTo').innerText = 'To: ...';
  document.getElementById('displayMsg').innerText = '...';
  document.getElementById('displayFlower').innerText = '🌸';
  
  goTo('cart');
}

function render(){

  let list=document.getElementById('list');

  totalHargaGlobal=0;

  list.innerHTML="";

  cart.forEach((i,idx)=>{

    totalHargaGlobal+=i.h;

    list.innerHTML+=`
    <li>
      ${i.n}
      -
      ${i.h ? (i.h/1000)+'k' : 'Custom/Free'}

      <button onclick="hapus(${idx})">
      ❌
      </button>
    </li>`;
  });

  document.getElementById('total').innerText =
  "Total: " + (totalHargaGlobal/1000) + "k";

  document.getElementById('cartCount').innerText =
  cart.length;
}

/* ===== CHECKOUT DATABASE & WA ===== */
function checkout(){
  let nama=document.getElementById('namaPenerima').value;
  let nomor=document.getElementById('waUser').value;
  let note=document.getElementById('note').value;
  let tgl=document.getElementById('tanggal').value;

  if(!nama){alert("Isi nama penerima dulu");return;}
  if(!nomor){alert("Isi nomor WhatsApp dulu");return;}
  if(cart.length === 0){alert("Keranjang masih kosong");return;}

  // 1. Kirim Data ke MySQL (checkout.php)
  let formData = new URLSearchParams();
  formData.append('nama_penerima', nama);
  formData.append('nomor_wa', nomor);
  formData.append('catatan', note);
  formData.append('tanggal_kirim', tgl);
  formData.append('total', totalHargaGlobal);

  fetch("checkout.php", {
    method: "POST",
    headers: { "Content-Type": "application/x-www-form-urlencoded" },
    body: formData.toString()
  })
  .then(res => res.json())
  .then(data => console.log("Database Sync:", data))
  .catch(err => console.error("Error database:", err));

  // 2. Redirect ke WhatsApp
  let pesan="Halo Rere Florist 🌸%0A%0APesanan Baru:%0A";
  cart.forEach(i=>pesan+="- "+i.n+"%0A");
  
  pesan+="%0A%0ATotal: "+(totalHargaGlobal/1000)+"k";
  if(note) pesan+="%0ACatatan: "+note;
  if(tgl) pesan+="%0ATanggal kirim: "+tgl;

  if(nomor.startsWith("0")) {
     nomor = "62" + nomor.substring(1);
  }

  window.open("https://wa.me/"+nomor+"?text="+encodeURIComponent(pesan));
  
  cart = [];
  render();
  goTo('thanks');
}

/* ===== MOOD ===== */
function setMood(m){
  const d={
    romantis:{n:"Mawar 🌹",img:"mawar.jpg",d:"Simbol cinta tulus dan mendalam—pilihan klasik untuk ungkapkan perasaan."},
    bahagia:{n:"Tulip 🌷",img:"tulip.jpg",d:"Warna cerahnya membawa energi bahagia dan harapan baru."},
    tenang:{n:"Lily 🤍",img:"lily.jpg",d:"Elegan dan damai—cocok untuk suasana menenangkan."},
    sedih:{n:"Lavender 💜",img:"lavender.jpg",d:"Lembut dan menenangkan—menemani di saat hati sendu."}
  };
  document.getElementById('moodContent').innerHTML=
  `<h3>${d[m].n}</h3>
   <img src="${d[m].img}" width="120" alt="${d[m].n}">
   <p>${d[m].d}</p>`;
}

function filterProduk(){

    let kategori =
    document.getElementById('kategoriSelect').value;

    let cards =
    document.querySelectorAll('.product-grid .card');

    cards.forEach(card=>{

        let kategoriCard =
        card.dataset.kategori;

        if(
            kategori === "all" ||
            kategori === kategoriCard
        ){
            card.style.display = "block";
        }
        else{
            card.style.display = "none";
        }

    });

    goTo('product');
}
function cariProduk(){

    let keyword =
    document.getElementById("searchInput")
    .value
    .toLowerCase();

    goTo("product");

    let cards =
    document.querySelectorAll(".product-grid .card");

    cards.forEach(card=>{

        let nama =
        card.querySelector("h3")
        .innerText
        .toLowerCase();

        if(nama.includes(keyword)){
            card.style.display="block";
        }else{
            card.style.display="none";
        }

    });

}
startFlower();
</script>
<section id="tentang" class="about-section">

<h2>Tentang Kami</h2>

<p>
Rere Florist hadir untuk membantu setiap momen berharga menjadi lebih istimewa melalui rangkaian bunga yang dibuat dengan penuh ketelitian dan sentuhan estetika.
</p>

<p>
Kami menyediakan berbagai pilihan bouquet, flower box, dan rangkaian bunga premium yang cocok untuk hadiah, wisuda, ulang tahun, pernikahan, maupun ungkapan kasih sayang.
</p>

<p>
Dengan mengutamakan kualitas bunga segar dan desain yang elegan, kami percaya bahwa setiap bunga memiliki cerita yang layak untuk disampaikan.
</p>

</section>


</section>
</body>
</html>