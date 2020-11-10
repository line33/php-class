<?php
// create a dummy data
$data = [
    'male' => ['micheal', 'john', 'peter', 'samuel', 'james', 'ifeanyi', 'friday'],
    'female' => ['ennie', 'grace', 'mary', 'joy', 'peace', 'anita', 'aisha', 'zinab']
];

define('ARRAY_LENGTH', count($data));

// use the foreach loop to get the list of males
// and females
foreach ($data as $genderName => $genderList)
{
    array_map(function($name) use ($genderName){
        //echo $genderName . ':', $name, PHP_EOL;
    }, $genderList);
}

// use the do-while loop to get the list of males
// and females
$index = 0;
$keys = array_keys($data);
$values = array_values($data);

// do{
    
//     // Get the gender name
//     $genderName = $keys[$index];

//     // get the gender list
//     $genderList = $values[$index];

//     // get names
//     array_map(function($name) use ($genderName){
//         //echo $genderName . ':', $name, PHP_EOL;
//     }, $genderList);

//     // $index++;
// }
// while($index < ARRAY_LENGTH);


// use the while loop to get the list of males
// and females
while($index < ARRAY_LENGTH)
{
    // Get the gender name
    $genderName = $keys[$index];

    // get the gender list
    $genderList = $values[$index];

    // get names
    array_map(function($name) use ($genderName){
        //echo $genderName . ':', $name, PHP_EOL;
    }, $genderList);

    $index++;
}

// use the for loop to get the list of males
// and females
for ($index = 0; $index < ARRAY_LENGTH; $index++)
{
    // Get the gender name
    $genderName = $keys[$index];

    // get the gender list
    $genderList = $values[$index];

    // get names
    array_map(function($name) use ($genderName){
        echo $genderName . ':', $name, PHP_EOL;
    }, $genderList);
}


$products = [
    'category' => [
        'fruit' => [
            'mango' => [
                'price' => 2000,
                'quantity' => 5,
                'image' => 'https://wkwkwkdkd'
            ]
        ],
        'veggie' => [
            'carrot' => [
                'price' => 1000,
                'quantity' => 5,
                'image' => 'https://wkwkwkdkd'
            ]
        ]
    ]
];

?>

<form action="" method="post">
    <label>Categories</label>
    <select name="category">
        <?php
            foreach ($products['category'] as $categoryName => $category) echo '<option value="'.$categoryName.'">'.$categoryName.'</option>';
        ?>  
    </select>

    <label> Product Name </label>
    <input type="text" name="product_name" placeholder="Enter a product name">

    <button type="submit">Filter</button>
</form>

<?php

// get category
$category = isset($_POST['category']) ? $_POST['category'] : null;
$product_name = isset($_POST['product_name']) ? $_POST['product_name'] : null;

if ($category !== null && $product_name !== null)
{
    $categoryList = $products['category'];

    // display requested product
    if (isset($categoryList[$category]))
    {
        $productList = $categoryList[$category];

        // check if product exists in category
        if (isset($productList[$product_name]))
        {
            $productInfo = $productList[$product_name];

            // use html
            ?>

            <section>
                <img src="<?=$productInfo['image']?>" style="border:1px solid #000; height:60px; width:120px;"/> 
                <h3><?=ucfirst($product_name)?></h3>
                <span><b>Price:</b> $<?=$productInfo['price']?></span>
                <span><b>Quantity:</b> <?=$productInfo['quantity']?></span>
            </section>

            <?php
        }
    }
}
else
{
    // display all the products
}