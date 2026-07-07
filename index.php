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

<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
<link rel="stylesheet" href="style.css">
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

width:700px;
height:55px;
border-radius:50px;
overflow:hidden;
background:white;
box-shadow:0 5px 20px rgba(0,0,0,.08);

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
    background:#b08d57;
    width:70px;
    border-radius:0;
    cursor:pointer;
}

.header-icons{
    display:flex;
    gap:20px;
    font-size:24px;
}

.header-icons a {
    text-decoration: none;
    color: #8c6a43;
}

.menu-nav{
    background: #ffb300;
    display:flex;
    justify-content:center;
    gap:40px;
    padding:15px;
    border-top:1px solid #e8d9d1;
}

.menu-nav a{
    text-decoration: none;
    color:#4a403a;
    font-weight:500;
    font-size:17px;
    transition:.3s;
}

.menu-nav a:hover{
    color:#a67c52;
}

:root{
    --gold:#D4AF37;
    --dark:#0F0F0F;
    --card:#171717;
    --white:#F8F6F2;
    --gray:#CFCFCF;
}

body{
    margin:0;
    font-family:'Montserrat',sans-serif;
    background:linear-gradient(to bottom, #f7f3ee, #fdfbf8);
    color:#4a403a;
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

.blob, .blob2{
    display:none;
}

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

h1,h2,h3{
    font-family:'Cormorant Garamond',serif;
    color:#4a403a;
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

.glass{
    width:100%;
    max-width:700px;
    background:rgba(255,255,255,.85);
    backdrop-filter:blur(20px);
    border:1px solid #e8d9d1;
    border-radius:25px;
    padding:35px;
    box-sizing:border-box;
    box-shadow: 0 15px 40px rgba(0,0,0,.05);
}

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
    background:linear-gradient(135deg, #D4AF37, #F5D76E);
    color:#111;
}

.primary:hover{
    box-shadow:0 10px 25px rgba(212,175,55,.4);
}

.secondary{
    background:#eae3da;
    color:#4a403a;
    border:1px solid #e8d9d1;
}

.product-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(220px,1fr));
    gap:20px;
    margin-top:20px;
    width:100%;
}

.card{
    background: white;
    border:1px solid #e8d9d1;
    border-radius:20px;
    overflow:hidden;
    transition:.3s;
    padding-bottom: 15px;
}

.card:hover{
    transform:translateY(-8px);
    box-shadow:0 15px 30px rgba(0,0,0,0.05);
}

.card img{
    width:100%;
    height:220px;
    object-fit:cover;
}

.card h3{
    color:#6f5643;
    margin-top:15px;
}

.card p{
    color:#D4AF37;
    font-weight: 600;
}

input, textarea{
    width:100%;
    padding:14px;
    border-radius:15px;
    border:1px solid #e8d9d1;
    background:#ffffff;
    color:#4a403a;
    margin:8px 0;
    box-sizing:border-box;
    font-family:'Montserrat',sans-serif;
    outline: none;
}

#cardPreview{
    background:#fdfbf8 !important;
    border:1px solid #e8d9d1 !important;
    border-radius:20px;
    padding:25px !important;
    margin-top:20px;
    color:#4a403a;
}

#displayFlower{
    margin:15px 0;
}

.flower-picker span{
    font-size:35px;
    cursor:pointer;
    transition:.3s;
    display: inline-block;
}

.flower-picker span:hover{
    transform:scale(1.3);
}

ul{
    text-align:left;
    padding-left:20px;
    list-style: none;
}

li{
    margin:12px 0;
    padding: 10px;
    border-bottom: 1px solid #e8d9d1;
}

#notif{
    position:fixed;
    top:50%;
    left:50%;
    transform:translate(-50%,-50%) scale(.8);
    background:white;
    color:#4a403a;
    border:1px solid #D4AF37;
    padding:20px 30px;
    border-radius:20px;
    opacity:0;
    transition:.3s;
    z-index:9999;
    box-shadow: 0 10px 25px rgba(0,0,0,0.1);
}

#notif.show{
    opacity:1;
    transform:translate(-50%,-50%) scale(1);
}

::-webkit-scrollbar{
    width:8px;
}

::-webkit-scrollbar-track{
    background:#f7f3ee;
}

::-webkit-scrollbar-thumb{
    background:var(--gold);
    border-radius:10px;
}

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
    transition: .3s;
}

.wa-btn:hover{
    transform:scale(1.1);
}

/* Kategori Card Styling */
.kategori-section-container{
    display:flex;
    justify-content:center;
    align-items:flex-start;
    gap:30px;
    flex-wrap:wrap;
    margin:60px auto;
}

.kategori-card{
    width:320px;
    background:#fff;
    border-radius:25px;
    overflow:hidden;
    cursor:pointer;
    text-align:center;
    transition:.3s;
}

.kategori-card img{
    width:100%;
    height:260px;
    object-fit:cover;
}

.kategori-card h3{
    padding:20px;
}

.kategori-card:hover{
    transform:translateY(-8px);
}

.kategori-card img{
    width:100%;
    height:260px;
    object-fit:cover;
}

.kategori-card h3{
    padding:20px;
    font-size:36px;
    color:#7b5a42;
    font-family:'Cormorant Garamond',serif;
}

.kategori-card:hover {
    transform: translateY(-5px);
    box-shadow: 0 15px 35px rgba(0,0,0,0.08);
}

.kategori-card img {
    width: 100%;
    height: 240px;
    object-fit: cover;
    border-radius: 15px;
}

.kategori-card h3 {
    font-family: 'Cormorant Garamond', serif;
    font-size: 26px;
    color: #6f5643;
    margin: 15px 0 5px;
}
body{
  font-family: Arial;
  margin: 0;
}

.navbar{
  display: flex;
  justify-content: space-between;
  padding: 15px;
  background: black;
  color: white;
}

.navbar ul{
  display: flex;
  list-style: none;
  gap: 15px;
}

.hero{
  text-align: center;
  padding: 60px;
  background: #f5f5f5;
}

.kategori, .produk{
  padding: 20px;
}

.box-kategori{
  display: flex;
  gap: 10px;
}

.box-kategori div{
  padding: 10px;
  background: #ddd;
  border-radius: 8px;
}

.card{
  border: 1px solid #ccc;
  padding: 10px;
  margin: 10px 0;
}
.rating-section{
    max-width:1100px;
    margin:70px auto;
    text-align:center;
}

.rating-section h2{
    font-size:40px;
    color:#8c6a43;
    margin-bottom:40px;
    font-family:'Cormorant Garamond', serif;
}

.review-card{
    background:#fff;
    border-radius:20px;
    padding:25px;
    margin:20px;
    display:inline-block;
    width:300px;
    box-shadow:0 10px 20px rgba(0,0,0,.08);
    transition:.3s;
}

.review-card:hover{
    transform:translateY(-8px);
}

.review-card h3{
    color:#FFD700;
    font-size:28px;
}

.review-card p{
    color:#666;
    margin:15px 0;
    line-height:1.7;
}

.review-card span{
    font-weight:bold;
    color:#8c6a43;
}
.footer{

margin-top:80px;

padding:60px 20px;

background:#fffaf5;

text-align:center;

border-top:1px solid #ead9cb;

}

.footer h2{

font-size:42px;

font-family:'Cormorant Garamond',serif;

color:#8c6a43;

margin-bottom:15px;

}

.footer-desc{

max-width:700px;

margin:auto;

color:#666;

line-height:1.8;

margin-bottom:35px;

}

.footer-menu{

display:flex;

justify-content:center;

gap:35px;

flex-wrap:wrap;

margin-bottom:35px;

}

.footer-menu a{

text-decoration:none;

color:#8c6a43;

font-weight:600;

}

.footer-menu a:hover{

color:#d4af37;

}

.footer-contact{

line-height:2;

color:#666;

margin-bottom:30px;

}

.footer-social{

display:flex;

justify-content:center;

gap:20px;

margin-bottom:30px;

}

.footer-social a{

background:#D4AF37;

padding:10px 20px;

border-radius:30px;

color:white;

text-decoration:none;

}

.footer-social a:hover{

background:#b98f1d;

}

.copyright{

color:#999;

font-size:14px;

}
</style>
</head>

<body>

<header class="top-header">
  <div class="header-top">
    <div class="logo" onclick="goTo('welcome')" style="cursor: pointer;">
      <span>🌿</span>
      <h2>Rere Florist</h2>
    </div>

    <div class="search-box">
        <input type="text" id="searchInput" placeholder="Cari bunga... ">
        <button onclick="cariProduk()">🔍</button>
    </div>

    <div class="header-icons">
        <a href="profile.php">👤</a>
        <a href="#" onclick="goTo('cart')" class="cart-icon">
            🛒 <span class="badge" id="cartCount" style="background:#d9534f; color:white; border-radius:50%; padding:2px 6px; font-size:12px; font-weight:bold; vertical-align:super;">0</span>
        </a>
    </div>
  </div>

  <nav class="menu-nav">
    <a href="#" onclick="goTo('welcome')">HOME</a>
    <a href="#" onclick="goTo('product')">Bouquet</a>
    <a href="#" onclick="goTo('mood')">Kategori</a>
    <a href="#" onclick="goTo('request')">Custom Card</a>
    <a href="logout.php" onclick="return confirm('Yakin ingin logout?')">LOGOUT</a>
  </nav>
</header>

<div id="notif"><span id="notifText"></span></div>

<a href="https://wa.me/6285283872057" target="_blank" class="wa-btn">
    <i class="fa-brands fa-whatsapp"></i>
</a>

<a href="custom.php" class="btn-custom">

✨ Design Bouquet

</a>s

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
    <button class="secondary" onclick="goTo('product')">Lihat Produk</button>
    <br><br>
    <button class="secondary" onclick="goBack()">← Kembali</button>
  </div>
</div>

<div id="mood" class="page">
  <div class="glass">
    <h2>Pilih Perasaan</h2>
    <button class="secondary" onclick="setMood('romantis')">Romantis</button>
    <button class="secondary" onclick="setMood('bahagia')">Bahagia</button>
    <button class="secondary" onclick="setMood('tenang')">Tenang</button>
    <button class="secondary" onclick="setMood('sedih')">Sedih</button>

    <div id="moodContent" style="margin-top:20px; display: flex; flex-direction: column; align-items: center;"></div>
    <br>
    <button class="secondary" onclick="goBack()">← Kembali</button>
  </div>
</div>

<div id="product" class="page">
  <div class="glass" style="max-width: 1000px;">
    <h2>Produk Kami</h2>

    <div class="product-grid">
      <div class="card">
        <div style="height: 220px; display: flex; align-items: center; justify-content: center; background: #faf8f5; font-size: 40px;">💐</div>
        <h3>Sweet Bouquet</h3>
        <p>Custom Price</p>
        <button class="primary" onclick="goTo('request')">Request</button>
      </div>

      <div class="card">
        <img src="Bridal bouquet.jpg" alt="Bridal Bouquet">
        <h3>Bridal Bouquet</h3>
        <p>Rp 350.000</p>
        <button class="primary" onclick="addCart('Bridal Bouquet',350000)">Pesan</button>
      </div>

      <div class="card">
        <img src="tulip.jpg" alt="Tulip">
        <h3>Tulip</h3>
        <p>Rp 200.000</p>
        <button class="primary" onclick="addCart('Tulip',200000)">Pesan</button>
      </div>

      <div class="card">
        <img src="lily.jpg" alt="Lily">
        <h3>Lily</h3>
        <p>Rp 220.000</p>
        <button class="primary" onclick="addCart('Lily',220000)">Pesan</button>
      </div>

      <div class="card">
        <img src="lavender.jpg" alt="Lavender">
        <h3>Lavender</h3>
        <p>Rp 170.000</p>
        <button class="primary" onclick="addCart('Lavender',170000)">Pesan</button>
      </div>
    </div>

    <br><br>
    <button class="primary" onclick="goTo('cart')">Buka Keranjang</button>
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

    <div style="margin-top: 20px;">
      <button class="primary" onclick="simpanKartu()">Simpan ke Keranjang</button>
      <button class="secondary" onclick="goBack()">Kembali</button>
    </div>
  </div>
</div>

<div id="cart" class="page">
  <div class="glass">
    <h2>Keranjang</h2>

    <ul id="list"></ul>
    <h3 id="total" style="color: var(--gold); text-align: right; margin-bottom: 20px;">Total: 0k</h3>

    <input id="namaPenerima" placeholder="Nama Penerima / Pemesan">
    <input id="waUser" placeholder="Nomor WhatsApp (08xxx)">
    <textarea id="note" placeholder="Catatan tambahan (opsional)"></textarea>
    <input id="tanggal" placeholder="Tanggal kirim (opsional)">

    <div style="margin-top: 20px;">
        <button class="primary" onclick="checkout()">Checkout via WhatsApp</button>
        <button class="secondary" onclick="goBack()">← Kembali</button>
    </div>
  </div>
</div>

<div id="thanks" class="page">
  <div class="glass">
    <h1>Terimakasih 💐</h1>
    <p>Pesanan kamu sudah kami terima dan akan segera diproses 🌸</p>
    <button class="primary" onclick="goTo('welcome')">Kembali ke Home</button>
  </div>
</div>

<div id="isiKategori"></div>

<div class="kategori-section-container">

    <div class="kategori-card" onclick="window.location.href='standing.php'">
        <img src="standing/cover.jpg" alt="Standing Flower Cover">
        <h3>Standing Flower</h3>
    </div>

    <div class="kategori-card" onclick="window.location.href='meja.php'">
        <img src="bunga meja/cover.jpg" alt="Bunga Meja Cover">
        <h3>Bunga Meja</h3>
    </div>

    <div class="kategori-card" onclick="window.location.href='bunga kering.php'">
        <img src="bunga kering/cover.jpg" alt="Bunga Kering Cover">
        <h3>Bunga Kering</h3>
    </div>

</div>
<section style="
margin:70px auto;
max-width:1200px;
background:linear-gradient(135deg,#fff6ef,#fdebd3);
padding:60px;
border-radius:30px;
text-align:center;
">

<h2 style="font-size:50px;color:#8c6a43;">
✨ Design Your Own Bouquet
</h2>

<p style="font-size:18px;color:#666;margin:20px 0 35px;">
Rangkai bouquet impianmu sendiri dengan memilih bunga favoritmu.
</p>

<button
onclick="window.location.href='custom.php'"
style="
padding:15px 40px;
border:none;
border-radius:40px;
background:#D4AF37;
font-size:18px;
font-weight:bold;
cursor:pointer;
">

Mulai Mendesain 💐

</button>
<section class="rating-section">

<h2>⭐ Customer Reviews</h2>

<div class="review-card">
    <h3>★★★★★</h3>
    <p>"Bouquetnya cantik banget, bunganya masih fresh. Recommended!"</p>
    <span>- Amanda</span>
</div>

<div class="review-card">
    <h3>★★★★★</h3>
    <p>"Pelayanan cepat dan hasil rangkaiannya sesuai request."</p>
    <span>- Rizky</span>
</div>

<div class="review-card">
    <h3>★★★★☆</h3>
    <p>"Packaging rapi dan pengirimannya aman."</p>
    <span>- Citra</span>
</div>
<footer class="footer">

<h2>🌸 Rere Florist</h2>

<p class="footer-desc">
Temukan rangkaian bunga terbaik untuk wisuda, ulang tahun,
pernikahan, anniversary, dan berbagai momen spesial.
</p>

<div class="footer-menu">

<a href="index.php">Home</a>

<a href="#kategori">Kategori</a>

<a href="#tentang">Tentang Kami</a>

<a href="custom.php">Design Bouquet</a>

<a href="rating.php">Rating</a>

</div>

<div class="footer-contact">

<p>📍 Sukabumi, Jawa Barat</p>

<p>📞 0852-8387-2057</p>

<p>✉ rereflorist@gmail.com</p>

</div>

<div class="footer-social">

<a href="#">WhatsApp</a>

<a href="#">Instagram</a>

<a href="#">TikTok</a>

</div>

<p class="copyright">

© 2026 Rere Florist • Made with 💐 by Rieffa

</p>

</footer>
</section>

<script>
window.history.forward();
function noBack() {
    window.history.forward();
}
setTimeout("noBack()", 0);
window.onunload = function(){};

// Locate this section inside your index.php <script> tag:
let cart = JSON.parse(localStorage.getItem('rere_florist_cart')) || [];
let historyPage = [];
let totalHargaGlobal = 0;

// Update your main render function to save its changes as items are deleted
const originalRender = render;
render = function() {
    originalRender();
    // Keep localStorage in sync whenever the item count changes
    localStorage.setItem('rere_florist_cart', JSON.stringify(cart));
};

// Listen for when a user goes back to index.php from standing.php
window.addEventListener('pageshow', function() {
    cart = JSON.parse(localStorage.getItem('rere_florist_cart')) || [];
    render();
});

// Run an immediate render pass when the application starts up
document.addEventListener("DOMContentLoaded", function() {
    render();
});

function goTo(p){
  historyPage.push(p);
  document.querySelectorAll('.page').forEach(x=>x.classList.remove('active'));
  let target = document.getElementById(p);
  if(target) {
     target.classList.add('active');
  }
}

function goBack(){
  if(historyPage.length > 1) {
    historyPage.pop(); 
    let last = historyPage[historyPage.length - 1];
    document.querySelectorAll('.page').forEach(x=>x.classList.remove('active'));
    
    let target = document.getElementById(last);
    if(target) {
       target.classList.add('active');
    }
  } else {
    document.querySelectorAll('.page').forEach(x=>x.classList.remove('active'));
    document.getElementById('welcome').classList.add('active');
  }
}

function notif(text){
  let n=document.getElementById('notif');
  document.getElementById('notifText').innerText=text;
  n.classList.add('show');
  setTimeout(()=>n.classList.remove('show'),1500);
}

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

function hapus(idx) {
    cart.splice(idx, 1);
    render();
}

function render(){
  let list=document.getElementById('list');
  totalHargaGlobal=0;
  list.innerHTML="";

  cart.forEach((i,idx)=>{
    totalHargaGlobal+=i.h;
    list.innerHTML+=`
    <li style="display: flex; justify-content: space-between; align-items: center;">
      <span>${i.n} - <strong>${i.h ? (i.h/1000)+'k' : 'Custom/Free'}</strong></span>
      <button class="secondary" style="padding: 5px 10px; margin: 0; border-radius: 10px;" onclick="hapus(${idx})">❌</button>
    </li>`;
  });

  document.getElementById('total').innerText = "Total: " + (totalHargaGlobal/1000) + "k";
  document.getElementById('cartCount').innerText = cart.length;
}

function checkout(){
  let nama=document.getElementById('namaPenerima').value;
  let nomor=document.getElementById('waUser').value;
  let note=document.getElementById('note').value;
  let tgl=document.getElementById('tanggal').value;

  if(!nama){alert("Isi nama penerima dulu");return;}
  if(!nomor){alert("Isi nomor WhatsApp dulu");return;}
  if(cart.length === 0){alert("Keranjang masih kosong");return;}

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

  let pesan="Halo Rere Florist 🌸%0A%0APesanan Baru:%0A";
  cart.forEach(i=>pesan+="- "+i.n+"%0A");
  
  pesan+="%0A%0ATotal: "+(totalHargaGlobal/1000)+"k";
  if(note) pesan+="%0ACatatan: "+note;
  if(tgl) pesan+="%0ATanggal kirim: "+tgl;

  if(nomor.startsWith("0")) {
     nomor = "62" + nomor.substring(1);
  }

  window.open("https://wa.me/6285283872057?text="+encodeURIComponent(pesan));
  
  cart = [];
  render();
  goTo('thanks');
}

function setMood(m){
  const d={
    romantis:{n:"Mawar 🌹",img:"mawar.jpg",d:"Simbol cinta tulus dan mendalam—pilihan klasik untuk ungkapkan perasaan."},
    bahagia:{n:"Tulip 🌷",img:"tulip.jpg",d:"Warna cerahnya membawa energi bahagia dan harapan baru."},
    tenang:{n:"Lily 🤍",img:"lily.jpg",d:"Elegan dan damai—cocok untuk suasana menenangkan."},
    sedih:{n:"Lavender 💜",img:"lavender.jpg",d:"Lembut dan menenangkan—menemani di saat hati sendu."}
  };
  document.getElementById('moodContent').innerHTML=
  `<h3 style="margin: 10px 0;">${d[m].n}</h3>
   <img src="${d[m].img}" width="150" style="object-fit: cover; border-radius: 15px; margin: 10px 0;" alt="${d[m].n}">
   <p style="max-width: 400px; text-align: center;">${d[m].d}</p>`;
}

function cariProduk(){
    let keyword = document.getElementById("searchInput").value.toLowerCase();
    goTo("product");

    let cards = document.querySelectorAll(".product-grid .card");
    cards.forEach(card=>{
        let h3Element = card.querySelector("h3");
        if(h3Element) {
            let nama = h3Element.innerText.toLowerCase();
            if(nama.includes(keyword)){
                card.style.display="block";
            }else{
                card.style.display="none";
            }
        }
    });
}

function showKategori(kategori){
    let isi = document.getElementById("isiKategori");
    if(!isi) return;
    
    if(kategori=="standing"){
        isi.innerHTML = `
        <div style="display: flex; flex-direction: column; align-items: center; justify-content: center; width: 100%; max-width: 1000px; margin: 40px auto; text-align: center;">
            <h2 style="font-size: 38px; color: #6f5643; margin-bottom: 25px; font-family: 'Cormorant Garamond', serif;">
                Standing Flower
            </h2>
            <div class="product-grid" style="display: grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap: 25px; width: 100%;">
                <div class="card" style="background: white; border: 1px solid #e8d9d1; border-radius: 20px; overflow: hidden; padding-bottom: 20px; box-shadow: 0 5px 15px rgba(0,0,0,0.02); text-align: center;">
                    <img src="standing/cover.jpg" style="width: 100%; height: 250px; object-fit: cover;">
                    <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 24px; color: #6f5643; margin: 15px 0 5px;">Standing Rose Premium</h3>
                    <p style="font-weight: 600; color: #D4AF37; margin-bottom: 15px;">Rp 750.000</p>
                    <button class="primary" onclick="addCart('Standing Rose Premium', 750000)">Tambah Keranjang</button>
                </div>
                <div class="card" style="background: white; border: 1px solid #e8d9d1; border-radius: 20px; overflow: hidden; padding-bottom: 20px; box-shadow: 0 5px 15px rgba(0,0,0,0.02); text-align: center;">
                    <img src="standing/standing2.jpg" style="width: 100%; height: 250px; object-fit: cover;">
                    <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 24px; color: #6f5643; margin: 15px 0 5px;">Standing Lily Elegant</h3>
                    <p style="font-weight: 600; color: #D4AF37; margin-bottom: 15px;">Rp 850.000</p>
                    <button class="primary" onclick="addCart('Standing Lily Elegant', 850000)">Tambah Keranjang</button>
                </div>
                <div class="card" style="background: white; border: 1px solid #e8d9d1; border-radius: 20px; overflow: hidden; padding-bottom: 20px; box-shadow: 0 5px 15px rgba(0,0,0,0.02); text-align: center;">
                    <img src="standing/standing3.jpg" style="width: 100%; height: 250px; object-fit: cover;">
                    <h3 style="font-family: 'Cormorant Garamond', serif; font-size: 24px; color: #6f5643; margin: 15px 0 5px;">Standing Mix Flower</h3>
                    <p style="font-weight: 600; color: #D4AF37; margin-bottom: 15px;">Rp 950.000</p>
                    <button class="primary" onclick="addCart('Standing Mix Flower', 950000)">Tambah Keranjang</button>
                </div>
            </div>
        </div>`;
    }
}
</script>
</body>
</html>
