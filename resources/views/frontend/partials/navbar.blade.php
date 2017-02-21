<div class="site-header__categories is-hidden-tablet-and-below">
   <div class="header-categories">
      <div class="grid-container">
         <ul class="header-categories__links">
            <li class="header-categories__links-item">
               <a class="header-categories__main-link" href="{{route('home')}}">Tất cả khóa học</a>
               <div class="header-categories__links-dropdown js-categories-all-files-dropdown">
                  <ul class="hub-header-dropdown">
                     <li>
                        <a href="{{route('home',['sort'=>'num_of_learn'])}}">Khóa học nổi bật nhất</a>
                     </li>
                     <li>
                        <a href="{{route('home',['sort'=>'id'])}}">Khóa học mới nhất</a>
                     </li>
                     <li>
                        <a href="{{route('home',['sort'=>'trending'])}}">Đang khuyến mãi</a>
                     </li>
                  </ul>
               </div>
            </li>
            <?php foreach($list_cat_parent as $p=>$p_value){ 
                  $child = isset($list_cat_child[$p_value->id]) ? $list_cat_child[$p_value->id]: array();
                  $url_pcat = route('course.listByCat',['id'=>$p_value->id,'alias'=>$p_value->alias]);

               ?>
            <li class="header-categories__links-item">
               <a class="header-categories__main-link" href="<?php echo $url_pcat; ?>">
               {{$p_value->title}}
               </a>  
               <?php if($child){ ?>
               <div class="header-categories__links-dropdown js-categories-0-dropdown">
                  <ul class="hub-header-dropdown">
                     <?php foreach($child as $p=>$c_value){ 
                        $url_ccat = route('course.listByCat',['id'=>$c_value->id,'alias'=>$c_value->alias]);


                        ?>
                     <li>
                        <a href="{{$url_ccat}}">{{$c_value->title}}</a>
                     </li>
                     <?php }?>
                     
                  </ul>
               </div>
               <?php }?>
            </li>
            <?php }?>
            
            <li class="header-categories__links-item">
               <a class="header-categories__main-link" href="#">
               Html pages
               <span class="e-text-label -size-s -color-grey-light" style="color: red">Dev. only</span>
               </a>  
               <div class="header-categories__links-dropdown js-categories-6-dropdown">
                  <ul class="hub-header-dropdown">
                     <li>
                        <a class="hub-header-dropdown__top" href="{{route('user.author')}}">Giảng viên</a>
                     </li>
                     <li>
                        <a class="hub-header-dropdown__top" href="{{route('course.view')}}">Học</a>
                     </li>
                     <li>
                        <a class="hub-header-dropdown__top" href="{{route('course.search_result')}}">Kết quả tìm khóa học</a>
                     </li>
                     
                  </ul>
               </div>
            </li>
         </ul>
                     @yield('custom-navbar')
      </div>
   </div>
</div>