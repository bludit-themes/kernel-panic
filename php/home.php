<!-- Section -->
<section class="content">
        <?php foreach ($content as $page): ?>
                <article class="page">
                        <?php Theme::plugins('pageBegin') ?>
                        <header>
                                <a href="<?php echo $page->permalink() ?>">
                                        <h2><?php echo $page->title() ?></h2>
                                </a>
				<?php if ($page->description()): ?>
					<p class="description"><?php echo $page->description() ?></p>
				<?php endif ?>
                                <?php if( $page->coverImage() ) { ?>
                                        <img src="<?php echo $page->coverImage() ?>" alt="<?php echo $page->slug() ?>">
                                <?php } ?>
                        </header>
                        <?php echo $page->contentBreak() ?>
                        <footer>
                                <?php if ($page->readMore() ) { ?>
                                <div class="readmore">
                                        <a href="<?php echo $page->permalink() ?>">
                                                <i class="icon-arrow-down"></i> <?php echo $language->get('Read more') ?>
                                        </a>
                                </div>
                                <?php } ?>
                        </footer>
                        <?php Theme::plugins('pageEnd') ?>
                </article>
        <?php endforeach ?>
</section>

<!-- Pagination -->
<ul class="pagination">
<?php
if (Paginator::showPrev()) {
        echo '<li><a href="'.Paginator::previousPageUrl().'" class="float-right">'.$language->get('Next page').'</a></li>';
}
if (Paginator::showNext()) {
        echo '<li><a href="'.Paginator::nextPageUrl().'">'.$language->get('Previous page').'</a></li>';
}
?>
</ul>
