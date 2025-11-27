<?php 
    while ($row = $result->fetch_assoc()) {
        $sequence = $row["id"] - 1;
        $banner = "images/" . $sequence . "/banner."; 
        $title = $row["title"];
        $subtitle = $row["subtitle"];
?>

<div class="wrapper">
    <a href="" class="card">
        <picture>
            <source srcset="<?php echo $banner . "avif" ?>" type="image/avif">
            <img src="<?php echo $banner . "jpg" ?>" alt="<?php echo $title . " " . $subtitle ?>">
        </picture>
        <section>
            <h1><?php echo $title ?></h1>
            <h2><?php echo $subtitle ?></h2>
        </section>
    </a>
</div>

<?php 
    }
?>
