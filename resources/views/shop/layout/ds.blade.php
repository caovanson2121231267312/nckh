<div class="block-breadcrumbs affix-top container1" data-spy="affix" data-offset-top="30">
    <div class="cps-container">
        <ul>
            <li>
                <a href="{{route('home')}}" title="Trở về trang chủ"><svg xmlns="http://www.w3.org/2000/svg" width="12" height="10.633"
                        viewBox="0 0 12 10.633">
                        <path id="home"
                            d="M13.2,9.061H12.1v3.965a.6.6,0,0,1-.661.661H8.793V9.721H6.15v3.965H3.507a.6.6,0,0,1-.661-.661V9.061h-1.1c-.4,0-.311-.214-.04-.494L7,3.259a.634.634,0,0,1,.936,0l5.3,5.307c.272.281.356.495-.039.495Z"
                            transform="translate(-1.471 -3.053)" fill="#d70018"></path>
                    </svg>Trang chủ</a>

                <i class="fas fa-chevron-right fa-sm"></i>
            </li>
            @if(isset($file))
                <li>
                    <a href="#" title="">{{$file}}</a>

                    <i class="fas fa-chevron-right fa-sm"></i>
                </li>
            @endif
            @if(isset($data->category->name))
                 <li>
                    <a href="#" title="">{{$data->category->name}}</a>

                    <i class="fas fa-chevron-right fa-sm"></i>
                </li>
            @endif

            {{-- <li>
                <a href="#" title="">Samsung</a>

                <i class="fas fa-chevron-right fa-sm"></i>
            </li>
            <li>
                <a href="#" title="">Samsung Galaxy Z Fold3 5G....</a>

            </li> --}}
        </ul>
    </div>
</div>
