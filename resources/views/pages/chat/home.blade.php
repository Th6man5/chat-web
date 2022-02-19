@extends('layouts.app')
@section('content')
@endsection

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
