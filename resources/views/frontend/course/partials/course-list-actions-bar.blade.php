<div class="h-clear">
   <div class="course-list__item-thumbnail-actions">
      <div class="item-thumbnail-actions -width-full">
         <div class="userBadge-stats">
            <div aria-label="User stats" class="userStats">
               <ul class="sc-ministats-group">
                  <li title="{{$item->num_of_learn}} học viên" class="sc-ministats-item">
                     <a href="{{$link_detail}}" rel="nofollow" class="sc-ministats sc-ministats-small sc-ministats-followers">
                     <span class="sc-visuallyhidden">{{$item->num_of_learn}} học viên</span><span aria-hidden="true">{{$item->num_of_learn}}</span>
                     </a>
                  </li>
                  <li title="7 tracks" class="sc-ministats-item">
                     <a href="{{$link_detail}}" rel="nofollow" class="sc-ministats sc-ministats-small sc-ministats-sounds">
                     <span class="sc-visuallyhidden">{{$item->love}} quan tâm</span><span aria-hidden="true">{{$item->love}}</span>
                     </a>
                  </li>
                  <li title="7 tracks" class="sc-ministats-item">
                     <a target="_blank" href="{{route('course.share')}}" rel="modal:open" class="sc-ministats sc-ministats-small sc-ministats-share">
                     <span class="sc-visuallyhidden">Chia sẻ khóa học</span><span aria-hidden="true">Chia sẻ</span>
                     </a>
                  </li>
               </ul>
            </div>
         </div>
      </div>
   </div>
</div>