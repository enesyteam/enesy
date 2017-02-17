<div class="site-header__categories is-hidden-tablet-and-below">
   <div class="header-categories">
      <div class="grid-container">
         <ul class="header-categories__links">
            <li class="header-categories__links-item">
               <a class="header-categories__main-link" href="{{route('courses.index')}}">Tất cả khóa học</a>
               <div class="header-categories__links-dropdown js-categories-all-files-dropdown">
                  <ul class="hub-header-dropdown">
                     <li>
                        <a href="#">Khóa học nổi bật nhất</a>
                     </li>
                     <li>
                        <a href="#">Khóa học mới nhất</a>
                     </li>
                     <li>
                        <a href="#">Đang khuyến mãi</a>
                     </li>
                  </ul>
               </div>
            </li>
            <?php foreach($list_cat_parent as $p=>$p_value){ 
                  $child = isset($list_cat_child[$p_value->id]) ? $list_cat_child[$p_value->id]: array();
                  $url_pcat = route('course.listByCat',['id'=>$p_value->id]);

               ?>
            <li class="header-categories__links-item">
               <a class="header-categories__main-link" href="<?php echo $url_pcat; ?>">
               {{$p_value->title}}
               </a>  
               <?php if($child){ ?>
               <div class="header-categories__links-dropdown js-categories-0-dropdown">
                  <ul class="hub-header-dropdown">
                     <?php foreach($child as $p=>$c_value){ 
                        $url_ccat = "";

                        ?>
                     <li>
                        <a class="hub-header-dropdown__top" href="{{$url_ccat}}">{{$c_value->title}}</a>
                     </li>
                     <?php }?>
                     
                  </ul>
               </div>
               <?php }?>
            </li>
            <?php }?>
            
            <li class="header-categories__links-item menu-demo-only">
               <a class="header-categories__main-link" href="#">
               Html pages
               </a>  
               <div class="header-categories__links-dropdown js-categories-6-dropdown">
                  <ul class="hub-header-dropdown">
                     <li>
                        <a class="hub-header-dropdown__top" href="{{route('user.author')}}">Giảng viên</a>
                     </li>
                     <li>
                        <a class="hub-header-dropdown__top" href="{{route('course.view')}}">Học</a>
                     </li>
                  </ul>
               </div>
            </li>
         </ul>
      </div>
   </div>
</div>