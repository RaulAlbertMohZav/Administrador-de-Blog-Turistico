 <div id="header" style="background-image: url({{ $headerInfo->bg_image }})">
     <div class="inner" class="pr-css">
         <header>
             <h1 title="Edit Title" class="d-flex justify-content-center">
                 <a id="logo">{{ $headerInfo->title }}</a>
             </h1>
         </header>
         @if ($showFooter)
             <footer>
                 <a href="{{ $idBtnFooter }}" class="button circled scrolly">Welcome</a>
             </footer>
         @endif
         @if ($isAdmin)
             <x-pencil-edit-header :item="$headerInfo->getRouteKey()"></x-pencil-edit-header>
         @endif
     </div>
     {{ $slot }}
 </div>
