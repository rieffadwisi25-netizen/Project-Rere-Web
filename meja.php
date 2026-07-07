<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bunga Meja</title>

    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

    <style>
        .product-page-container{
            padding:50px 20px;
            max-width:1200px;
            margin:auto;
            text-align:center;
            font-family:'Montserrat',sans-serif;
        }

        .back-link{
            display:inline-block;
            text-decoration:none;
            margin-bottom:30px;
            font-weight:500;
        }

        h1,h3{
            font-family:'Cormorant Garamond',serif;
            color:#4a403a;
        }

        h1{
            font-size:50px;
            color:#6f5643;
        }

        .product-grid{
            display:grid;
            grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
            gap:25px;
            width:100%;
            margin-top:20px;
        }

        .card{
            background:white;
            border:1px solid #e8d9d1;
            border-radius:20px;
            overflow:hidden;
            padding-bottom:20px;
            box-shadow:0 5px 15px rgba(0,0,0,.02);
            transition:.3s;
        }

        .card:hover{
            transform:translateY(-5px);
            box-shadow:0 15px 30px rgba(0,0,0,.05);
        }

        .card img{
            width:100%;
            height:250px;
            object-fit:cover;
        }

        .card p{
            font-weight:600;
            color:#D4AF37;
            margin-bottom:15px;
        }

        button{
            border:none;
            padding:12px 28px;
            border-radius:30px;
            cursor:pointer;
            font-weight:600;
            font-family:'Montserrat',sans-serif;
            transition:.3s;
        }

        .primary{
            background:linear-gradient(135deg,#D4AF37,#F5D76E);
            color:#111;
        }

        .primary:hover{
            transform:translateY(-3px);
            box-shadow:0 10px 25px rgba(212,175,55,.4);
        }

        .secondary{
            background:#eae3da;
            color:#4a403a;
            border:1px solid #e8d9d1;
        }

        #notif{
            position:fixed;
            top:50%;
            left:50%;
            transform:translate(-50%,-50%);
            background:white;
            color:#4a403a;
            border:1px solid #D4AF37;
            padding:20px 30px;
            border-radius:20px;
            display:none;
            z-index:9999;
            box-shadow:0 10px 25px rgba(0,0,0,.1);
            font-weight:600;
        }
    </style>

</head>
<body>

<div id="notif">
    <span id="notifText"></span>
</div>

<div class="product-page-container">

    <a href="index.php" class="back-link secondary">
        ← Kembali
    </a>

    <div class="glass" style="margin:0 auto;background:rgba(255,255,255,.85);backdrop-filter:blur(10px);padding:30px;border-radius:25px;border:1px solid #e8d9d1;">

        <h1>Bunga Meja</h1>

        <p style="margin-bottom:30px;color:#6b625d;">
            Pilihan bunga meja elegan untuk mempercantik ruangan dan momen spesial.
        </p>

        <div class="product-grid">

            <div class="card">

                <img src="bunga meja/meja1.jpg">

                <h3>Bunga Meja Mawar</h3>

                <p>Rp 350.000</p>

                <button class="primary"
                onclick="addCart('Bunga Meja Mawar',350000)">
                    Tambah Keranjang
                </button>

            </div>

            <div class="card">

                <img src="bunga meja/meja2.jpg">

                <h3>Bunga Meja Lily</h3>

                <p>Rp 450.000</p>

                <button class="primary"
                onclick="addCart('Bunga Meja Lily',450000)">
                    Tambah Keranjang
                </button>

            </div>

            <div class="card">

                <img src="bunga meja/meja3.jpg">

                <h3>Bunga Meja Premium</h3>

                <p>Rp 550.000</p>

                <button class="primary"
                onclick="addCart('Bunga Meja Premium',550000)">
                    Tambah Keranjang
                </button>

            </div>

        </div>

    </div>

</div>

<script>

function addCart(n,h){

let currentCart=JSON.parse(localStorage.getItem('rere_florist_cart'))||[];

currentCart.push({
n:n,
h:parseInt(h)
});

localStorage.setItem(
'rere_florist_cart',
JSON.stringify(currentCart)
);

notif("💐 Berhasil ditambahkan ke keranjang!");

}

function notif(text){

let n=document.getElementById('notif');

let nt=document.getElementById('notifText');

nt.innerText=text;

n.style.display='block';

setTimeout(function(){

n.style.display='none';

},1500);

}

</script>

</body>
</html>