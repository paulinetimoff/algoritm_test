<?php
    require_once('templates/top.php');


    if(isset($_GET['url'])){
        $url = $_GET['url'];
    }else{
        $url = 'one';
    }
    $query = "SELECT * FROM articles WHERE url = '$url'";

    $art_obj = mysqli_query($link, $query);

    if(!$art_obj){
        exit($query);
    }

    $article = mysqli_fetch_array($art_obj);

?>

<section class="py-20 bg-gray-700 flex justify-start md:justify-center">
    <div class="container mx-auto text-white">
        <div class="text-center md:text-left md:mr-8">
            <h3 class="text-4xl text-white font-bold mb-4"></h3>
            <a href="/article.php?url=<?= $article['url'] ?>"
                class="inline-block mb-4 text-xl font-semibold text-white hover:text-white sm:text-2xl lg:text-xl xl:text-2xl">
            <?= $article['tittle'] ?>
            </a>
        </div>
        <h5>
            <?= $article['content'] ?>
        </h5>
    </div>
</section>
    
<?php
    require_once('templates/footer.php');
?>
