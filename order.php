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
        <div class="c_photo" style="display:flex; flex-direction:column; align-items: center; gap:10px;">
            <img src="./images/order.jpg" alt="">
            <div>
                <a href="./index.php" style="text-decoration:none; color:dodgerblue; font-size:15px;">Back to home</a>
            </div>
        </div>
        <form action="addOrder.php" method="POST">
            <div class="head">
                <h1 class="letter">Make An</h1>
                <h1>Order</h1>
            </div>
            <div class="space">
                <div class="space_1">
                    <label for="first_name">First name</label>
                    <input type="text" placeholder="Enter your First name" name="first_name" id="first_name" required>
                </div>
                <div class="space_1">
                    <label for="phone_number">Phone number</label>
                    <input type="tel" placeholder="+233" name="phone_number" id="phone_number" required>
                </div>
            </div>
            <div class="space_select">
                <label for="meal">Meals Available</label>
                <select name="meal" class="drop_down" id="meal" required>
                    <option value="">Select a meal</option>
                    <option value="Fried Rice">Fried rice</option>
                    <option value="Waakye">Waakye</option>
                    <option value="Konkonte">Konkonte</option>
                    <option value="Banku">Banku</option>
                    <option value="Jollof">Jollof</option>
                </select>
            </div>
            <div class="delivery">
                <label>Delivery</label>
                <div>
                    <label for="has_delivery_yes">Yes</label>
                    <input type="checkbox" name="has_delivery" id="has_delivery_yes" value="Yes">
                </div>
                <div>
                    <label for="has_delivery_no">No</label>
                    <input type="checkbox" name="has_delivery" id="has_delivery_no" value="No" checked>
                </div>
            </div>
            <div class="status">
                <div>
                    <label for="VIP">VIP</label>
                    <input type="radio" name="customer_type" id="VIP" value="VIP">
                </div>
                <div>
                    <label for="Regular">Regular</label>
                    <input type="radio" name="customer_type" id="Regular" value="Regular" checked>
                </div>
            </div>
            <div class="space_x">
                <label for="additions">Any Additions to the Order?</label>
                <textarea placeholder="Type here...." id="additions" cols="30" rows="10" name="additions"></textarea>
            </div>
            <div class="datetime">
                <input type="date">

            </div>
            <button type="submit" class="sub">Submit</button>
            <div class="powered">
                <p>Powered by G_TWELVE <br> Version 101.01</p>
            </div>
        </form>
    </main>
</body>
</html>
