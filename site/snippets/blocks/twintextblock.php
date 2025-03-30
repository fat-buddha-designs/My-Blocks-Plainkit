<div class="twin--text--block">
  <?php foreach ($block->texts()->toStructure() as $Item): ?>
    <div class="text <?= $class ?>">
        <?= svg('/assets/icons/' . $Item->icon()) ?>
      <?= $Item->text()->kt() ?>
    </div>
  <?php endforeach; ?>
</div>
