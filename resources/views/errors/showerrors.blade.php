@if($errors->any())
    <ul class="alert alert-info" style="list-style: none;width: 100%;">
        @foreach($errors->all() as $error)

            <li>{{ $error }}</li>

        @endforeach
    </ul>

@endif
<div class="flash-message" style="width: 100%;">
    @foreach (['danger', 'warning', 'success', 'info'] as $msg)
        @if(Session::has('alert-' . $msg))
            <div class="rounded-md flex items-center px-5 py-4 mb-2 border border-theme-1 text-theme-1 dark:text-theme-10 dark:border-theme-10"> <i data-feather="alert-circle" class="w-6 h-6 mr-2"></i> {!! Session::get('alert-' . $msg)  !!} </div>
        @endif
    @endforeach
</div>