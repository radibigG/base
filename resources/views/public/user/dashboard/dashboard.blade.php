@extends('_layouts/user/user')

@section('content')
    
@endsection

@section('vuejs')
    <script>
    new Vue ({
        el: '#app',
        data: () => ({
            loading: false,
        }),
        mounted() {
        },
        methods: {
        }
    })
    </script>
@endsection
