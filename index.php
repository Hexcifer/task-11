<?php
$data = [
    [
        "position" => 1,
        "url" => "https://www.nike.com/",
        "title" => "Nike. Just Do It. Nike.com",
        "description" => "Nike delivers innovative products, experiences and services to inspire athletes."
    ],
    [
        "position" => 2,
        "url" => "https://www.instagram.com/nike/?hl=de",
        "title" => "Nike (@nike) • Instagram photos and videos",
        "description" => "255m Followers, 147 Following, 1019 Posts - See Instagram photos and videos from Nike (@nike)"
    ],
    [
        "position" => 3,
        "url" => "https://twitter.com/nike",
        "title" => "Nike - Twitter",
        "description" => "Welcome to Nike FC. We're not a club. We're a community. If you love the game of football, you're a part of Nike FC. Let's change the game, ..."
    ],
    [
        "position" => 4,
        "url" => "https://en.wikipedia.org/wiki/Nike,_Inc.",
        "title" => "Nike, Inc. - Wikipedia",
        "description" => "Nike, Inc is an American multinational corporation that is engaged in the design, development, manufacturing, and worldwide marketing and sales of footwear, ..."
    ],
    [
        "position" => 5,
        "url" => "https://www.youtube.com/user/nike",
        "title" => "Nike - YouTube",
        "description" => "We will continue to stand up for equality and work to break down barriers for athletes* all over the world. We will do and invest more to uphold ..."
    ],
    [
        "position" => 6,
        "url" => "https://www.footlocker.com/category/brands/nike.html",
        "title" => "Nike Sneakers, Apparel, and Accessories - Foot Locker",
        "description" => "Shop the latest selection of Nike at Foot Locker. Find the hottest sneaker drops from brands like Jordan, Nike, Under Armour, ..."
    ]
];
?>

<!DOCTYPE html>
<html>
<head>
    <title>Data Table</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        table, th, td {
            border: 1px solid black;
        }
        th {
            background-color: #00FFFF;
        }
        th, td {
            padding: 8px;
            text-align: left;
        }
        
    </style>
</head>
<body>

<h2>Data Table</h2>

<table>
    <tr>
        <th>Position</th>
        <th>URL</th>
        <th>Title</th>
        <th>Description</th>
    </tr>
    <?php foreach ($data as $row): ?>
    <tr>
        <td><?php echo $row["position"]; ?></td>
        <td><a href="<?php echo $row["url"]; ?>" target="_blank"><?php echo $row["url"]; ?></a></td>
        <td><?php echo $row["title"]; ?></td>
        <td><?php echo $row["description"]; ?></td>
    </tr>
    <?php endforeach; ?>
</table>

</body>
</html>