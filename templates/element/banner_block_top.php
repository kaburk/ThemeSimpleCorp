<?php if ($bannerDatas->count()) : ?>
  <?php foreach ($bannerDatas as $bannerData) : ?>
    <?php if ($bannerData->url) : ?>
      <?php if ($bannerData->blank) : ?>
        <a href="<?php echo h($bannerData->url) ?>" target="_blank">
          <img src="<?php echo h($bannerData->name) ?>" alt="<?php echo h($bannerData->alt) ?>">
        </a>
      <?php else : ?>
        <a href="<?php echo h($bannerData->url) ?>">
          <img src="<?php echo h($bannerData->name) ?>" alt="<?php echo h($bannerData->alt) ?>">
        </a>
      <?php endif ?>
    <?php else : ?>
      <img src="<?php echo h($bannerData->name) ?>" alt="<?php echo h($bannerData->alt) ?>">
    <?php endif ?>
  <?php endforeach ?>
<?php endif ?>
