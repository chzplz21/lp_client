
<div class = "buttonContain">
  @foreach  ($tabs_links['links'] as $link)
   <a href="#" class="btn btn-lg btn-icon {{$link['button_color']}}" data-toggle="modal" data-target="{{$link['data_target']}}" data-tooltip="true" title="Edit Customer"><i class="fas {{$link['fa']}}"></i></a>
  @endforeach
</div>


<div class="row">
  <div class="col-md-12">
    <ul class="nav nav-tabs">
     @foreach  ($tabs_links['tabs'] as $tab)
        <li class = "{{$tab['class']}} nav-item nav-link">
          <a href="{{$tab['tab_href']}}" data-toggle="tab">{{$tab['tab_name']}}</a>
        </li>

      @endforeach


    </ul>
  </div>
</div>
