<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Computed</title>

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div id="app" class="container">
    <div v-for="plan in plans">
        <plan :plan="plan"></plan>
    </div>
</div>

<template id="plan-template">
    <div class="row">
        {{ $data|json }}
        <div class="col-md-12">
            <div class="col-md-4"><span>{{ plan.name }}</span></div>
            <div class="col-md-4"><span>{{ plan.amount }}</span></div>
            <div class="col-md-4"><button @click="activeplan">Subscribe</button></div>
        </div>
    </div>
    <br />
</template>

<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!-- Vue Js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.24/vue.js"></script>
<script>
    new Vue({
        el: '#app',

        data: {
            plans: [
                { name: 'Enterprise', amount: '100/month' },
                { name: 'Professional', amount: '75/month' },
                { name: 'Starter', amount: '50/month' },
                { name: 'Free', amount: '0/month' }
            ]
        },

        components:{
            plan: {
                template: '#plan-template',

                props: ['plan'],

                data: function(){
                    return {
                        active: false
                    };
                },

                methods:{
                    activeplan: function(){
                        this.active = this.plan;
                    }
                }
            }

        }
    })
</script>
</body>
</html>