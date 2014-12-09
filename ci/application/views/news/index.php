<?php foreach($news as $news_item): ?>

    <h2><?php echo $news_item['title']?></h2> 
    <div class="main">
    <?php echo $news_item['text']?>
    </div>
    <p><a herf="http://192.168.81.128/news/<?php echo $news_item['slug']?>">View article </a></p>

    <?php endforeach ?>
