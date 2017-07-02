<?php foreach ($news as $news_item): ?>
        <h3><?php echo $news_item['title']; ?></h3>
        <div class="main">
                <?php echo $news_item['text']; ?>
        </div>
        <p>
        	<a href="<?php echo site_url('news/'.$news_item['slug']); ?>">Ver</a>
        	<a href="<?php echo site_url('news/delete/'.$news_item['id']); ?>">Eliminar</a>
        </p>
<?php endforeach; ?>