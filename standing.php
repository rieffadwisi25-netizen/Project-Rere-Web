<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Standing Flower</title>
    <!-- Importing your main font and styles so it looks identical to your index page -->
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:wght@500;700&family=Montserrat:wght@300;400;500;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <style>
        .product-page-container {
            padding: 50px 20px;
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
            font-family: 'Montserrat', sans-serif;
        }

        .back-link {
            display: inline-block;
            text-decoration: none;
            margin-bottom: 30px;
            font-weight: 500;
        }

        /* Reusing your index style choices here */
        h1, h3 {
            font-family: 'Cormorant Garamond', serif;
            color: #4a403a;
        }

        h1 {
            font-size: 50px;
            color: #6f5643;
        }

        .product-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 25px;
            width: 100%;
            margin-top: 20px;
        }

        .card {
            background: white;
            border: 1px solid #e8d9d1;
            border-radius: 20px;
            overflow: hidden;
            padding-bottom: 20px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.02);
            transition: .3s;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0,0,0,0.05);
        }

        .card img {
            width: 100%;
            height: 250px;
            object-fit: cover;
        }

        .card p {
            font-weight: 600;
            color: #D4AF37;
            margin-bottom: 15px;
        }

        button {
            border: none;
            padding: 12px 28px;
            border-radius: 30px;
            cursor: pointer;
            font-weight: 600;
            font-family: 'Montserrat', sans-serif;
            transition: .3s;
        }

        .primary {
            background: linear-gradient(135deg, #D4AF37, #F5D76E);
            color: #111;
        }

        .primary:hover {
            transform: translateY(-3px);
            box-shadow: 0 10px 25px rgba(212,175,55,.4);
        }

        .secondary {
            background: #eae3da;
            color: #4a403a;
            border: 1px solid #e8d9d1;
        }

        /* Floating notification box */
        #notif {
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            color: #4a403a;
            border: 1px solid #D4AF37;
            padding: 20px 30px;
            border-radius: 20px;
            display: none;
            z-index: 9999;
            box-shadow: 0 10px 25px rgba(0,0,0,0.1);
            font-weight: 600;
        }
    </style>
</head>
<body>

    <div id="notif"><span id="notifText"></span></div>

    <div class="product-page-container">
        <!-- Kept exactly your file choice reference 17822672305806155201194262756036_60ea5f.jpg context links -->
        <a href="index.php" class="back-link secondary">
            ← Kembali
        </a> 

        <div class="glass" style="margin: 0 auto; background: rgba(255, 255, 255, 0.85); backdrop-filter: blur(10px); padding: 30px; border-radius: 25px; border: 1px solid #e8d9d1;">
            <h1>Standing Flower</h1>
            <p style="margin-bottom: 30px; color: #6b625d;">Pilihan rangkaian bunga terbaik untuk setiap momen berharga Anda.</p>

            <div class="product-grid">

                <div class="card">
                    <img src="standing/standing2.jpg" alt="Ucapan Standing">
                    <h3>Ucapan Standing</h3>
                    <p>Rp 750.000</p>
                    <button class="primary" onclick="addCart('Ucapan Standing', 750000)">
                        Tambah Keranjang
                    </button>
                </div>

                <div class="card">
                    <img src="standing/standing3.jpg" alt="Wedding Standing">
                    <h3>Wedding Standing</h3>
                    <p>Rp 950.000</p>
                    <button class="primary" onclick="addCart('Wedding Standing', 950000)">
                        Tambah Keranjang
                    </button>
                </div>

                <div class="card">
                    <img src="standing/standing4.jpg" alt="Business Standing">
                    <h3>Business Standing</h3>
                    <p>Rp 1.250.000</p>
                    <button class="primary" onclick="addCart('Business Standing', 1250000)">
                        Tambah Keranjang
                    </button>
                </div>

            </div>
        </div>
    </div>

<script>
function addCart(n, h) {
    // 1. Get the current cart items from localStorage, or start empty if none exist
    let currentCart = JSON.parse(localStorage.getItem('rere_florist_cart')) || [];
    
    // 2. Add the selected standing flower item
    currentCart.push({ n: n, h: parseInt(h) });
    
    // 3. Save the updated array back to localStorage memory
    localStorage.setItem('rere_florist_cart', JSON.stringify(currentCart));
    
    // 4. Trigger the notification pop-up
    notif("💐 Berhasil ditambahkan ke keranjang!");
}

function notif(text) {
    let n = document.getElementById('notif');
    let nt = document.getElementById('notifText');
    if (n && nt) {
        nt.innerText = text;
        n.style.display = 'block';
        setTimeout(() => {
            n.style.display = 'none';
        }, 1500);
    } else {
        alert(text); // Fallback if element isn't found
    }
}
</script>
</body>
</html>