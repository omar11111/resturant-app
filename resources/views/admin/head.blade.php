<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="csrf-token" content="{{ csrf_token() }}">

<title>{{ config('app.name', 'Laravel') }}</title>

<!-- Fonts -->
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

{{-- tabler css --}}
{{-- <link href="{{ asset('css/dashboard/ltr/tabler.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/dashboard/ltr/tabler-flags.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/dashboard/ltr/tabler-payments.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/dashboard/ltr/tabler-vendors.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/dashboard/ltr/demo.min.css') }}" rel="stylesheet"/> --}}

{{-- tabler rtl --}}
<link href="{{ asset('css/dashboard/rtl/tabler.rtl.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/dashboard/rtl/tabler-flags.rtl.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/dashboard/rtl/tabler-payments.rtl.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/dashboard/rtl/tabler-vendors.rtl.min.css') }}" rel="stylesheet"/>
<link href="{{ asset('css/dashboard/rtl/demo.rtl.min.css') }}" rel="stylesheet"/>


