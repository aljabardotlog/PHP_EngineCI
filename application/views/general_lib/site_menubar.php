@php
$kd_user = $this->session->userdata('kd_user');
$sqlmenu = $this->db->query("SELECT a.*, b.name, b.class, b.icon FROM menu_user a JOIN menu b WHERE a.kd_user='$kd_user' AND a.kd_menu=b.kd_menu GROUP BY b.posisi ORDER BY b.posisi ASC");
@endphp
<div class="site-menubar site-menubar-dark">
  <div class="site-menubar-body">
    <div>
      <div>
        <ul class="site-menu" data-plugin="menu">
      <li class="site-menu-category">Menu</li>
          @foreach($sqlmenu->result() as $keymenu)
              @if($keymenu->kd_menu_sub==0)
                @if($menu_aktif==$keymenu->name)
                  <li class="site-menu-item active">
                @else
                  <li class="site-menu-item">
                @endif
                    <a class="animsition-link" href="{{ base_url().$keymenu->class }}">
                            <img src="{{base_url()}}adl_/icons/{{$keymenu->icon}}" width="25px">
                            <span class="site-menu-title">{{ $keymenu->name }}</span>
                        </a>
                  </li>
              @else
                @if($menu_aktif===$keymenu->name)
                  <li class="site-menu-item has-sub active open">
                @else
                  <li class="site-menu-item has-sub">
                @endif
                  <a href="javascript:void(0)">
                          <img src="{{base_url()}}adl_/icons/{{$keymenu->icon}}" width="25px">
                          <span class="site-menu-title">{{ $keymenu->name }}</span>
                                  <span class="site-menu-arrow"></span>
                      </a>
                  <ul class="site-menu-sub">
                    @php
                    $count = $this->db->query("SELECT count(kd_menu) as count FROM menu_sub WHERE kd_menu='$keymenu->kd_menu'")->row();
                    $submenu = $this->db->query("SELECT a.*, b.kd_user FROM menu_sub a JOIN menu_user b WHERE b.kd_user='$kd_user' AND a.kd_menu='$keymenu->kd_menu' AND a.kd_menu_sub=b.kd_menu_sub ORDER BY posisi ASC LIMIT $count->count");
                    @endphp

                    @foreach($submenu->result() as $submenu)
                      @if($kd_user===$submenu->kd_user)
                          @if($sub_menu_aktif==$submenu->name)
                            <li class="site-menu-item active">
                          @else
                            <li class="site-menu-item">
                          @endif
                            <a class="animsition-link" href="{{ base_url().$submenu->class }}">
                              <span class="site-menu-title">{{ $submenu->name }}</span>
                            </a>
                          </li>
                      @endif
                    @endforeach

                    </ul>
                  </li>
              @endif
              
            @endforeach
            </ul>
          </li>
        </div>
    </div>
  </div>
</div> 
