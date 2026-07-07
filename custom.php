<!DOCTYPE html>
<html lang="en">

<head>

<meta charset="UTF-8">

<title>Design Bouquet</title>
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@600;700&family=Montserrat:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="custom.css">

</head>

<body>

<header>

<a href="index.php" class="back">
← Kembali
</a>

<div class="hero-title">
<h1>Design Your Own Bouquet</h1>
<p>Create your own bouquet</p>
</div>

</header>

<div class="container">

<div class="sidebar">

<h2>🌸 Flowers</h2>

<div class="flower-list">

<img src="flowers/1.png" onclick="addFlower('flowers/1.png')">

<img src="flowers/2.png" onclick="addFlower('flowers/2.png')">

<img src="flowers/3.png" onclick="addFlower('flowers/3.png')">

<img src="flowers/4.png" onclick="addFlower('flowers/4.png')">

<img src="flowers/5.png" onclick="addFlower('flowers/5.png')">

<img src="flowers/6.png" onclick="addFlower('flowers/6.png')">

</div>

<h2>🎀 Wrapping</h2>

<div class="wrap-list">

<img src="wrapping/w1.png" onclick="changeWrap('wrapping/w1.png')">

<img src="wrapping/w2.png" onclick="changeWrap('wrapping/w2.png')">

</div>

</div>



<div class="workspace">

<div id="canvas">

<div id="flowerArea"></div>

<img
id="wrap"
src="wrapping/w1.png"
class="wrap">

</div>

<button onclick="download()">

Download Bouquet

</button>

</div>

</div>

<script src="https://html2canvas.hertzen.com/dist/html2canvas.min.js"></script>

<script src="custom.js"></script>

</body>

</html>