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
    <h5>Example: 1</h5>
    <h4><b>Note: </b>Components help you extend basic HTML elements to encapsulate reusable code</h4>
    <h4><b>Rules: </b> all-lowercase, must contain a hyphen, Make sure the component is registered before you instantiate your root Vue instance</h4>
    <pre>
         var component = Vue.extend({
          template: ''
         })
         Vue.component('my-component', component)
    </pre>
    <my-component></my-component>
    <br>
    <h4>Example: 2</h4>
    <h5><b>Note: </b>define(Vue.extend()) and register(Vue.component) in one step</h5>
    <pre>
         var component = Vue.component('my-secondcomponent', {
          template: ''
         })
         new Vue({
          el: '#app'
         })
    </pre>
    <my-secondcomponent></my-secondcomponent>
</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!-- Vue Js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.js"></script>
<script>
    /* Example 1 begin*/
    var component = Vue.extend({
        template: '<div><b>Result: </b>Welcome onboard! {{ name }}</div>',
        data: function(){
            return { name: 'Sarath TS' }
        }
    })

    Vue.component('my-component', component)
    /* Example 1 end*/

    /* Example 2 begin*/
    var component = Vue.component('my-secondcomponent', {
        template: '<div><b>Result: </b>{{ firstname }}.{{ lastname }}</div>',
        data: function(){
            return {
                firstname: 'Sarath',
                lastname: 'TS'
            }
        }
    })
    /* Example 2 end*/
    new Vue({
        el: '#app'
    })
</script>
</body>
</html>