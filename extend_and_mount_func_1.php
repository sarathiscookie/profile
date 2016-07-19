<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Extend & Mount</title>

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
    <h2>Example1</h2>
    <h4>If a Vue instance didn't given "el", it will be unmounted. "vm.$mount()" can be used manually to start compilation/mounting of an unmounted Vue instance</h4>
    <div id="component"></div>
    <pre>var profile = new component({
        data:{
            firstname: '',
            lastname: ''
        }
    })

    profile.$mount('#component')
    </pre>

    <h2>Example2</h2>
    <div id="component_two"></div>
    <pre>var profile = new component({
        el: '#component_two',
        data:{
            firstname: '',
            lastname: ''
        }
    })
    </pre>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!-- Vue Js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.24/vue.js"></script>
<script>
    var component = Vue.extend({
        template: '<p>{{firstname}} - {{lastname}}</p>'
    })

    var profile = new component({
        data:{
            firstname: 'Matt',
            lastname: 'Hard'
        }
    })

    profile.$mount('#component')

    var component_two = Vue.extend({
        template: '<p>{{firstname}} - {{lastname}}</p>'
    })

    var profile_two = new component_two({
        el: '#component_two',
        data:{
            firstname: 'Peter',
            lastname: 'Brad'
        }
    })
</script>
</body>
</html>