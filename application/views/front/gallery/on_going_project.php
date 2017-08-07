<div class="clearfix margin_top6"></div>
<div class="featured">
    <div class="container tex-center">
        <?php foreach($lists as $list):  ?>
        <a class="fancybox-effects-c fancybox-buttons" data-fancybox-group="button" title="<?=$list->name?>" href="<?=base_url()?>assets/images/portfolio/<?=$list->image ?>">
            <div class="concern animate" data-anim-type="fadeIn" data-anim-delay="100">
                <img src="<?=base_url()?>assets/images/portfolio/<?=$list->image?>" alt="" class="rimg" />
            </div><!-- end section -->
        </a>
        <?php endforeach; ?>
    </div>
</div><!-- end featured section 123 -->

       