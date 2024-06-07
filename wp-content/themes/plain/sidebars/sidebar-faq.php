<div class="side_sect side--faq" id="side--faq">
  <?php if( have_rows('faq') ): ?>
    <ul class="side--faq_list">
      <?php $faq_num = 1; while ( have_rows('faq') ) : the_row(); ?>
        <li class="side--faq_item side--faq_item<?php echo $faq_num; ?> por bg_clr-wht-bf poa-bf radius3-bf op0-bf ts-fast-bf hov-op95-bf">
          <span class="active_line bg_clr-main ts op65"></span>
          <?php
          $faq_ttl = get_sub_field('faq_ttl');
          ?>
          <a href="#sect-faq<?php echo $faq_num; ?>" class="smooth hov-clr-main ts-fast flx flx-stt-ctr w-m faq_link" data-mgn="head">
            <svg viewBox="<?php echo VB_LOGO_A; ?>" class="clr-body_dk" width="14" height="16"><use xlink:href="#logo-a"></use></svg>
            <span class="txt"><?php echo $faq_ttl; ?></span>
          </a>
          <span class="btn-tgl bdr_clr-main-bf ts"></span>
          <ul>
            <?php if( have_rows('faq_list') ): ?>
              <?php $faq_bloc_num = 1; while ( have_rows('faq_list') ) : the_row(); ?>
                <?php
                $faq_list_q = get_sub_field('faq_list_q');
                ?>
                <li class="faq--bloc faq--bloc<?php echo $faq_bloc_num; ?> por ts-fast-bf bdr_clr-main-bf">
                  <a href="#faq--bloc<?php echo $faq_num.$faq_bloc_num; ?>" class="smooth hov-clr-main faq_link ts-fast ls-50" data-mgn="head"><?php echo $faq_list_q; ?></a>
                </li>
              <?php $faq_bloc_num++; endwhile; ?>
            <?php endif; ?>
          </ul>
        </li>
      <?php $faq_num++; endwhile; ?>
    </ul>
  <?php endif; ?>
</div>