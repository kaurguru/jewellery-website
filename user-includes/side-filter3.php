<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Earrings</title>
    <!-- <link href="https://forms.visme.co/formsPlayer/90xz1qdg-simple-report-download"> -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=DM+Sans:ital,opsz,wght@0,9..40,100..1000;1,9..40,100..1000&display=swap">
    <link
        href="https://fonts.googleapis.com/css2?family=Baloo+2:wght@400..800&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Lora:ital,wght@0,400..700;1,400..700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />

    <link rel="stylesheet" href="styling.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
</head>

<body>

    <div class="side-filter">
    <form action="searchbar3.php" method="POST">
            <div class="heading-filter">
                <p>Home/Artificial</p>
                <h3>Refine By</h3>
            </div>
            <div class="sub-category">
                <h4><ion-icon name="remove-outline" class="line"></ion-icon>Category</h4>
               
                <div>
                    <a href="earrings.php?category=<?= $item['earring']; ?>"></a>
                  
                        <input type="checkbox" value="gold"  disabled  name="search_value"><label>Gold</label><br>
                        <input type="checkbox" value="silver"  disabled name="search_value"><label>Silver</label><br>
                        <input type="checkbox" value="artificial"checked name="searh_value"><label>Artificial</label><br>

                   
                </div>
               
            </div>
       
            <div class="category-filter">
                <h4><ion-icon name="remove-outline" class="line"></ion-icon>Sub-Category</h4>
                <div>


                    <input type="checkbox" value="bangles" name="search_value"><label>Bangles </label><br>
                    <input type="checkbox" value="earrings" name="search_value"> <label>Earrings</label><br>
                    <input type="checkbox" value="chains" name="search_value"><label>Chains</label><br>
                    <input type="checkbox" value="necklaces" name="search_value"><label>Necklaces</label><br>
                    <input type="checkbox" value="rings" name="search_value"><label>Rings</label><br>
                    <input type="checkbox" value="pendent" name="search_value"><label>pendants</label><br>
                    <input type="submit" value="Filter" name="search_btn">
        </form>
    </div>

    </div>

    <div class="price-range">
        <h4><ion-icon name="remove-outline" class="line"></ion-icon>Price Range</h4>
        <div>
            <input type="checkbox" value="5 " name="search_value"><label>Below Rs.500 (7)</label><br>
            <input type="checkbox" value="100 " name="search_value"><label>Rs.500-1000 (116)</label><br>
            <input type="checkbox" value="150" name="search_value"><label>Rs.1001-1500 (206)</label><br>
            <input type="checkbox" value="2 " name="search_value"><label>Rs.1501-2000 (212)</label><br>
            <input type="checkbox" value="30 " name="search_value"><label>Rs.2001-3000 (181)</label><br>
            <input type="checkbox" value="4000 " name="search_value"><label>Rs.3001-4000 (181)</label><br>
            <input type="checkbox" value="50 " name="search_value"><label>Rs.4001-5000 (181)</label><br>
            <input type="checkbox" value="60 " name="search_value"><label>Rs.5001-6000 (181)</label><br>
            <input type="checkbox" value="20 " name="search_value"><label>Rs.6001-7000 (181)</label><br>
            <input type="checkbox" value=" 80" name="search_value"><label>Rs.7001-8000 (181)</label><br>
            <input type="checkbox" value="90 " name="search_value"><label>Rs.9001-10000 (181)</label><br>
            <input type="checkbox" value=" 110" name="search_value"><label>Rs.11001-12000 (181)</label><br>
            <input type="checkbox" value="120 " name="search_value"><label>Rs.12001-13000 (181)</label><br>
            <input type="checkbox" value="130 " name="search_value" value=" "><label>Rs.13001-14000 (181)</label><br>
            <input type="submit" value="Filter" name="search_btn">
        </div>
    </div>
    </form>

    </div>

</body>

</html>