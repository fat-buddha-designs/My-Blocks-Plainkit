<main>
  <h1><?= $page->title() ?></h1>
  <?php foreach ($page->pageContent()->toBlocks() as $block): ?>
    <?php if ($block): ?>
      <div id="<?= $block->id() ?>" class="block--type--<?= $block->type() ?>">
        <?php snippet('blocks/' . $block->type(), ['block' => $block]) ?>
      </div>
    <?php endif; ?>
  <?php endforeach ?>
</main>

