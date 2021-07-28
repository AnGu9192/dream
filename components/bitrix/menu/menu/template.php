<?php if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die(); ?>

<?if (!empty($arResult['ALL_ITEMS']))
echo '<pre>';
print_r($arResult);
echo '</pre>';

?>
  <div class="collapse navbar-collapse" id="navbarResponsive">

<ul id="tmMainNav" class="nav flex-column text-uppercase text-right tm-main-nav">
		<?php foreach($arResult['ALL_ITEMS'] as $arItem):?>
			<?php if($arItem['SELECTED']): ?>
               <li class="nav-item">
                  <a href="<?=$arItem['LINK'];?>" class="nav-link active">
                    <span class="d-inline-block mr-3"><?=$arItem['TEXT'];?></span>
                    <span class="d-inline-block tm-white-rect"></span>
                  </a>
                </li>
				<?php else: ?>
			    <li><a href="<?=$arItem['LINK'];?>"><?=$arItem['TEXT'];?></a></li>
			    <?php endif; ?>
		<?php endforeach; ?>
</ul>

</div>
