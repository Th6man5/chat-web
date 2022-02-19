@extends('layouts.app', ['class' => 'bg-default'])

@section('content')
    <div class="header bg-gradient-primary py-7 py-lg-8">
        <div class="container">
            <div class="header-body text-center mt-7 mb-7">
                <div class="row justify-content-center">
                    <div class="col-lg-5 col-md-6">
                        <h1 class="text-white">{{ __('Welcome to Argon Dashboard FREE Laravel Live Preview.') }}</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="separator separator-bottom separator-skew zindex-100">
            <svg x="0" y="0" viewBox="0 0 2560 100" preserveAspectRatio="none" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <polygon class="fill-default" points="2560 0 2560 100 0 100"></polygon>
            </svg>
        </div>
    </div>

    @section('scripts')
<script >

const messaging = firebase.messaging();

    messaging.getToken({vapidKey: "BBAKAjX7xX3RO9W4McGS2MQbfg5RR1mLreU9GBy6tMyWQE2wYXWK_rURdGKaKaBtTTDyDxg3FSHR0YSwP8eSHrc"});

axios.post('/api/save-token' , {
   test: 'test'

}).then(res => {
   console.log(res);
});
</script>
@endsection

    <div class="container mt--10 pb-5"></div>
@endsection
