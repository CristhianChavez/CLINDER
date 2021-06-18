@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card">
                    <div class="card-header">{{ __('Dashboard') }}</div>


                        @foreach($resultadoa as $fotoss)
                        @endforeach

                        <div id="app">

                        </div>
                    </div>
                </div>
            </div>
        </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vue/2.3.4/vue.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/0.16.2/axios.min.js"></script>
    <script src="https://unpkg.com/vue@next"></script>
    <script>
        new Vue({
            data: function() {
                return {
                    profilepic: null,
                };
            },
            methods: {
                getImage(url) {
                    this.profilepic = 'https://i.ibb.co/S7w86d5/defaultotro.jpg';
                    return axios.get(url, { responseType: 'arraybuffer' });
                },
            },
            mounted() {
                this
                    .getImage('https://i.ibb.co/S7w86d5/defaultotro.jpg')
                    .then(({ data }) => {
                        // simulamos una carga
                        setTimeout(() => {
                            // convertimos el buffer en base64
                            const image = btoa(
                                new Uint8Array(data)
                                    .reduce((acc, byte) => acc + String.fromCharCode(byte), '')
                            );
                            this.profilepic = `data:image/png;base64,${image}`;
                        }, 1500);
                    });
            },
        }).$mount('#app');
    </script>
        <style>
            img {
                border: 4px solid #ccc;
                border-radius: 4px;
                display: block;
                height: 100px;
                margin: 25px auto;
                width: 100px;
            }
        </style>
@endsection
