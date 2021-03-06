<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Dynamic props[]</title>

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
    <h4>Dynamic Props</h4>
    <input type="text" v-model="parentMsg">
    <child :msg.sync="parentMsg"></child><br>

    <h4>Binding props:[] and The shorthand syntax for v-bind: </h4>
    <h5>eg-> :my-message="parentMsg"</h5>
    <h4>one-way-down binding</h4>
    <pre>
        :msg="parentMsg"
    </pre>
    <h4>two-way binding: The two-way binding will sync the change of child’s msg property back to the parent’s parentMsg property</h4>
    <pre>
        :msg.sync="parentMsg"
    </pre>
    <h4>one-time binding: The one-time binding, once set up, will not sync future changes between the parent and the child</h4>
    <pre>
        :msg.once="parentMsg"
    </pre>
    <br>

</div>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js" integrity="sha384-0mSbJDEHialfmuBBQP6A4Qrprq5OVfW37PRR3j5ELqxss1yVqOtnepnHVP9aJ7xS" crossorigin="anonymous"></script>
<!-- Vue Js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/vue/1.0.26/vue.js"></script>
<script>
    Vue.component('child', {
        props: ['msg'],
        template: '<div>{{ msg }}</div>'
    })

    new Vue({
       el: '#app',
       data:{
           parentMsg: ''
       }
    });
</script>
</body>
</html>