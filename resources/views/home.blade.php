<!DOCTYPE html>
<html>
<head>
     <meta charset="utf-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

     <meta name="csrf-token" content="{{ csrf_token() }}">
     <title>Smart-Crib</title>
     <base href="http://127.0.0.1:8000/">
     <link rel="stylesheet" href="/bootstrap/css/bootstrap.min.css">
     <script src="/bootstrap/js/bootstrap.min.js" type="text/JavaScript"></script>
     <script src="/js/jquery-3.2.1.min(first).js" type='text/JavaScript'></script>
     <!--CSS---->
     <link href="{{ asset('CSS/home.css') }}" rel="stylesheet" type="text/css" >

     <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
     <body>
         <div class="backgroundDiv">
                 
         </div>

         <div class="parentContainer">
                 <div class="header">
                         <ul>
                                 <li></li>
                                 <li></li>
                                 <li></li>
                                 <li></li>
                                 <li></li>
                                 <li></li>
                         </ul>
                 </div>
                 <div class="banner">
                         
                 </div>
                 <div class="products">
                         
                 </div>
                 <div class="footer">
                         <div class="col-md-2"><i></i></div>
                         <div class="col-md-2"><i></i></div>
                         <div class="col-md-2"><i></i></div>
                         <div class="col-md-2"><i></i></div>
                         <div class="col-md-2"><i></i></div>
                         <div class="col-md-2"><i></i></div>
                 </div>
         </div>

         <script src="/">
            // var propStore;
            var type0 = "application/x-www-form-urlencoded";
            var type1 = 'application/json';
            var theToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
         
            function smartCribServer(method, url, data, type, theToken){
                     var xhttp = new XMLHttpRequest();
                         xhttp.open(method, url, true);
                         xhttp.setRequestHeader('X-CSRF-TOKEN', theToken);
                         xhttp.setRequestHeader("X-Requested-With", 'XMLHttpRequest');
                         xhttp.setRequestHeader("processData", 'false');
                         xhttp.setRequestHeader('cache', 'false');
                         xhttp.setRequestHeader("ContentType", type);
                         xhttp.send(data);
                         return xhttp;
            }
           
            // load products to front page!
            window.onload = function(){
                smartCribServer('GET', '/storeFrontProducts', '', 'type1', theToken)
                .onreadystatechange 
                = function(){
                        if (this.readystate == 4 && this.status == 200) {
                              var data = this.responseText;
                              console.log(data);
                              useData(param);
                        }else{
                              alert('something when wrong!');
                        }
                  };
            }

            function useData(param){
                 var element = '<div>' +
                                    '<div></div>' +
                                    '<div>' +
                                       '<div><p>Name</p></div>' +
                                       '<div><p><span>$200</span></p></div>' +
                                    '</div>' +
                                    '<p>brief discription</p>' +
                               '</div>';
            }

         </script>
     </body>
</head>
</html>