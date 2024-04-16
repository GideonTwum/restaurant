<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <main>
        <div class="c_photo">
            <img src="./images/order.jpg" alt="">
        </div>
        <form action="addOrder.php" method ="POST">
            <div class="head">
                <h1 class="letter">Make A</h1>
                <h1>n Order</h1>
            </div>
            <div class="space">
                <div class="space_1">
                    <label for="">First name</label>
                    <input type="text" placeholder="enter your First name " name="first_name">
                </div>
                <div class="space_1">
                    <label for="">Phone number</label>
                    <input type="number" placeholder="+233" name="phone_number">
                </div>
            </div>
           <div class="space_select">
            <label for="">Meals Available</label>
            <select name="Meals Available" class="drop_down" id="Meals_Available">
                <option value="Pizza">Select a meal</option>
                <option value="Pizza">Fried rice</option>
                <option value="Pizza">Waakye</option>
                <option value="Pizza">Konkonte</option>
                <option value="Pizza">Banku</option>
                <option value="Pizza">Jollof</option>
            </select>
           </div>

           <div class="delivery">
            <label for="">Delivery</label>
            <div >
                <label for="">Yes</label>
                <input type="checkbox" name = "delivery">
            </div>
            <div>
                <label for="">No</label>
                <input type="checkbox" name = "delivery">
            </div>
           
            
           </div>

           <div class="status">
            <div>
                <label for="">VIP</label>
                <input type="radio" name = "status">
            </div>
            <div>
                <label for="">Regular</label>
                <input type="radio" name = "status">
            </div>
           </div>

            <div class="space_x">
                <label for="">Any Additions to the Order?</label>
               <textarea placeholder="type here...." name="" id="" cols="30" rows="10" name="additions"></textarea>
            </div>

            <button class="sub">Submit</button>
            <div class="powered">
                <p>Powered by G_TWELVE <br> Version 101.01</p>
            </div>
        </form>
    </main>
</body>
</html>