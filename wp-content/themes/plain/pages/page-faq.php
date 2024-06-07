<div class="container por">

  <div class="inner sect_pdg-sm">
    <div class="fix_wrap flx-rev flx flx-btw-j flx-xspc-blc">

      <main class="main_column">

        <?php if( have_rows('faq') ): ?>
          <?php $faq_num = 1; while ( have_rows('faq') ) : the_row(); ?>
            <section class="sect sect-faq sect-faq<?php echo $faq_num; ?> bg_clr-wht" id="sect-faq<?php echo $faq_num; ?>">
              <?php
              $faq_ttl = get_sub_field('faq_ttl');
              ?>
              <h2 class="head3 logo_a_ttl ls-150 txt-ctr por btm24">
                <span class="ttl"><?php echo $faq_ttl; ?></span>
                <svg viewBox="<?php echo VB_LOGO_A; ?>" class="logo-a clr-body_dk op20" width="48" height="48"><use xlink:href="#logo-a"></use></svg>
              </h2>
              <div class="faq--list">
                <?php if( have_rows('faq_list') ): ?>
                  <?php $faq_bloc_num = 1; while ( have_rows('faq_list') ) : the_row(); ?>
                    <?php
                    $faq_list_q = get_sub_field('faq_list_q');
                    $faq_list_a = get_sub_field('faq_list_a');
                    ?>
                    <div class="faq--bloc faq--bloc<?php echo $faq_num.$faq_bloc_num; ?> bdr_clr-body" id="faq--bloc<?php echo $faq_num.$faq_bloc_num; ?>">
                      <h3 class="faq_q fnt-lg por btm8 clr-body_dk-bf"><?php echo $faq_list_q; ?></h3>
                      <div class="faq_a por clr-main-bf"><?php echo $faq_list_a; ?></div>
                    </div>
                  <?php $faq_bloc_num++; endwhile; ?>
                <?php endif; ?>
              </div>
            </section>
          <?php $faq_num++; endwhile; ?>
        <?php endif; ?>
      </main>

      <?php get_sidebar(); ?>

    </div>
  </div>

</div>