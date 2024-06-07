$(window).on('load',function(){

  /* サイドバー固定
  ********************************************** */
    $top_pos = 96;
    var sidebar = new StickySidebar('.side_column', {
      topSpacing: $top_pos,
      bottomSpacing: 20,
      resizeSensor: true,
      containerSelector: '.fix_wrap',
      innerWrapperSelector: '.side_column--in'
    });

    setTimeout(function(){
      sidebar.updateSticky();
    },1000);

    $archive_list = '.archive_list--ttl,.archive_label';
    if ( $archive_list.length ) {
      $($archive_list).on('click',function(){
        setTimeout(function(){
          sidebar.updateSticky();
        },600);
      });
    }

});